<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerOverview extends Model
{
    protected $fillable = [
        'company_name', 'designation', 'duration', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
