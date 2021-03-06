<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $promos = DB::table('promotion')->select('path')->get();
       $vdolinks = DB::table('vdo')->select('path')->get();
       $teachers = DB::table('teacher')->get();
       $courses =  DB::table('course')->get();

        return view('welcome', [
            'promos' => $promos,
            'vdolinks' => $vdolinks,
            'teachers' => $teachers,
            'courses' => $courses
          ]);
    }

    public function alldata()
    {
       $promos = DB::table('promotion')->select('path')->get();
       $users = DB::table('users')->where('role','std')->get();
       $teachers = DB::table('teacher')->get();
       $courses =  DB::table('course')->get();

        return view('admin', [
            'promos' => $promos,
            'users' => $users,
            'teachers' => $teachers,
            'courses' => $courses
          ]);
    }


}
