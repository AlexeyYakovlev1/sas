<?php

namespace App\Http;

use Illuminate\Support\Facades\Cookie;
use ReallySimpleJWT\Token;

class Utils
{
	public static function validate_jwt_token()
	{
		if (!isset($_COOKIE["token"]))
		{
			return false;
		}

		$token = $_COOKIE["token"];

		return !!$token;
	}

	public static function get_token()
	{
		$token = "";

		if (isset($_COOKIE["token"]))
		{
			$token = $_COOKIE["token"];
		}

		return $token;
	}

	public static function get_jwt_token()
	{
		if (!isset($_COOKIE["token"]))
		{
			return "";
		}

		return Token::getPayload(Cookie::get("jwt_token"), env("JWT_KEY"));
	}
}