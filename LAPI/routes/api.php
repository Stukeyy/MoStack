<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\MeController;

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

// CRUD

Route::post('/add', [FormController::class, 'store']);
Route::get('/show', [FormController::class, 'index']);
Route::put('/update/{id}', [FormController::class, 'update']);
Route::delete('/delete/{id}', [FormController::class, 'destroy']);

// Sign In

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
  Route::post('signin', [SigninController::class, 'index'])->name('login');
  Route::post('logout', [LogoutController::class, 'index']);
  Route::get('me', [MeController::class, 'index']);
});
