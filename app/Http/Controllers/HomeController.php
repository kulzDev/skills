<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->isAdmin()) {

            return view('/admin/dashboard');

        } elseif (Auth::user()->isStudent()) {

            return view('/student/home');
        } else {

            return redirect('/lecture/dashboard'); //Lecture
        }

    }
}
