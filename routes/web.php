<?php

use App\Http\Controllers\ActionPlan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneralInformation;
use App\Http\Controllers\StudentMovement;
use App\Http\Controllers\Students;
use Illuminate\Support\Facades\Route;

// AUTH
Route::prefix("/auth")->group(function() {
	Route::get("/login", [AuthController::class, "view_auth"])->middleware("redirect_if_token_exists");
});

// General Information
Route::prefix("/general_information")->group(function() {
	Route::get("/", [GeneralInformation::class, "view_general_information"])->middleware("redirect_if_token_not_exists");
});

// Action Plan
Route::prefix("/action_plan")->group(function() {
	Route::get("/", [ActionPlan::class, "view_action_plan"])->middleware("redirect_if_token_not_exists");
});

// Student Movement
Route::prefix("/student_movement")->group(function() {
	Route::get("/", [StudentMovement::class, "view_student_movement"])->middleware("redirect_if_token_not_exists");
});

// Students
Route::prefix("/students")->group(function() {
	Route::get("/", [Students::class, "view_students"])->middleware("redirect_if_token_not_exists");
});