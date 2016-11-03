<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SearchController extends Controller
{
	public function index()
	{
		return view("Search/index");
	}
	
	public function bcategory()
	{
		return view("Search/bcategory");
	}
}




