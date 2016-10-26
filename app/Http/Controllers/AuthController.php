<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
	public function showLogin()
	{
		return view("auth/showlogin");
	}

	public function showRegister()
	{
		return view("auth/showregister");
	}

	public function authenticate()
	{
		$email = "doeunkochd@gmail.com";
		$password = "1234567";
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			return redirect()->intended('userProfile');
		} else {
			echo "wrong";
			die;
		}
	}

	public function userProfile()
	{
		var_dump(Auth::user());
	}

	public function logout()
	{
		Auth::logout();
		Session::flush();

		return redirect('userLogin');
	}

}
