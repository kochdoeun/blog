<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BusinessPageController extends Controller
{
	public function index()
	{
		return view("businesspage/index");
	}
}