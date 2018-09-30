<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $fillable = [
        'street', 'province', 'postal_code', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function setStreet($add)
    // {
    //     $this->street = $add;
    // }

    // public function setProvince($province)
    // {
    //     $this->province = $province;
    // }

    // public function setPostalCode($postalCode)
    // {
    //     $this->postal_code = $postalCode;
    // }

    // public function setUserId($userID)
    // {
    //     $this->user_id = $userID;
    // }

    // public function getStreet()
    // {
    //     return $this->street;
    // }

    // public function showAddress()
    // {
    //     return $this->street . ' ' . $this->province . ' ' . $this->postal_code . ' ' . $this->user_id;
    // }

}
