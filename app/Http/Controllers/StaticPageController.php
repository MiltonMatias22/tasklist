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

    public function postContact(Request $request)
    {
    	$name = $request -> name;
      $email = $request -> email;
      $phone = $request -> phone;
      $menssage = $request -> menssage;

      echo "<h3>Test Request</h3>";
      echo "Name: " . $name ."<br>";
      echo "Email: " . $email ."<br>";
      echo "Phone: " . $phone ."<br>";
      echo "Menssage: " . $menssage;
    }
}
