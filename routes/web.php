<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Auth
Route::middleware(["redirect_if_token_exists"])->prefix("/auth")->group(function() {
	Route::get("/login/main", [AuthController::class, "view_login_main"]);
	Route::get("/login/employee", [AuthController::class, "view_login_employee"]);
	Route::get("/login/student", [AuthController::class, "view_login_student"]);
	Route::get("/login/director", [AuthController::class, "view_login_director"]);
});
Route::prefix("/auth")->group(function() {
	Route::post("/login", [AuthController::class, "login"]);
	Route::post("/logout", [AuthController::class, "logout"]);
});

Route::middleware("redirect_if_token_not_exists")->prefix("/home")->group(function() {
	// Student
	Route::get("/student_list", [StudentController::class, "view_student_list"])
		->middleware("redirect_if_role_wrong:Студент");

	// Director
	Route::prefix("employees/{id}")->group(function() {
		Route::get("/description_from_director", [DirectorController::class, "view_description_from_director"])
			->middleware("redirect_if_role_wrong:Руководитель");
	});
	Route::get("/employees", [DirectorController::class, "view_employees"])
		->middleware("redirect_if_role_wrong:Руководитель");

	// Employee
	Route::middleware(["redirect_if_role_wrong:Сотрудник"])->prefix("/students/{id}")->group(function() {
		Route::get("/main", [StudentController::class, "view_student_main"]);
		Route::get("/certification", [StudentController::class, "view_student_certification"]);
		Route::get("/docs", [StudentController::class, "view_student_docs"]);
		Route::get("/mode_services", [StudentController::class, "view_student_mode_services"]);
		Route::get("/training", [StudentController::class, "view_student_training"]);
	});
	Route::get("/general_information", [EmployeeController::class, "view_general_information"])
		->middleware("redirect_if_role_wrong:Сотрудник"); 
});

Route::prefix("/search")->group(function() {
	Route::post("/students", [StudentController::class, "search"])
		->middleware("redirect_if_role_wrong:Сотрудник");
});