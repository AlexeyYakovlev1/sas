<?php

namespace App\Http\Middleware;

use App\Http\Utils;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfRoleWrong
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
		$payload = Utils::get_jwt_token();
		
		$role_from_token = $payload["info"][0]["status"];

		if ($role_from_token !== $role)
		{
			return abort(404);
		}

        return $next($request);
    }
}
