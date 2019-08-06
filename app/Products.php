<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table= 'products';

    public function BillDetail(){
        return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }

    public function TypeProduct(){
        return $this->belongsTo('App\TypeProducts', 'id_type', 'id');
    }
}
