<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcamecontroller extends Controller
{
   public function welcome(){
       return view('welcome');
   }
}
