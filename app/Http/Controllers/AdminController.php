<?php

namespace App\Http\Controllers;

use App\Mail\ProfileChange;
use App\Mail\PasswordChange;
use Illuminate\Http\Request;
use Auth;
use Session;
use File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{
    // Admin Login
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])){
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('flash_message_error', 'Invalid Username and Password');
            }
        }
        if(Auth::guard()->check()){
            return redirect()->route('dashboard');
        } else {
            return view ('admin.admin_login')->with('flash_message_error', 'Please Login to Access');
        }
    }

    // Dashboard
    public function dashboard(){
        return view ('admin.dashboard');
    }

    //Logout
    public function logout(){
        Session::flush();
        return redirect()->route('admin.login')->with('flash_message_success', 'Logout Successful');
    }

    // Admin Profile
    public function profile($id){
        $user = Auth::user()->findOrFail($id);
        return view ('admin.profile', compact('user'));
    }

    //update profile
    public function updateProfile(Request $request,$id){
        $user = Auth::user()->findOrFail($id);
        $data = $request->all();
        $user->name = ucwords(strtolower($data['name']));
        $user->email = strtolower($data['email']);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = rand(999,9999).'.'.$extension;
            $file->move('public/adminpanel/uploads/profile/', $filename);
            $user->image = 'public/adminpanel/uploads/profile/'.$filename;
        }
        $user->save();
        Mail::to($request->email)->send(new ProfileChange($request->all()));
        $image_path = $data['current_image'];
        if(!empty($data['image'])){
            if(File::exists($image_path)){
                File::delete($image_path);
            }
        }
        return redirect()->back()->with('flash_message', 'Your Profile has been updated Successfully');
    }

    // update password
    public function editPassword(Request $request){
        if ($request->isMethod('post')){
            $this->validate($request,[
                'current_password' => 'required',
                'new_password' => 'required',
                'confirm_password' => 'required'
            ]);

            $data = $request->all();

            $check_password = User::where(['email' => Auth::guard('web')->user()->email])->first();

            $current_password = $data['current_password'];
            if(Hash::check($current_password,$check_password->password))
            {
                $password = bcrypt($data['new_password']);
                User::where('email',Auth::guard('web')->user()->email)->update(['password'=>$password]);


                Mail::to($request->email)->send(new PasswordChange($request->all()));


                return redirect()->back()->with('flash_message','Password updated Successfully!');
            }
            else {
                return redirect()->back()->with('danger','Incorrect Current Password!');
            }
        }
        return view ('admin.edit_password');
    }

    // Checking Current Admin Password
    public function chkUserPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_password'];
        $user_id = Auth::guard('web')->user()->id;
        $check_password = User::where('id', $user_id)->first();
        if (Hash::check($current_password, $check_password->password)){
            echo "true"; die;
        }else{
            echo "false"; die;
        }
    }

}
