<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('node')->group(function () {
    Route::get('/providers/{code?}', function ($code = false) {

        if (!$code) return Http::get("http://localhost:3000/providers")->json();
        return Http::get("http://localhost:3000/providers/$code")->body();
    });
    Route::post('/providers', function () {
        $request = request();
        $response = Http::post('http://localhost:3000/providers', $request->all())->json();

        $return = ['success' => false];

        if (isset($response['success'])) $return = ['success' => true];
        
        if (str_contains($response['message'], 'Field')){
            $return['message'] = __("Field");
            switch (explode(" ", $response['message'])[1]) {
                case 's200':
                    $return['message'] .= " Status 200 ";
                    break;
                
                case 's404':
                    $return['message'] .= " Status 404 ";
                    break;
                
                case 's500':
                    $return['message'] .= " Status 500 ";
                    break;
                
                case 's503':
                    $return['message'] .= " Status 503 ";
                    break;

                default:
                    $return['message'] .= " " . strtoupper(explode(" ", $response['message'])[1]) . " ";
                    break;
            }
            $return['message'] .= __( preg_replace("/Field \S+ /", "", $response['message']) );
        }
        else $return['message'] = __($response['message']);

        return json_encode($return);
    });
    Route::put('/providers', function () {
        $request = request();
        $response = Http::put('http://localhost:3000/providers', $request->all())->json();

        $return = ['success' => false];

        if (isset($response['success'])) $return = ['success' => true];
        
        if (str_contains($response['message'], 'Field')){
            $return['message'] = __("Field");
            switch (explode(" ", $response['message'])[1]) {
                case 's200':
                    $return['message'] .= " Status 200 ";
                    break;
                
                case 's404':
                    $return['message'] .= " Status 404 ";
                    break;
                
                case 's500':
                    $return['message'] .= " Status 500 ";
                    break;
                
                case 's503':
                    $return['message'] .= " Status 503 ";
                    break;

                default:
                    $return['message'] .= " " . strtoupper(explode(" ", $response['message'])[1]) . " ";
                    break;
            }
            $return['message'] .= __( preg_replace("/Field \S+ /", "", $response['message']) );
        }
        else $return['message'] = __($response['message']);

        return json_encode($return);
    });
    Route::delete('/providers/{code}', function ($code) {
        $response = Http::delete("http://localhost:3000/providers/$code")->json();

        $return = ['message' => __($response['message'])];
        if (isset($response['success'])) $return['success'] = true;

        return json_encode($return);
    });

    Route::get('/dashboard', function () {
        return Http::get("http://localhost:3000/dashboard")->json();
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
