<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function view_employees(Request $request)
	{
		return view("pages.home.director.employees");
	}

	public function view_description_from_director(Request $request, string $id)
	{
		$find_employee = ["id" => $id];
		
		return view("pages.home.director.description");
	}
}
