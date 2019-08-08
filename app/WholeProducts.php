<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WholeProducts extends Model
{
    protected $table= 'whole_products';

    public function TypeProducts(){
        return $this->hasMany('App\TypeProducts', 'id_whole', 'id');
    }

    public function Products(){
        return $this->hasManyThrough('App\Products','App\TypeProducts','id_whole', 'id_type','id','id');
    }
}
