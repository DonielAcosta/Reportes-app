<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function index() {
    return view('test',[
      'title' => 'Laravel 5.7'
    ]);
  }
}