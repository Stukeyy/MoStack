<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MeController extends Controller
{

  public function __construct() {
    Log::info("MIDDLEWARE FUNCTION STARTED");
    $this->middleware(['auth:api']);
    Log::info("MIDDLEWARE FUNCTION STARTED");
  }

  public function index(Request $request){

    // dd($request->user());

    $user = $request->user();
    return response()->json([
      'email' => $user->email,
      'name' => $user->name,
    ]);

  }
}
