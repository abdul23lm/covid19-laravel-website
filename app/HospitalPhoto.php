<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalPhoto extends Model
{
    protected $guarded = [];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }
}
