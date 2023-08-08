<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use ReallySimpleJWT\Token;

class AuthController extends Controller
{
    public function view_auth(Request $request)
	{
		$token = Token::customPayload(["person" => "director"], env("SECRET_KEY"), time() + 3600, "localhost");
		Cookie::queue("token", $token);
		return view("pages.auth.login");
	}
}
