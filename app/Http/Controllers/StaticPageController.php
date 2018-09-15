<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
