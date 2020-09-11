<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
  public function index(){

    auth()->logout();
    // Blacklists token so it can't be used again

    // POSTMAN
    // When you sign in and are given a token
    // If you send a POST request to logout with the current bearer token, it will be invalidated
    // Then when you send a GET request to the me page, the old token won't work and the info wont be returned

  }

}
