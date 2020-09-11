<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SigninController extends Controller
{
  public function index(Request $request){

    Log::info("SIGN IN FUNCTION STARTED");

    if (!$token = auth()->attempt($request->only('email', 'password'))) {
      return response(null, 401);
    }

    return response()->json(compact('token'));

    Log::info("SIGN IN FUNCTION ENDED");

  }
}
