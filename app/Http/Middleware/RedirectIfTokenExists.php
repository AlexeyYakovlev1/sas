<?php

namespace App\Http\Middleware;

use App\Http\Utils;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfTokenExists
{
    public function handle(Request $request, Closure $next): Response
    {
		if (!isset($_COOKIE["token"]))
		{
			return $next($request);
		}

		$payload = Utils::get_jwt_token();
		$role = $payload["info"][0]["status"];

		switch($role)
		{
			case "Руководитель":
				return redirect("/home/employees");
			case "Студент":
				return redirect("/home/student_list");
			case "Сотрудник":
				return redirect("/home/general_information");
		}
    }
}
