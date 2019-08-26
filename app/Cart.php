<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addCart($item, $id, $num){
        $cart = [ 'qty' => 0, 'price' => 0, 'item' => $item];
        if($item->promotion_price == 0){
            $cart['price'] = $item->unit_price;
        }else{
            $cart['price'] = $item->promotion_price;
        }
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $cart = $this->items[$id];
            }
        }
        $cart['qty'] += $num;
        $this->items[$id] = $cart;
        $this->totalPrice += $cart['price'] * $num;
        $this->totalQty += $num;
    }

    public function removeOneCart($id){
        $this->items[$id]['qty']--;
        $this->totalPrice -= $this->items[$id]['price'];
        $this->totalQty--;
        if($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }

    public function removeCart($id){
        $this->totalPrice -= $this->items[$id]['price']*$this->items[$id]['qty'];
        $this->totalQty -= $this->items[$id]['qty'];
        unset($this->items[$id]);
    }
}
