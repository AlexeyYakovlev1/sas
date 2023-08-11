<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
			"person" => $request->person,
			"action_plan" => in_array($request->person, $important_persons), // план мероприятий
			"general_information" => $request->person === "employee", // общая информация
			"student_movement" => $request->person === "employee", // движение студентов
			"student_list" => $request->person === "student", // аттестационный лист
			"employees" => $request->person === "director", // сотрудники
			"students" => $request->person === "employee", // студенты
		];

		$request->merge(["payload" => $payload]);

        return $next($request);
    }
}
