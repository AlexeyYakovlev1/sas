<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function view_student_list(Request $request)
	{
		return view("pages.home.student.list");
	}

	public function view_employee_main(Request $request)
	{
		return view("pages.home.employee.students.main");
	}

	public function view_employee_certification(Request $request)
	{
		return view("pages.home.employee.students.certification");
	}

	public function view_employee_docs(Request $request)
	{
		return view("pages.home.employee.students.docs");
	}

	public function view_employee_mode_services(Request $request)
	{
		return view("pages.home.employee.students.mode_services");
	}

	public function view_employee_training(Request $request)
	{
		return view("pages.home.employee.students.training");
	}
}
