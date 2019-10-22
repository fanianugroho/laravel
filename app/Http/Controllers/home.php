<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
  public function indexhome(){
    return view('home');
  }
  public function indexpertama(){
    return view('pertama');
  }
  public function indexkedua(){
    return view('kedua');
  }
  public function indexketiga(){
    return view('ketiga');
  }
}
