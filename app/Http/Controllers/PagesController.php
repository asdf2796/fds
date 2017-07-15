<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex (){
      return view('welcome');
    }

    public function getCompare (){
      return view('compare');
    }
}
