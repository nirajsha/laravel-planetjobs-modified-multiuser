<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Input;
use Image;

class CategoryController extends Controller
{
public function view()
{
$categories = Category::paginate(6);
return view('admin.categories.view', compact('categories'));
}
public function create()
{
$categories =Category::all();
$levels = Category::where(['parent_id'=>0])->get();

return view('admin.categories.create', compact('categories','levels'));
}
public function store(Request $request)
{

if($request->isMethod('post')){
            //echo "<pre>"; print_r($data); die;
      $data = $request->all();
       $category = new Category;
      // dd($request);
      // $rule = $category->rules();
      // $check = $request->validate($rule);
     
      //dd($check);
     
      $category->title = ucwords(strtolower($data['title']));
      $category->parent_id = $data['parent_id'];
      if(empty($data['description'])){
       $category->description = "";
     } else {
       $category->description = $data['description'];
     }
         //Intervention image
     if($request->hasFile('image')){
      $image_tmp = Input::file('image');
      if($image_tmp->isValid()){
       $extension = $image_tmp->getClientOriginalExtension();
       $filename = rand(111,99999).'.'.$extension;
       $large_image_path = 'public/adminpanel/uploads/category/large/'.$filename;
       $small_image_path = 'public/adminpanel/uploads/category/small/'.$filename;
                     //Resize images
       Image::make($image_tmp)->save($large_image_path);
       Image::make($image_tmp)->resize(300,300)->save($small_image_path);
       //store image name in products table
       $category->image = $filename;
     }
   }
        // $category->icon = $data['icon'];

   $category->save();
   return redirect()->back()->with('flash_message', 'Your Category Has Been Successfully Created');
  }
  }



  public function edit(Request $request,$id=null){
   //echo"test";die;
    // dd($request);
    if($request->isMethod('post')){
     $data = $request->all();
             //echo "<pre>"; print_r($data); die;
                //dd('$data');
       Category::where(['id'=>$id])->update(['title'=>$data['title'],'description'=>$data['description']]);
       return redirect('admin/category/index')->with('flash_message', 'Successfully Updated');
     } 
              //Edit
     $categoryDetails= Category::where(['id'=>$id])->first();
           // dd($categoryDetails);
     $levels = Category::where(['parent_id'=>0])->get();
     return view('admin.categories.edit')->with(compact('categoryDetails', 'levels'));
    }


    public function delete( Request $request, $id=null){
      if(!empty($id)){
        Category::where(['id'=>$id])->delete();
        return redirect('admin/category/index')->with('flash_message', 'Successfully Deleted');
      }
    }
     public function trash(Category $category)
    {
        if($category->delete()){
            return back()->with('message','Category Successfully Trashed!');
        }else{
            return back()->with('message','Error Deleting Record');
        }
    }
    }
   