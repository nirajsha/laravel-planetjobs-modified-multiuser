<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Job;
use App\User;

class IndexController extends Controller
{ 
   public function index(){
   	
 //In ascending order default
 // $jobsAll = Job::get();

//In descending order
$jobsAll = Job::orderBy('id', 'DESC')->get();

//In random order
// $jobsAll = Job::inRandomOrder()->get();

$categories = Category::where(['parent_id'=>0])->get();
   	// dd($categories);

	   return view('index', compact('jobsAll', 'categories'));
   	}
}

   

