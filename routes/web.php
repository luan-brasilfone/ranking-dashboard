<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

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
    if (!session()->has("user")) return redirect("/login");

    return redirect("/dashboard");
});

Route::get("/dashboard", function () {
    if (!session()->has("user")) return redirect("/login");

    return view("dashboard");
});

Route::prefix("/providers")->group(function () {

    Route::get("/", function () {
        if (!session()->has("user")) return redirect("/login");

        return view("providers/index");
    });
    Route::get("/new", function () {
        if (!session()->has("user")) return redirect("/login");

        return view("providers/new");
    });
    Route::get("/edit/{code}", function (string $code) {
        if (!session()->has("user")) return redirect("/login");

        return view("providers/edit", ['code' => $code]);
    });
});

Route::prefix("/login")->group(function () {
    
    Route::match(["get", "post"], "/", function (){
        if (session()->has("user")) return redirect("/dashboard");
        
        if (request()->isMethod("get")) return view("login/index");
        
        $result = DB::select("SELECT * FROM gec_users WHERE usr_login = ?", [request()->username]);
        if (count($result) == 0)
            return redirect("/login")->with("username", __("Username not found"));

        if ($result[0]->usr_password != md5(request()->password))// && config('app.env') != 'local')
            return redirect("/login")->with("password", __("Wrong password"));

        session()->put("user", $result[0]->usr_name);
        return redirect("/dashboard");
    });

    Route::get("/logout", function () {
        session()->forget("user");
        return redirect("/login");
    });
});

Route::get('/theme/{page}', function ($page) {
    return view("theme/$page");
});
