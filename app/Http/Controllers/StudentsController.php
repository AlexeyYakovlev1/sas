<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentsController extends Controller
{
    public function view_students(Request $request)
	{
		if ($request->person !== "employee")
		{
			return abort(404);
		}

		$student_id = $request->student_id;
		$find_student = ["id" => $student_id];

		Log::info("HERE ".$request->fullUrl());

		$payload = array_merge([
			"student" => $find_student, "openModal" => (bool) $student_id],
			$request->payload
		);
		
		return view("pages.home.students", $payload);
	}

	public function view_student_list(Request $request)
	{
		if ($request->person !== "student")
		{
			return abort(404);
		}

		return view("pages.home.studentList", $request->payload);
	}

	public function students_info(Request $request)
	{
		$find_students = [];

		return response(
			[
				"success" => true,
				"students" => $find_students
			],
			200
		)->header("Content-Type", "application/json");
	}

	public function card_info(Request $request, string $content)
	{
		$student_id = $request->student_id;
		$find_student = ["id" => $student_id];

		if (!isset($content) || !$content)
		{
			$content = "#main";
		}

		// Удаляем #
		$content = substr($content, 0);
		$data = [];

		// Для определенного контента ищем данные
		switch($content)
		{
			case "main":
				$data = ["description" => "Main"];	
				break;
			case "employee":
				$data = ["description" => "Employee"];	
				break;
			case "docs":
				$data = ["description" => "Docs"];	
				break;
			case "mode_service":
				$data = ["description" => "Mode service"];	
				break;
			case "achivments":
				$data = ["description" => "Achivments"];	
				break;
			case "volunteering":
				$data = ["description" => "Volunteering"];	
				break;
			case "student":
				$data = ["description" => "Student"];
				break;
		}

		$data = [
			"data" => $data,
			"personId" => $student_id
		];

		return response(
			[
				"success" => true,
				"data" => $data
			],
			200
		)->header("Content-Type", "application/json");
	}
}
