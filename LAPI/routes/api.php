<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/add', [FormController::class, 'store']);
Route::get('/show', [FormController::class, 'index']);
Route::put('/update/{id}', [FormController::class, 'update']);
Route::delete('/delete/{id}', [FormController::class, 'destroy']);
