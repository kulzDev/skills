<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $fillable = [
        'name', 'description', 'duration', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
