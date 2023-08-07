<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentMovement extends Controller
{
    public function view_student_movement(Request $request)
	{
		return view("pages.home.studentMovement");
	}
}
