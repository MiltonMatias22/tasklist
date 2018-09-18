<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Session;
use Mail;

class StaticPageController extends Controller
{
    public function getHome()
    {
    	return view('website.home');
    }

    public function getAbout()
    {
    	return view('website.about');
    }

    public function getContact()
    {
    	return view('website.contact');
    }

    public function postContact(Request $request)
    {
      //validate data request
    	$fields = $request->validate([
        'name'        =>'required|between:5,50',
        'email'       =>'required|email|between:5,50',
        'phone'       =>'required|numeric',
        'bodyMessage' =>'required|min:5',
      ]);

      //Send email
      Mail::to('nodout.develops@gmail.com')
        -> send(new ContactMail($fields));
        
      //Success session message
      Session::flash('success', 'Email enviado com sucesso!');

      return redirect()->route('contact');
    }
}
