<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
    	return view('snappers.index');
    }

    public function about()
    {
    	return view('snappers.about');
    }
}
