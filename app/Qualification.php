<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{

    protected $fillable = [
        'name', 'institution', 'year', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
