<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_auth(Request $request)
	{
		return view("pages.auth.login");
	}

	public function view_employee(Request $request)
	{
		return view("pages.auth.employee");
	}
	public function view_student(Request $request)
	{
		return view("pages.auth.student");
	}
	public function view_director(Request $request)
	{
		return view("pages.auth.director");
	}
}
