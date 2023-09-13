<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::middleware(["redirect_if_token_exists"])->prefix("/auth")->group(function() {
	Route::get("/login/main", [AuthController::class, "view_login_main"]);
	Route::get("/login/employee", [AuthController::class, "view_login_employee"]);
	Route::get("/login/student", [AuthController::class, "view_login_student"]);
	Route::get("/login/director", [AuthController::class, "view_login_director"]);
});

Route::middleware("redirect_if_token_not_exists")->prefix("/home")->group(function() {
	Route::get("/student_list", [StudentController::class, "view_student_list"]);
	Route::get("/general_information", [EmployeeController::class, "view_general_information"]);
	Route::get("/employees", [DirectorController::class, "view_employees"]);

	Route::prefix("employees/{id}")->group(function() {
		Route::get("/description_from_director", [DirectorController::class, "view_description_from_director"]);
	});

	Route::prefix("/students/{id}")->group(function() {
		Route::get("/main", [StudentController::class, "view_employee_main"]);
		Route::get("/certification", [StudentController::class, "view_employee_certification"]);
		Route::get("/docs", [StudentController::class, "view_employee_docs"]);
		Route::get("/mode_services", [StudentController::class, "view_employee_mode_services"]);
		Route::get("/training", [StudentController::class, "view_employee_training"]);
	});
});