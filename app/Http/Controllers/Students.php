<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Students extends Controller
{
    public function view_students(Request $request)
	{
		return view("pages.home.students");
	}

	public function view_student_list(Request $request)
	{
		return view("pages.studentList");
	}
}
