<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table = 'subdistrict';

    public function District(){
        return $this->belongsTo('App\District', 'id_district', 'id');
    }
}
