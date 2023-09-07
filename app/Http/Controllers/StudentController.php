<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function view_student_list(Request $request)
	{
		return view("pages.home.student.list");
	}
}
