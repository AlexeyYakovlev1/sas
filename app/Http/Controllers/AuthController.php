<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use ReallySimpleJWT\Token;

class AuthController extends Controller
{
    public function view_auth(Request $request)
	{
		return view("pages.auth.login");
	}

	public function logout(Request $request)
	{
		Cookie::queue(Cookie::forget("token"));
		return redirect("/auth/login");
	}

	public function login(Request $request)
	{
		$person = $request->input("person");
		$payload = [
			"exp" => time() + 10,
    		"iss" => "localhost",
			"person" => $person
		];
		$token = Token::customPayload(
			$payload,
			env("SECRET_KEY")
		);
		
		Cookie::queue("token", $token);

		return response(
			[
				"success" => true,
				"person" => $person
			],
			200
		)
			->header("Content-Type", "application/json");
	}
}
