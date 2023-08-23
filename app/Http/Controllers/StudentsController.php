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
		
		return view("pages.home.students", $request->payload);
	}

	public function view_student_list(Request $request)
	{
		if ($request->person !== "student")
		{
			return abort(404);
		}

		return view("pages.home.studentList", $request->payload);
	}

	public function create_list(Request $request)
	{
		$data = $request->validate(
			[
				""
			],
			[]
		);
	}
}
