<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function view_general_information(Request $request)
	{
		return view("pages.home.employee.main", [
			"auth" => true
		]);
	}
}
