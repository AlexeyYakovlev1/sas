<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix("/auth")->group(function() {
	Route::get("/login/main", [AuthController::class, "view_login_main"]);
	Route::get("/login/employee", [AuthController::class, "view_login_employee"]);
	Route::get("/login/student", [AuthController::class, "view_login_student"]);
	Route::get("/login/director", [AuthController::class, "view_login_director"]);
});

Route::prefix("/home")->group(function() {
	Route::get("/student_list", [StudentController::class, "view_student_list"]);
	Route::get("/general_information", [EmployeeController::class, "view_general_information"]);
	Route::get("/employees", [DirectorController::class, "view_employees"]);
});