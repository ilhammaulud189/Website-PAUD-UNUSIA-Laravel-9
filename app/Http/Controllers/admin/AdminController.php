<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Sponsor;
use App\Models\lecturer;
use App\Models\Post;


class AdminController extends Controller
{
    public function index(Request $id)
    {

       
        $student = Student::all();
        $sponsor = Sponsor::count();
        $lecturer = lecturer::count();
        $blog = Post::count();
        //dd($student);
        return view('pages.admin.dashboard',compact('blog','sponsor','lecturer','student'));
        
        
    
    }


}
