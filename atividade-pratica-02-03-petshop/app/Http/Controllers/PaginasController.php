<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index (){
      return view('principal');
    }

    public function about(){
      return view ('welcome');
    }
}
