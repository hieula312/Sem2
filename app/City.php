<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    public function District(){
        return $this->hasMany('App\District','id_city','id');
    }

    public function SubDistrict(){
        return $this->hasManyThrough('App\SubDistrict','App\District','id_city', 'id_district','id','id');
    }
}
