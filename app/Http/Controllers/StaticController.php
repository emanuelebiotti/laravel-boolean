<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public function prima() {
    return view('primo');
  }

  public function seconda() {
    return view('secondo');
  }

  public function homepage() {
    return view('homepage');
  }
}
