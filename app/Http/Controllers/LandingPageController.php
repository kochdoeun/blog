<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
	public function index()
	{
		return view("home/index");
	}
	
	public function about()
	{
		return view("home/about");
	}
	
}




