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

	public function docs_info(Request $request)
	{
		$docs = $request->docs;
		$find_passport = [];
		$find_employment_contract = [];
		$find_cz = [];
		$find_student_agreement = [];
		$find_provision_of_paid_services = [];

		$data = [
			$docs, $find_passport,
			$find_employment_contract,
			$find_cz, $find_student_agreement,
			$find_provision_of_paid_services
		];

		return response(
			[
				"success" => true,
				"data" => $data
			],
			200
		)
			->header("Content-Type", "application/json");
	}

	public function students_info(Request $request)
	{
		$find_students = [
			[
				"first_name" => "Алексей",
				"last_name" => "Яковлев",
				"patronymic" => "Николаевич",
				"id" => 0
			],
			[
				"first_name" => "Александр",
				"last_name" => "Ковальчук",
				"patronymic" => "Владимирович",
				"id" => 1
			],
			[
				"first_name" => "Дмитрий",
				"last_name" => "Саблин",
				"patronymic" => "Владимирович",
				"id" => 2
			]
		];

		return response(
			[
				"success" => true,
				"students" => $find_students
			],
			200
		)
			->header("Content-Type", "application/json");
	}
}
