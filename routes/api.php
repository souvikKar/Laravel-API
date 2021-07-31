<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\TabController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\DeepController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




//Route::get("present",[DeepController::class,'present']); for routing

Route::post("present",[DeepController::class,'present']);

Route::put("up",[DeepController::class,'update']);

