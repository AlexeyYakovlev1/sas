<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

	public function card_info(Request $request)
	{
		$find_person = $request->student_id;

		$main = [];
		$employee = [];
		$student = [];
		$docs = [];
		$mode_service = [];
		$achivments = [];
		$volunteering = [];

		$data = [
			"main" => $main,
			"employee" => $employee,
			"student" => $student,
			"docs" => $docs,
			"mode_service" => $mode_service,
			"achivments" => $achivments,
			"volunteering" => $volunteering,
			"personId" => $find_person
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
