<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function User(){
        return $this->belongsTo('App\User','id_user','id');
    }

    public function Product(){
        return $this->belongsTo('App\Products','id_product','id');
    }
}
