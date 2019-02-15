<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class FormController extends Controller
{
	public function form()
	{
		return view('snappers.contact');
	}

	public function send(Request $request)
	{
		$name = $request->input('name');
		$text = view('emails.thanktext');
		$to = $request->input('email');
		Mail::to($to)->send(new SampleNotification($name, $text));

		return redirect()->route('contact');
	}
}
