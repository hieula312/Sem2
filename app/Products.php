<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table= 'products';
    public $incrementing = false;

    public function BillDetail(){
        return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }

    public function TypeProduct(){
        return $this->belongsTo('App\TypeProducts', 'id_type', 'id');
    }

    public function Comment(){
        return $this->hasMany('App\Comment', 'id_product', 'id');
    }
}
