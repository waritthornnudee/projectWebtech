<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;

class CodeController extends Controller
{
  public function add(Request $request){
       $newRegisCourse = new code();
       $newRegisCourse -> code = $request->input('code');
       $newRegisCourse -> idCourse = $request->input('course');
       $newRegisCourse -> save();
       return view('admin', [
         'courses' => $courses
       ]);
   }
}
