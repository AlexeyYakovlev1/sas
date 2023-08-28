<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmployeesController extends Controller
{
    public function view_employees(Request $request)
	{
		if ($request->person !== "director")
		{
			return abort(404);
		}

		$employee_id = $request->employee_id;
		$find_employee = ["id" => $employee_id];

		$payload = array_merge([
			"employee" => $find_employee, "openModal" => (bool) $employee_id],
			$request->payload
		);
		
		return view("pages.home.employees", $payload);
	}

	public function card_info(Request $request, string $content)
	{
		$employee_id = $request->employee_id;
		$find_employee = ["id" => $employee_id];
		
		if (!isset($content) || !$content)
		{
			$content = "description_from_director";
		} 

		// Удаляем #
		$content = substr($content, 0);
		$data = [];

		// Для определенного контента ищем данные
		switch($content)
		{
			case "description_from_director":
				$data = ["description" => "description_from_director"];	
				break;
			case "results_of_meeting":
				$data = ["description" => "results_of_meeting"];	
				break;
			case "results_of_prev_meeting":
				$data = ["description" => "results_of_prev_meeting"];	
				break;
		}

		$res = [
			"data" => $data,
			"employee" => $find_employee
		];

		return response(
			[
				"success" => true,
				"res" => $res
			],
			200
		)
			->header("Content-Type", "application/json");
	}

	public function employees_info(Request $request)
	{
		$find_employees = [];

		return response(
			[
				"success" => true,
				"employees" => $find_employees
			],
			200
		)->header("Content-Type", "application/json");
	}
}
