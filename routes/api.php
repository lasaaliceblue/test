<?php

use App\Http\Controllers\ApiTestController;
use App\Http\Controllers\AutheticationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
*/
Route::post('/auth/login', [AutheticationController::class,'autheticate']);
Route::post('/auth/register', [AutheticationController::class,'register']);

Route::middleware('auth:sanctum')->group( function(){

    Route::get('/users', [UserController::class,'index']);
    Route::put('/user/update/{id}', [UserController::class,'update']);

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return response()->json([
//         'status' => true,
//     ],200);
//    // return $request->user();
// });


Route::get('/test-api',[ApiTestController::class,'index']);
