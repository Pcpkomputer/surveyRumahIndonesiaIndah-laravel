<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

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

    Route::get("/surveyor", function(){
        return view("Surveyor.surveyor");
    });
});

