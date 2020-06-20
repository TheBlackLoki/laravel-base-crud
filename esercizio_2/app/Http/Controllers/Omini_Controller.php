<?php

namespace App\Http\Controllers;

use App\Omini;
use Illuminate\Http\Request;

class Omini_Controller extends Controller
{
  public function index()
  {
    $omini = Omini::all ();
    dd($omini);
    return view('home', compact('omini'));
  }
}
