<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';

    public function SubDistrict(){
        return $this->hasMany('App\SubDistrict','id_district','id');
    }

    public function City(){
        return $this->belongsTo('App\City', 'id_city', 'id');
    }
}
