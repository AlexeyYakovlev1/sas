<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use ReallySimpleJWT\Token;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
		if (!array_key_exists("token", $_COOKIE))
		{
			return response(
				[
					"success" => false,
					"message" => "Доступ закрыт"
				],
				400
			)
				->header("Content-Type", "application/json");
		}

		$token = $request->cookie("token");
		$validate_token = Token::validate($token, env("SECRET_KEY"));
		
		if (!$validate_token)
		{
			return response(
				[
					"success" => false,
					"message" => "Доступ закрыт"
				],
				400
			)
				->header("Content-Type", "application/json");
		}
		
		$payload = Token::getPayload($token);

		if ($payload["person"] !== $role)
		{
			return response(
				[
					"success" => false,
					"message" => "Доступ закрыт"
				],
				400
			)
				->header("Content-Type", "application/json");
		}

        return $next($request);
    }
}
