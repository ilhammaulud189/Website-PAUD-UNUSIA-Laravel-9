<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index(request $request)
    {
        return view('pages.galery');
    }
   
}
