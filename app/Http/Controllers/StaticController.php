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
  public function privacyPolicy() {
    return view('privacypolicy');
  }
  public function corso() {
    return view('corso');
  }
  public function metodo() {
    return view('metodo');
  }
  public function dopoilcorso() {
    return view('dopoilcorso');
  }
  public function lezionegratuita() {
    return view('lezionegratuita');
  }
  public function iscriviti() {
    return view('iscriviti');
  }
  public function domandeFrequenti() {
    return view('faq');
  }
  public function lavoraConNoi() {
    return view('jobs');
  }

}
