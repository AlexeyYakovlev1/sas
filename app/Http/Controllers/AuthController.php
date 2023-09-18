<?php

namespace App\Http\Controllers;

use App\Http\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function view_login_main(Request $request)
	{
		return view("pages.auth.login.index", [
			"auth" => false
		]);
	}

	public function view_login_employee(Request $request)
	{
		return view("pages.auth.login.employee", [
			"auth" => false
		]);
	}

	public function view_login_student(Request $request)
	{
		return view("pages.auth.login.student", [
			"auth" => false
		]);
	}

	public function view_login_director(Request $request)
	{
		return view("pages.auth.login.director", [
			"auth" => false
		]);
	}

	public function login(Request $request)
	{
		$data = $request->validate(
			[
				"username" => "required",
				"password" => "required"
			],
			[
				"username.required" => "Заполните поле с логином",
				"password.required" => "Заполните поле с паролем"
			]
		);

		$url = env("AKADA_URL")."/authorization";
		$body = [
			"data" => [
				"username" => $data["username"],
				"password" => $data["password"]
			]
		];
		
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body, JSON_UNESCAPED_UNICODE));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, false);

		$response = curl_exec($ch);

		curl_close($ch);

		$response = json_decode($response, JSON_UNESCAPED_UNICODE);
		$error = json_decode(curl_error($ch));

		return response(
			[$response, $error],
			200
		)
			->header("Content-Type", "application/json");
	}

	public function logout(Request $request)
	{
		$url = env("KEYCLOAK_URL")."/auth/realms/".env("KEYCLOAK_REALM")."/protocol/openid-connect/logout";
		$body = [
			"refresh_token" => $request->refresh_token,
			"client_id" => env("KEYCLOAK_CLIENT_ID"),
			"client_secret" => env("KEYCLOAK_CLIENT_SECRET")
		];

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Bearer: '.Utils::get_token(),
			"Content-Type: application/x-www-form-urlencoded"
		]);

		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));

		$response = curl_exec($ch);
		$error = curl_error($ch);

		curl_close($ch);

		return response(
			[
				"response" => json_decode($response),
				"error" => json_decode($error)
			],
			200
		)
			->header("Content-Type", "application/json");
	}
}
