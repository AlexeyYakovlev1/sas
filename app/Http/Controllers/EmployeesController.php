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
		
		return view("pages.home.employees", $request->payload);
	}
}
