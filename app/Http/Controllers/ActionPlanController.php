<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionPlanController extends Controller
{
    public function view_action_plan(Request $request)
	{
		if ($request->person !== "employee") {
			return abort(404);
		}

		return view("pages.home.actionPlan", $request->payload);
	}
}

// сотрудник: общая информация, план мероприятий, движение студентовб студенты;
// студент: аттестационный лист;
// руководитель: сотрудники