<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function admin_dashboard()
    {
        return view('content.dashboard');
    }

    //******************** STUDENT PAGES ********************

    public function student_list()
    {
        return view('content.students.list');
    }

    public function student_profile()
    {
        return view('content.students.profile');
    }

    public function student_progress()
    {
        return view('content.students.progress');
    }

    //******************** INSTRUCTOR PAGES ********************

    public function instructor_list()
    {
        return view('content.instructors.list');
    }

    public function instructor_profile()
    {
        return view('content.instructors.profiles');
    }

    //******************** COURSE MATERIALS PAGES ********************

    public function course_material_view()
    {
        return view('content.coursematerial.view');
    }

    public function course_material_upload()
    {
        return view('content.coursematerial.upload');
    }

    //******************** DISCUSSION PAGE ********************

    public function discussions()
    {
        return view('content.discussions');
    }

    //******************** CALENDAR PAGE ********************

    public function calendar()
    {
        return view('content.calendar');
    }

    //******************** COURSE PAGE ********************

    public function courses()
    {
        return view('content.courses.courses');
    }

    //********************  PAGEs ********************
}
