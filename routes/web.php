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

    // Route::get('/admin', function () {

    //     return view('admin.index');

    // });

    //******************** COURSE ROUTES ********************

    Route::get('/admin', 'PagesController@admin_dashboard'); //this can't be like this-----sort out
    Route::get('/dashboard', 'PagesController@admin_dashboard'); // this can't be like this ----SORT THIS

    //******************** USERS  PAGES ********************
    Route::get('/users/list', 'AdminUsersController@user_list');
    Route::get('/users/profile', 'AdminUsersController@user_profile');
    Route::get('/users/create', 'AdminUsersController@create');
    Route::post('/users/store', 'AdminUsersController@store');
    Route::get('/users/edit/{id}', 'AdminUsersController@edit');
    Route::patch('/users/update/{id}', 'AdminUsersController@update');

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
Route::get('/courses', 'PagesController@courses');

//******************** COURSE MATERIALS PAGES ********************
Route::get('/viewcourses', 'PagesController@course_material_view');
Route::get('/uploadcourses', 'PagesController@course_material_upload');

//******************** DISCUSSIONS PAGES ********************
Route::get('/discussions', 'PagesController@discussions');

//******************** DISCUSSIONS PAGES ********************
Route::get('/calendar', 'PagesController@calendar');

Route::get('/addStudent', 'PagesController@addStudent');
