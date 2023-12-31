<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionPlanController extends Controller
{
    public function view_action_plan(Request $request)
	{
		if (!in_array($request->person, ["director", "employee"])) {
			return abort(404);
		}

		return view("pages.home.actionPlan", $request->payload);
	}
}