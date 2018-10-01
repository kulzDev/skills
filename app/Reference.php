<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    //

    protected $fillable = [
        'name', 'surname', 'tel_number', 'user_id', 'mobile_number', 'email',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
