<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $roles = Role::pluck('name', 'id')->all(); //method lists is removed from 5.3 and we use pluck now

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //

        if (trim($request->password) == '') {

            $input = $request->except('password');

        } else {

            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images/profiles', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;

        }

        User::create($input);

        // User::create($request->all());
        return redirect('/users/list');

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

    //******************** STUDENT PAGES ********************

    public function user_list()
    {

        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function user_profile()
    {
        return view('admin.users.profile');
    }
}
