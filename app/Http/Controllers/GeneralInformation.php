<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralInformation extends Controller
{
    public function view_general_information(Request $request) {
		return view("pages.home.generalInformation");
	}
}
