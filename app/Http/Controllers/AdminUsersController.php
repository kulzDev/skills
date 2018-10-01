<?php

namespace App\Http\Controllers;

use App\Address;
use App\CareerOverview;
use App\Course;
use App\Http\Requests\UserCareerOverviewRequest;
use App\Http\Requests\UserQualificationRequest;
use App\Http\Requests\UserReferenceRequest;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Qualification;
use App\Reference;
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

    // public function home()
    // {
    //     //

    //     $users = User::all();

    //     return view('admin.users.index', compact('users'));
    // }

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

        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        $address = Address::where('user_id', '=', $id)->get();
        $qualification = Qualification::where('user_id', '=', $id)->get();
        $career = CareerOverview::where('user_id', '=', $id)->get();
        $reference = Reference::where('user_id', '=', $id)->get();

        return view('admin.users.user_profile', compact('user', 'roles', 'address', 'qualification', 'career', 'reference'));
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

        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        $qualification = Qualification::where('user_id', '=', $id)->get();
        $career = CareerOverview::where('user_id', '=', $id)->get();
        $reference = Reference::where('user_id', '=', $id)->get();

        return view('admin.users.edit', compact('user', 'roles', 'qualification', 'career', 'reference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {

        //return $request->all();

        if (trim($request->password) == '') {

            $input = $request->except('password');

        } else {

            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }

        $user = User::findOrFail($id);

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images/profiles', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;

        }

        //if the address is filled
        if ($input['street'] && $input['province'] && $input['postal_code']) {

            $newAddress = array('street' => $input['street'], 'province' => $input['province'], 'postal_code' => $input['postal_code'], 'user_id' => $id);

            //find the address

            if (count($address = Address::where('user_id', '=', $id)->get()) == 0) {
                Address::create($newAddress);
            } else {
                $address->first()->update($newAddress);
            }
            //$address->update($newAddress);
        }

        $user->update($input);
        return redirect('/users/list');
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

        $user = User::findOrFail($id);

    }

    //******************** STUDENT PAGES ********************

    public function user_list()
    {

        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function user_profile()
    {
        $users = User::all();
        return view('admin.users.profile_list', compact('users'));
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }

    /************************************************************************************************ */
    /*  --------------------------   Qualifications  -----------------------------    */
    /************************************************************************************************ */

    public function create_qualification($id)
    {

        return view('admin.users.create_qualification', compact('id'));
    }

    public function store_qualification(UserQualificationRequest $request)
    {

        Qualification::create($request->all());

        return redirect('/users/edit/' . $request['user_id']);

    }

    /************************************************************************************************ */
    /*  --------------------------   CareerOverview  -----------------------------    */
    /************************************************************************************************ */

    public function create_careeroverview($id)
    {
        //return $career = CareerOverview::where('user_id', '=', $id)->get();
        //return $qualification = Qualification::where('user_id', '=', 3)->get();
        return view('admin.users.create_careeroverview', compact('id'));
    }

    public function store_careeroverview(UserCareerOverviewRequest $request)
    {

        CareerOverview::create($request->all());

        return redirect('/users/edit/' . $request['user_id']);

    }

    /************************************************************************************************ */
    /*  --------------------------   CareerOverview  -----------------------------    */
    /************************************************************************************************ */

    public function create_reference($id)
    {
        //return $career = CareerOverview::where('user_id', '=', $id)->get();
        //return $qualification = Qualification::where('user_id', '=', 3)->get();
        return view('admin.users.create_reference', compact('id'));
    }

    public function store_reference(UserReferenceRequest $request)
    {

        Reference::create($request->all());

        return redirect('/users/edit/' . $request['user_id']);

    }

    /************************************************************************************************ */
    /*    --------------------------  Update User Archievements ----------------------------------     */
    /************************************************************************************************ */

    public function updateArchievement(Request $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id);
        $user->where('id', $id)->update(['archievement' => $input['archievements']]);

        //return $user; //['archievements']; // . $user['archievement'] . ' Id: ' . $id ;
        return redirect('/users/list');
    }

    public function updateSkills(Request $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id);
        $user->where('id', $id)->update(['it_skills' => $input['skills']]);

        //return $user; //['archievements']; // . $user['archievement'] . ' Id: ' . $id ;
        return redirect('/users/list');
    }

    /************************************************************************************************ */
    /** -----------------------------------------   courses           --------------------------- */
    /************************************************************************************************ */
    public function course_list()
    {

        $courses = Course::all();
        return view('admin.courses.list', compact('courses'));
    }

    public function course_create()
    {
        //

        return view('admin.courses.create');
    }

    public function store_course(Request $request)
    {
        // //

        Course::create($request->all());

        $courses = Course::all();

        return view('admin.courses.list')->with('courses', $courses); //, compact('courses'));

        //return $request->all();
    }

    public function add_course($id)
    {

        $users = User::all();
        $course = Course::findOrFail($id);
        return view('admin.courses.addStudent', compact('courses', 'users'));

        //return $id;
    }

}
