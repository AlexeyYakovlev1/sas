<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralInformationController extends Controller
{
    public function view_general_information(Request $request) {
		return view("pages.home.generalInformation", $request->payload);
	}
}
