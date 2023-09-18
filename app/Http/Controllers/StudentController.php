<?php

namespace App\Http\Controllers;

use App\Http\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function view_student_list(Request $request)
	{
		return view("pages.home.student.list", [
			"auth" => true
		]);
	}

	public function view_student_main(Request $request)
	{
		$url = env("AKADA_URL")."/get_user_info";
		$body = [
			"access_token"
		];

		return view("pages.home.employee.students.main", [
			"auth" => true
		]);
	}

	public function view_student_certification(Request $request)
	{
		return view("pages.home.employee.students.certification", [
			"auth" => true
		]);
	}

	public function view_student_docs(Request $request)
	{
		return view("pages.home.employee.students.docs", [
			"auth" => true
		]);
	}

	public function view_student_mode_services(Request $request)
	{
		return view("pages.home.employee.students.mode_services", [
			"auth" => true
		]);
	}

	public function view_student_training(Request $request)
	{
		return view("pages.home.employee.students.training", [
			"auth" => true
		]);
	}

	public function search(Request $request)
	{
		$data = $request->validate(
			[
				"name" => "required"
			],
			[
				"name.required" => "Имя студента обязательно для заполнения"
			]
		);
		$body = [
			"term" => $data["name"],
			"access_token" => Utils::get_token()
		];
		
		$ch = curl_init(env("AKADA_URL")."/search_student");
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"Bearer: ".Utils::get_token(),
			"Content-Type: application/x-www-form-urlencoded"
		]);

		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));
		
		$response = curl_exec($ch);
		$error = curl_error($ch);

		curl_close($ch);

		return response(
			[
				"response" => $response,
				"error" => $error
			],
			200
		)
			->header("Content-Type", "application/json");
	}
}
