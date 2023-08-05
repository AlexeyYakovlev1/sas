<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// AUTH
Route::prefix("/auth")->group(function() {
	Route::get("/login", [AuthController::class, "view_auth"]);
});