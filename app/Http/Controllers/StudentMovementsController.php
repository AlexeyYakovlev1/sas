<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentMovementsController extends Controller
{
    public function view_student_movement(Request $request)
	{
		if ($request->payload["redirect"])
		{
			return abort(404);
		}
		
		return view("pages.home.studentMovement", $request->payload);
	}
}
