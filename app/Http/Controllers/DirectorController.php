<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function view_employees(Request $request)
	{
		return view("pages.home.director.employees");
	}
}
