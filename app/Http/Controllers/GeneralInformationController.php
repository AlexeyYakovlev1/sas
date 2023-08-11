<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralInformationController extends Controller
{
    public function view_general_information(Request $request) {
		if ($request->person !== "employee") {
			return abort(404);
		}

		return view("pages.home.generalInformation", $request->payload);
	}
}
