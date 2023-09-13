<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_login_main(Request $request)
	{
		return view("pages.auth.login.index", [
			"auth" => false
		]);
	}

	public function view_login_employee(Request $request)
	{
		return view("pages.auth.login.employee", [
			"auth" => false
		]);
	}

	public function view_login_student(Request $request)
	{
		return view("pages.auth.login.student", [
			"auth" => false
		]);
	}

	public function view_login_director(Request $request)
	{
		return view("pages.auth.login.director", [
			"auth" => false
		]);
	}
}
