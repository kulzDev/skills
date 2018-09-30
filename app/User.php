<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'is_active', 'mobile_number', 'tel_number', 'id_number', 'gender', 'surname',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {

        if (!empty($password)) {

            $this->attributes['password'] = bcrypt($password);

        }

        $this->attributes['password'] = $password;

    }

    public function isAdmin()
    {

        if ($this->role->name == "Administrator" && $this->is_active == 1) {
            return true;
        }
        return false;
    }

    public function isStudent()
    {

        if ($this->role->name == "Student" && $this->is_active == 1) {
            return true;
        }
        return false;
    }

    public function isLecture()
    {

        if ($this->role->name == "Lecture" && $this->is_active == 1) {
            return true;
        }
        return false;
    }

    //********************************************************************/
    //                RELATIONSHIPS WITH USERS
    //*********************************************************************/

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');

    }

    // public function qualification()
    // {
    //     return $this->hasMany('App\Qualification');
    // }

    // public function references()
    // {
    //     return $this->hasMany('App\References');
    // }

    // public function career_overview()
    // {
    //     return $this->hasMany('App\CareerOverview');
    // }

    // public function address()
    // {
    //     return $this->hasMany('App\Address');
    // }

    // public function results()
    // {
    //     return $this->hasMany('App\Results');
    // }

}
