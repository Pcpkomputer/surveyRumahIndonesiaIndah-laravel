<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\ColdfileController;
use App\Http\Controllers\SurveyAwalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("login");
});

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view("dashboard");
    });

    Route::prefix('surveyor')->group(function () {
        Route::get("/",[SurveyorController::class,'show']);
        Route::get("/create",[SurveyorController::class,'create']);
        Route::get("/update/{id}",[SurveyorController::class,'update']);
        Route::get("/delete/{id}",[SurveyorController::class,'delete']);

        Route::post("/create",[SurveyorController::class,'create_data']);
        Route::post("/update/{id}",[SurveyorController::class,'update_data']);
    });

    Route::prefix('coldfile')->group(function () {
        Route::get("/",[ColdfileController::class,'show']);
        // Route::get("/create",[SurveyorController::class,'create']);
        // Route::get("/update/{id}",[SurveyorController::class,'update']);
        // Route::get("/delete/{id}",[SurveyorController::class,'delete']);

        // Route::post("/create",[SurveyorController::class,'create_data']);
        // Route::post("/update/{id}",[SurveyorController::class,'update_data']);
    });


    Route::prefix('surveyawal')->group(function () {
        Route::get("/",[SurveyAwalController::class,'show']);
        // Route::get("/create",[SurveyorController::class,'create']);
        // Route::get("/update/{id}",[SurveyorController::class,'update']);
        // Route::get("/delete/{id}",[SurveyorController::class,'delete']);

        // Route::post("/create",[SurveyorController::class,'create_data']);
        // Route::post("/update/{id}",[SurveyorController::class,'update_data']);
    });


   
});

