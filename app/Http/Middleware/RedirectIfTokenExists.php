<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use ReallySimpleJWT\Token;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfTokenExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		if (!array_key_exists("token", $_COOKIE)) {
			return $next($request);
		}

		$token = $request->cookie("token");
		$validate_token = Token::validate($token || "", env("SECRET_KEY"));

		if (!$validate_token) return $next($request);

		$payload = Token::getPayload($token);
		$person = $payload["person"];

		switch($person) {
			case "student":
				return redirect("/home/students/list");
			case "director":
				return redirect("/home/employees");
			case "employee":
				return redirect("/home/general_information");
		}

		return $next($request);
    }
}
