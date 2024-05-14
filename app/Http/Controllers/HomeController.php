<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Post;
use App\Models\Sponsor;
use App\Models\Testimonial;

use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index(Request $id)
    {

       
        $student = student::all();
        $blog = Post::latest()->paginate(3);
        $sponsor = Sponsor::latest()->paginate(10);
        $test = Testimonial::latest()->paginate(10);
        return view('pages.home',compact('sponsor','student','test','blog'));
        
        
    
    }

    

}
