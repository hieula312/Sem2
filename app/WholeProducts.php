<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WholeProducts extends Model
{
    protected $table= 'whole_products';

    public function TypeProducts(){
        return $this->hasMany('App\TypeProducts', 'id_type', 'id');
    }
}
