<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/dashboard", function () {
    return view("dashboard");
});

Route::prefix("/providers")->group(function () {
    Route::get("/", function () {
        return view("providers/index");
    });
    Route::get("/new", function () {
        return view("providers/new");
    });
    Route::get("/edit/{code}", function (string $code) {
        return view("providers/edit", ['code' => $code]);
    });
});

Route::get('/theme/{page}', function ($page) {
    return view("theme/$page");
});
