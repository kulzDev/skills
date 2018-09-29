<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('admin/users', 'AdminUsersController');

// Route::get('/admin', function () {

//     return view('admin.index');
// });

Route::group(['middleware' => 'admin'], function () {

    //************ ADMIN ROUTES ********************

    // Route::get('/', 'AdminUsersController@home');

    Route::get('/admin', 'AdminUsersController@admin_dashboard');
    Route::get('/dashboard', 'AdminUsersController@admin_dashboard');
    Route::get('/users/list', 'AdminUsersController@user_list');
    Route::get('/profile/list', 'AdminUsersController@user_profile');
    Route::get('/users/create', 'AdminUsersController@create');
    Route::post('/users/store', 'AdminUsersController@store');
    Route::get('/users/edit/{id}', 'AdminUsersController@edit');
    Route::patch('/users/update/{id}', 'AdminUsersController@update');

    Route::get('/administrator/users/show/{id}', 'AdminUsersController@show');
    Route::get('/lecture/users/show/{id}', 'LectureController@show');
    Route::get('/student/users/show/{id}', 'StudentController@show');

    //PAGES
    Route::get('/viewcourses', 'PagesController@course_material_view');
    Route::get('/uploadcourses', 'PagesController@course_material_upload');
    Route::get('/courses', 'PagesController@courses');
    Route::get('/discussions', 'PagesController@discussions');
    Route::get('/calendar', 'PagesController@calendar');

});

Route::group(['middleware' => 'student'], function () {

    Route::get('/student/users/show/{id}', 'StudentController@show');

    //******************** STUDENT ROUTES ********************
    // Route::get('/', 'StudentController@home');
    Route::get('/student/home', 'StudentController@index');
    Route::get('/student/results', 'StudentController@results');
    Route::get('/student/report', 'StudentController@report');
    Route::get('/student/viewcourses', 'StudentController@view_courses');
    Route::get('/student/uploadcourses', 'StudentController@upload_course');
    Route::get('/student/discussions', 'StudentController@discussions');
    Route::get('/student/calendar', 'StudentController@calendar');

});

Route::group(['middleware' => 'lecture'], function () {

    Route::get('/lecture/users/show/{id}', 'LectureController@show');
    Route::get('/student/users/show/{id}', 'StudentController@show');

    // Route::get('/', 'LectureController@home');
    Route::get('/lecture/dashboard', 'LectureController@index');
    Route::get('/lecture/student/list', 'LectureController@student_list');
    Route::get('/uploads/results', 'LectureController@upload_results');
    Route::get('/lecture/viewmaterial', 'LectureController@view_material');
    Route::get('/lecture/uploadmaterial', 'LectureController@upload_material');
    Route::get('/lecture/discussions', 'LectureController@discussions');
    Route::get('/lecture/calendar', 'LectureController@calendar');
    Route::get('/lecture/student/report', 'LectureController@student_report');

});

//Route::resource('admin/users', 'AdminUsersController');

// //******************** STUDENT  PAGES ********************
// Route::get('/userslist', 'AdminStudentController@student_list');
// Route::get('/usersprofile', 'AdminStudentController@student_profile');
// Route::get('/progressreport', 'AdminStudentController@student_progress');
// Route::get('/user/create', 'AdminStudentController@create');
// Route::post('/user/store', 'AdminStudentController@store');

// //******************** INSTRUCTOR PAGES ********************
// Route::get('/instructorlist', 'PagesController@instructor_list');
// Route::get('/instructorprofiles', 'PagesController@instructor_profile');

//******************** COURSES PAGES ********************

//******************** COURSE MATERIALS PAGES ********************

//******************** DISCUSSIONS PAGES ********************

//******************** DISCUSSIONS PAGES ********************
