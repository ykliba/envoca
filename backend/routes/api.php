<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sunctum']], function () {
    Route::get('user', function (Request $request) {
        return response()->json(['user' => $request->user()]);
    });
    Route::post('/logout', [LoginController::class, 'logout']);
});


Route::post('/login', [LoginController::class, 'login']);

Route::post('/registar', [RegistarController::class, 'registar']);
