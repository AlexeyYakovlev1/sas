<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function view_general_information(Request $request)
	{
		return view("pages.home.employee.main");
	}

	public function view_employee_main(Request $request)
	{
		return view("pages.home.director.employee.main");
	}

	public function view_employee_certification(Request $request)
	{
		return view("pages.home.director.employee.certification");
	}

	public function view_employee_docs(Request $request)
	{
		return view("pages.home.director.employee.docs");
	}

	public function view_employee_mode_services(Request $request)
	{
		return view("pages.home.director.employee.mode_services");
	}

	public function view_employee_training(Request $request)
	{
		return view("pages.home.director.employee.training");
	}
}
