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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $students = DB::table('users')->get();
        return View('auth.dashboard',['students'=> $students]);
    }

    public function edit()
    {

       
        return View('layouts.dcrudform');
    }
}
