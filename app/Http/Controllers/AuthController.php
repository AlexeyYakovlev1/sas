<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use ReallySimpleJWT\Token;

class AuthController extends Controller
{
    public function view_auth(Request $request)
	{
		return view("pages.auth.login");
	}

	public function logout(Request $request)
	{
		Cookie::queue(Cookie::forget("token"));
		return redirect("/auth/login");
	}

	public function login(Request $request)
	{
		$data = $request->validate([
			"login" => "required|string|min:8|max:12",
			"password" => "required|string|min:8|max:16",
			"person" => "required|string"
		],
		[
			"login.required" => "Логин обязателен для заполнения",
			"login.string" => "Логин должен быть строкой",
			"login.min" => "Минимальная длина логина 8 символов",
			"login.max" => "Максимальная длина логина 12 символов",

			"password.required" => "Пароль обязателен для заполнения",
			"password.string" => "Пароль должен быть строкой",
			"password.min" => "Минимальная длина пароля 8 символов",
			"password.max" => "Максимальная длина пароля 16 символов",

			"person.required" => "Выбор роли обязателен",
			"person.string" => "Роль должна быть строкой"
		]);
		
		// Проверка пользователя через апи битрикса
		// ...

		$payload = [
			"exp" => time() + 10,
    		"iss" => "localhost",
			"person" => $data["person"]
		];
		$token = Token::customPayload(
			$payload,
			env("SECRET_KEY")
		);
		
		Cookie::queue("token", $token);

		return response(
			[
				"success" => true,
				"person" => $data["person"]
			],
			200
		)
			->header("Content-Type", "application/json");
	}
}
