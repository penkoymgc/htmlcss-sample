<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
    	return view('snappers.portfolio');
    }

    public function photograph()
    {
    	return view('snappers.photograph');
    }

    public function video()
    {
    	return view('snappers.video');
    }
}
