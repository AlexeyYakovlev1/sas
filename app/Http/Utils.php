<?php

namespace App\Http;

use Illuminate\Support\Facades\Cookie;
use ReallySimpleJWT\Token;


class Utils
{
	public static function validate_jwt_token()
	{
		if (!in_array("token", $_COOKIE))
		{
			return false;
		}

		$token = Cookie::get("token", env("JWT_KEY"));
		$token_validate = Token::validate($token, env("JWT_KEY"));

		return !!$token_validate;
	}
}