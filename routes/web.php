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

// General Information
// Route::prefix("/general_information")->group(function() {
	
// });

// Action Plan
// Route::prefix("/action_plan")->group(function() {
	
// });

// Student Movement
// Route::prefix("/student_movement")->group(function() {
	
// });

// Students
// Route::prefix("/students")->group(function() {
	
// });