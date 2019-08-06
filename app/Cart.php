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

    public function addCart($item, $id){
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
        $cart['qty']++;
        if($item->promotion_price == 0){
            $cart['price'] = $cart['qty'] * $item->unit_price;
        }else{
            $cart['price'] = $cart['qty'] * $item->promotion_price;
        }
        $this->items[$id] = $cart;
        if($item->promotion_price == 0){
            $this->totalPrice += $item->unit_price;
        }else{
            $this->totalPrice += $item->promotion_price;
        }
        $this->totalQty++;
    }

    public function removeOneCart($id){
        $this->items[$id]['qty']--;
        if($this->items[$id]['item']['promotion_price'] == 0){
            $this->items[$id]['price'] -= $this->items[$id]['item']['unit_price'];
        }else{
            $this->items[$id]['price'] -= $this->items[$id]['item']['promotion_price'];
        }
        $this->totalQty--;
        if($this->items[$id]['item']['promotion_price'] == 0){
            $this->totalPrice -= $this->items[$id]['item']['unit_price'];
        }else{
            $this->totalPrice -= $this->items[$id]['item']['promotion_price'];
        }
        if($this->items[$id]['qty'] <= 0){
            unset($this->items[$id]);
        }
    }

    public function removeCart($id){
        $this->totalPrice -= $this->items[$id]['price'];
        $this->totalQty -= $this->items[$id]['qty'];
        unset($this->items[$id]);
    }
}
