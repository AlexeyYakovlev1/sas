<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_auth(Request $request)
	{
		return view("pages.auth.login");
	}
}
