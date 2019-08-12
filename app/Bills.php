<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $table= 'bills';

    public function BillDeTail(){
        return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }
    public function User(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
