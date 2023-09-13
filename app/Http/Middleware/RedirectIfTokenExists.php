<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use ReallySimpleJWT\Token;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Utils;

class RedirectIfTokenExists
{
    public function handle(Request $request, Closure $next): Response
    {
		if (!Utils::validate_jwt_token())
		{
			return $next($request);
		}

		$token = Cookie::get("token");

		$payload = Token::getPayload($token);

		$role = $payload["role"];

		switch($role)
		{
			case "director":
				redirect("/home/employees");
				break;
			case "student":
				redirect("/home/student_list");
				break;
			case "employee":
				redirect("/home/general_information");
				break;
		}
    }
}
