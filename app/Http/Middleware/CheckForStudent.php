<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use ReallySimpleJWT\Token;
use Symfony\Component\HttpFoundation\Response;

class CheckForStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		$token = $request->cookie("token");
		$validate_token = Token::validate($token, env("SECRET_KEY"));

		if (!$validate_token)
		{
			return redirect("/auth/login");
		}

		$payload = Token::getPayload($token);
		$person = $payload["person"];

		$request->merge(["person" => $person]);
		
		return $next($request);
    }
}
