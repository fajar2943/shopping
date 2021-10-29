<?php

use App\Http\Controllers\ShoppingController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/users/signup', [UserController::class, 'store']);
Route::post('/users/signin', [UserController::class, 'sign_in']);
Route::get('/users', [UserController::class, 'index']);

Route::post('/shopping', [ShoppingController::class, 'store']);
Route::get('/shopping', [ShoppingController::class, 'index']);
Route::get('/shopping/{id}', [ShoppingController::class, 'show']);
Route::put('/shopping/{id}', [ShoppingController::class, 'update']);
Route::delete('/shopping/{id}', [ShoppingController::class, 'destroy']);
