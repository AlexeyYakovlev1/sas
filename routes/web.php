<?php

use App\Http\Controllers\ActionPlanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\GeneralInformationController;
use App\Http\Controllers\StudentMovementsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// Auth
Route::middleware(["redirect_if_token_exists"])->prefix("/auth")->group(function() {
	Route::get("/login", [AuthController::class, "view_auth"]);
	
	Route::post("/login", [AuthController::class, "login"]);
});

Route::get("/auth/logout", [AuthController::class, "logout"]);

// Home
Route::prefix("/home")->middleware(["home"])->group(function() {
	Route::get("/general_information", [GeneralInformationController::class, "view_general_information"]);
	Route::get("/action_plan", [ActionPlanController::class, "view_action_plan"]);
	Route::get("/student_movement", [StudentMovementsController::class, "view_student_movement"]);
	Route::get("/students", [StudentsController::class, "view_students"]);
	Route::get("/students/list", [StudentsController::class, "view_student_list"]);
	Route::get("/employees", [EmployeesController::class, "view_employees"]);
});

// Api
Route::prefix("/api")->group(function() {
	// Employees
	Route::get("/employees/get_card_info/{content}", [EmployeesController::class, "card_info"])
		->middleware("check_role:director");
	Route::get("/employees/get_employees", [EmployeesController::class, "employees_info"]
		)->middleware("check_role:director");
	Route::post("/employees/{employee_id}/description_from_director", [EmployeesController::class, "description_from_director"])
		->middleware("check_role:director");

	// General information
	Route::get("/general_information/get_docs", [GeneralInformationController::class, "docs_info"])
		->middleware("check_role:employee");
	Route::get("/general_information/get_students", [GeneralInformationController::class, "students_info"])
		->middleware("check_role:employee");
	
	// Students
	Route::get("/students/get_students", [StudentsController::class, "students_info"])
		->middleware("check_role:employee");
	Route::get("/students/get_card_info/{content}", [StudentsController::class, "card_info"])
		->middleware("check_role:employee");
	Route::post("/students/{table}/update", [StudentsController::class, "update_table"])
		->middleware("check_role:employee;director");
	Route::get("/students/{table}/get", [StudentsController::class, "get_table"])
		->middleware("check_role:employee;director");
});