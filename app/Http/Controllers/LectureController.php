<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('lecture/dashboard');
    }

    // public function home()
    // {
    //     //

    //     return view('lecture/dashboard');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function student_list()
    {
        $users = User::all();

        return view('lecture.content.student_list', compact('users'));
    }

    public function student_report()
    {
        return view('lecture.content.student_report');
    }

    public function upload_results()
    {
        return view('lecture/content/upload_results');
    }

    public function view_material()
    {
        return view('lecture/content/view_material');
    }

    public function upload_material()
    {
        return view('lecture/content/upload_material');
    }

    public function discussions()
    {
        return view('lecture.content.discussions');
    }

    public function calendar()
    {
        return view('lecture.content.calendar');
    }

}
