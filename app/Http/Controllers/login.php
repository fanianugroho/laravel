<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
  public function indexlogin(){
    return view('login');
  }
  public function indexregister(){
    return view('register');
  }
}
