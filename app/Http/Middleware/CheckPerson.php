<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPerson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		$important_persons = ["employee", "director"];
		$payload = [
			"student_movement" => in_array($request->person, $important_persons), // движение студентов
			"student_list" => $request->person === "student", // аттестационный лист
			"employees" => $request->person === "director", // сотрудники
			"students" => $request->person === "employee",
			"redirect" => !in_array($request->person, $important_persons) // редирект на страницу авторизиции
		];

		$request->merge(["payload" => $payload]);

        return $next($request);
    }
}
