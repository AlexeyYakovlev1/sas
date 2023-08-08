<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionPlanController extends Controller
{
    public function view_action_plan(Request $request)
	{
		return view("pages.home.actionPlan", $request->payload);
	}
}
