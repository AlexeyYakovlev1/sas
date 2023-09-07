<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_login_main(Request $request)
	{
		return view("pages.auth.login.index");
	}

	public function view_login_employee(Request $request)
	{
		return view("pages.auth.login.employee");
	}

	public function view_login_student(Request $request)
	{
		return view("pages.auth.login.student");
	}

	public function view_login_director(Request $request)
	{
		return view("pages.auth.login.director");
	}
}
