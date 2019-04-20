<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

use App\Category;
use App\Job;
class JobController extends Controller
{
    public function addJob(Request $request){
    	//storing data
    	if ($request->isMethod('post')) {
    		$data =$request->all();
    		//dd($data);
            // if (empty($data['category_id'])){
            //     return redirect()->back()->with('flash_message_error', 'Under Category is missing');
            // }
    		$job = new Job;
            
    		$job->category_id = $data['category_id'];
            $job->company = $data['company'];

    		$job->title = $data['title'];
    		$job->description = $data['description'];
            $this->validate($request, ['file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
    		  //upload image
            if($request->hasFile('image')){
                 $image_tmp = Input::file('image');
                if($image_tmp->isValid()){

                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'public/adminpanel/uploads/job/large/'.$filename;
                    $small_image_path ='public/adminpanel/uploads/job/small/'.$filename;
                    //Resize images
                    Image::make($image_tmp)->save($large_image_path);
                    // Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    //store image name in products table
                    $job->image = $filename;

                }
            }

    		    		// dd($job->image);

    		$job->opening_job = $data['opening_job'];
    		//dd($job->opening_job);
    		$job->location = $data['location'];
    		 //$job->available_time = $data['available_time'];
    		$job->save();
               return redirect()->back()->with('flash_message', 'Your Job Has Been Successfully Created');

    		


    	}
    	// Categories dropdown start
    	$categories = Category::where(['parent_id'=>0])->get();
    	$categories_dropdown = "<option selected disabled>Select</option>";
    	// dd($categories_dropdown );
    	foreach($categories as $cat){
    		$categories_dropdown .= "<option value ='".$cat->id."'>".$cat->title."</option>";
    		$sub_categories = Category::where(['parent_id'=>$cat->id])->get();
    		foreach( $sub_categories as $sub_cat){
    			$categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp--&nbsp;".$sub_cat->title.
    			"</option>";
    		}
    	}
                   // Categories dropdown ends


    return view('admin.jobs.create')->with(compact('categories_dropdown'));
    }


     public function viewJobs(Request $request){
        $jobs = Job::get();
        //dd($jobs);
        return view('admin.jobs.view')->with(compact('jobs'));
    }
  public function edit(Request $request,$id=null){
    //Updating data 
    if($request->isMethod('post')){
            $data= $request->all();
// dd($data);
              //upload image
            if($request->hasFile('image')){
                 $image_tmp = Input::file('image');
                if($image_tmp->isValid()){

                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'public/adminpanel/uploads/job/large/'.$filename;
                    $small_image_path ='public/adminpanel/uploads/job/small/'.$filename;
                    //Resize images
                    Image::make($image_tmp)->save($large_image_path);
                    // Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    //store image name in products table
                    

                }
            }
            else{
                $filename = $data['current_image'];
            }
              Job::where(['id'=>$id])->update(['category_id'=>$data['category_id'],'title'=>$data['title'],'description'=>$data['description'],'opening_job'=>$data['opening_job'],'location'=>$data['location'],'image'=>$filename]);
 return redirect()->back()->with('flash_message', 'Job Has Been Successfully Updated');
    }
    //Get Job Details
   $jobDetails = Job::where(['id'=>$id])->first();
   // Categories dropdown start
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option selected disabled>Select</option>";
        // dd($categories_dropdown );
        foreach($categories as $cat){
            if($cat->id == $jobDetails->category_id){
                $selected="selected";

            }
            else{
                $selected="";
            }
            $categories_dropdown .= "<option value ='".$cat->id."' ".$selected.">".$cat->title."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach( $sub_categories as $sub_cat){
                    if($sub_cat->id == $jobDetails->category_id){
                $selected="selected";

            }
            else{
                $selected="";
            }
                $categories_dropdown .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp--&nbsp;".$sub_cat->title.
                "</option>";
            }
        }
           // Categories dropdown ends

   return view('admin.jobs.edit', compact('jobDetails', 'categories_dropdown'));
        
}
     public function delete($id=null){
                
                    Job::where(['id'=>$id])->delete();
                    return redirect()->back()->with('flash_message','Job Has Been Deleted Successfully');
                
             }

public function deleteJobImage($id = null){
    Job::where(['id'=>$id])->update(['image'=>'']);
     return redirect()->back()->with('flash_message', 'Job Image Has Been Successfully Deleted');

    }
    // public function delete($id = null){
    // Job::where(['id'=>$id])->delete();
    //  return redirect()->back()->with('flash_message', 'Job Image Has Been Successfully Deleted');

    // }

}


