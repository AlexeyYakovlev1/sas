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
		$find_employee = ["id" => $employee_id, "full_name" => "Ковальчук Дмитрий Николаевич"];
		
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

	public function description_from_director(Request $request, string $employee_id)
	{
		$find_employee = ["id" => $employee_id];
		$data = $request->validate(
			[
				"dateOfWrite" => "required|string|min:10|max:10",
				"fullNameStudent" => "required|string|min:10|max:50",
				"departament" => "required|string",
				"post" => "required|string|min:2|max:20",
				"periodOfWork" => "required|string|min:10",
				"achivmentsForWork" => "required|string|min:10",
				"strongSides" => "required|string|min:10",
				"commentsOnWork" => "required|string|min:10",
				"personalQualities" => "required|string|min:10",
				"developmentSides" => "required|string|min:10",
				"developCompetencies" => "required|string|min:10",
				"careerProspects" => "required|string|min:10"
			],
			[
				"dateOfWrite.required" => "Дата заполнения является обязательным полем",
				"dateOfWrite.string" => "Дата заполнения является строкой",
				"dateOfWrite.min" => "Длина даты заполнения 10 символов",
				"dateOfWrite.max" => "Длина даты заполнения 10 символов",

				"fullNameStudent.required" => "ФИО студента является обязательным полем",
				"fullNameStudent.string" => "ФИО студента является строкой",
				"fullNameStudent.min" => "Минимальная длина ФИО студента 10 символов, максимальная 50",
				"fullNameStudent.max" => "Минимальная длина даты заполнения 10 символов, максимальная 50",

				"departament.required" => "Департамент является обязательным полем",
				"departament.string" => "Департамент студента является строкой",

				"post.required" => "Должность является обязательным полем",
				"post.string" => "Должность является строкой",
				"post.min" => "Минимальная длина должности 2 символов, максимальная 20",
				"post.max" => "Минимальная длина должности 2 символов, максимальная 20",

				"periodOfWork.required" => "Период работы является обязательным полем",
				"periodOfWork.string" => "Период работы является строкой",
				"periodOfWork.min" => "Минимальная длина периода работы 10 символов",

				"achivmentsForWork.required" => "Достижения по работе является обязательным полем",
				"achivmentsForWork.string" => "Достижения по работе является строкой",
				"achivmentsForWork.min" => "Минимальная длина достижений по работе 10 символов",

				"strongSides.required" => "Сильные стороны является обязательным полем",
				"strongSides.string" => "Сильные стороны является строкой",
				"strongSides.min" => "Минимальная длина сильных сторон 10 символов",
				"strongSides.max" => "Минимальная длина сильных сторон 10 символов",

				"commentsOnWork.required" => "Комментарии по работе является обязательным полем",
				"commentsOnWork.string" => "Комментарии по работе является строкой",
				"commentsOnWork.min" => "Минимальная длина комментариев по работе 10 символов",

				"personalQualities.required" => "Личные качества является обязательным полем",
				"personalQualities.string" => "Личные качества является строкой",
				"personalQualities.min" => "Минимальная длина личных качеств 10 символов",

				"developmentSides.required" => "Зоны развития является обязательным полем",
				"developmentSides.string" => "Зоны развития является строкой",
				"developmentSides.min" => "Минимальная длина зон развития 10 символов",

				"developCompetencies.required" => "Компетенции является обязательным полем",
				"developCompetencies.string" => "Компетенции является строкой",
				"developCompetencies.min" => "Минимальная длина компетенций 10 символов",

				"careerProspects.required" => "Карьерные перспективы является обязательным полем",
				"careerProspects.string" => "Карьерные перспективы является строкой",
				"careerProspects.min" => "Минимальная длина карьерных перспектив 10 символов"
			]
		);

		$find_description_by_employee_id = ["id" => (int) $find_employee + 1];

		// Работа с обновлением характеристики от руководителя
		// ...

		return response(
			[
				"success" => true,
				"message" => "Характеристика обновлена",
				"data" => $data,
				"description" => $find_description_by_employee_id
			],
			200
		)
			->header("Content-Type", "application/json");
	}
}
