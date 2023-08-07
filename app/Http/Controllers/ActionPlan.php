<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionPlan extends Controller
{
    public function view_action_plan(Request $request)
	{
		return view("pages.home.actionPlan");
	}
}
