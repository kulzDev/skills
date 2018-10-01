<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //

    protected $fillable = [
        'totol_marks', 'marks_obtained', 'caurse_id', 'assessment_type_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
