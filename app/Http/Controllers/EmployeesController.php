<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

	public function card_info(Request $request)
	{
		$employee_id = $request->employee_id;
		$find_employee = ["id" => $employee_id];

		$find_description_from_director = [];
		$result_prev_meet = [];
		$data = [
			"result_prev_meet" => $result_prev_meet,
			"find_description_from_director" => $find_description_from_director,
			"find_employee" => $find_employee,
			"personId" => $employee_id
		];

		return response(
			[
				"success" => true,
				"data" => $data
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
