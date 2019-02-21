<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;
use App\Mail\Forme;

class FormController extends Controller
{
	public function form()
	{
		return view('snappers.contact');
	}

	public function send(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$tel = $request->input('tel');
		$type = $request->input('type');
		$contact = $request->input('contact');
		$message = $request->input('message');
		$tome = "o.hassyadai.rkt@gmail.com";
		Mail::to($tome)->send(new Forme($name,$email,$tel,$type,$contact,$message));
		
		$to = $request->input('email');
		Mail::to($to)->send(new SampleNotification($name));

		return redirect()->route('contact');
	}
}
