<?php

namespace App\Http\Controllers;

use App\Cart;
use App\City;
use App\District;
use App\Products;
use App\User;
use App\WholeProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AjaxController extends Controller
{
    public function getTypeProduct(Request $request){
        $wholeProduct = WholeProducts::find($request->id);
        $output = '';
        foreach($wholeProduct->TypeProducts as $typeProduct){
            $output .= "<option value=".$typeProduct->id.">".$typeProduct->name."</option>";
        }
        return response()->json(['output'=>$output]);
    }

    public function deleteProduct(Request $request){
        $product = Products::find($request->id);
        foreach($product->BillDetail as $BillDetail){
            $BillDetail->active = 0;
            $BillDetail->save();
        };
        $product->active = 0;
        $product->save();
        $dbProducts = Products::where('active', 1)->get();
        $output = '';
        foreach($dbProducts as $item){
            if($item->new == 1){
                $x = "Yes";
            }else{
                $x = "No";
            }
            $output .=
            '
                <tr>
                        <td>'.$item->id.'</td>
                        <td>'.$item->name.'</td>
                        <td>'.$item->TypeProduct->WholeProducts->name.'</td>
                        <td>'.$item->TypeProduct->name.'</td>
                        <td>'.$item->unit_price.'</td>
                        <td>'.$item->promotion_price.'</td>
                        <td>'.$item->unit.'</td>
                        <td>
                            <p>'.$item->description.'</p>
                            <img width="100px" src="images/product/'.$item->image.'" alt="">
                        </td>
                        <td>'
                            .$x.'
                        </td>
                        <td>
                            <a  href="admin/product/update/'.$item->id.'"><button type="submit" class="btn btn-block btn-primary">Update</button></a>
                        </td>
                        <td>
                            <input type="hidden" name="_token" id="csrf-token" value="'.Session::token().'" />
                           <button data-id = " '.$item->id.' " id="checkDelete'.$item->id.'"  type="submit" class="btn btn-block btn-danger checkDel">Delete</button>
                        </td>
                    </tr>
            ';
        }

        return response()->json(['output'=>$output]);
    }

    public function deleteEmployee(Request $request){
        $employee = User::find($request->id);
        $employee->active = 0;
        $employee->save();
        $employees = User::where([
            ['active', 1],
            ['level', 2]
        ])->get();
        $output = '';
        foreach($employees as $item){
            $output .=
                '
                    <tr>
                        <td>'.$item->id.'</td>
                        <td>'.$item->name.'</td>
                        <td>'.$item->phoneNumber.'</td>
                        <td>'.$item->email.'</td>
                        <td>'.$item->sex.'</td>
                        <td>'.$item->birthday.'</td>
                        <td>
                            <a  href="admin/employee/update/'.$item->id.'"><button type="submit" class="btn btn-block btn-primary">Update</button></a>
                        </td>
                        <td>
                            <input type="hidden" name="_token" id="csrf-token" value="'.Session::token().'" />
                            <button data-id = "'.$item->id.' " id="checkDelete'.$item->id.'"  type="button" class="btn btn-block btn-danger checkDel">Delete</button>
                        </td>
                    </tr>
                ';
        }
        return response()->json(['output'=>$output]);
    }

    public function postAddCart(Request $request){
        $product = Products::find($request->id);
        $oldCart = Session('cart')?$request->session()->get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addCart($product, $request->id, $request->num);
        $request->session()->put('cart', $cart);
        $output = '';
        $outputQty = $cart->totalQty;
        $outputPrice = $cart->totalPrice;
        foreach($cart->items as $Product){
            $output .=
                '
                    <li>
                        <a class="aa-cartbox-img" href="#"><img src="images/product/'.$Product['item']['image'].'" alt="ProductImage"></a>
                        <div class="aa-cartbox-info">
                            <h4><a>'.$Product['item']['name'].'</a></h4>
                            <p>'.$Product['qty'].' x '.$Product['price'].'$</p>
                        </div>
                    </li>
                ';
        }
        return response()->json(['output'=>$output, 'outputQty' => $outputQty, 'outputPrice' => $outputPrice]);
    }

    public function postCheckNumProduct(Request $request){
        $product = Products::find($request->id);
        $unit = $product->unit;
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            if(array_key_exists($request->id,$cart->items)){
                $qtyCart = $cart->items[$request->id]['qty'];
            }else{
                $qtyCart = 0;
            }
        }else{
            $qtyCart = 0;
        }
        $sumCart = $request->num + $qtyCart;
        $add = 0;
        if($unit <= $sumCart){
            $add = $request->num;
        }
        return response()->json(['add' => $add, 'sumCart' => $sumCart, 'qtyCart' => $qtyCart, 'unit' => $unit]);
    }

    public function changeQty(Request $request){
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            $oldQty = $cart->items[$request->id]['qty'];
            if($oldQty > $request->newQty && $request->newQty > 0){
                $cart->removeOneCart($request->id);
            }elseif($oldQty < $request->newQty ){
                $product = Products::find($request->id);
                $cart->addCart($product, $request->id, 1);
            }elseif($request->newQty == 0){
                $cart->removeCart($request->id);
            }
            $request->session()->put('cart', $cart);
            $outputQty = $cart->totalQty;
            $outputPrice = $cart->totalPrice;
            if($request->newQty > 0){
                $price = $cart->items[$request->id]['price'] * $cart->items[$request->id]['qty'];
            }
            else{
                $price = 0;
            }
            $output = '';

            foreach($cart->items as $Product){
                $output .=
                    '
                    <li>
                        <a class="aa-cartbox-img" href="#"><img src="images/product/'.$Product['item']['image'].'" alt="ProductImage"></a>
                        <div class="aa-cartbox-info">
                            <h4><a>'.$Product['item']['name'].'</a></h4>
                            <p>'.$Product['qty'].' x '.$Product['price'].'$</p>
                        </div>
                    </li>
                ';
            }
            return response()->json(['output'=>$output,'outputQty' => $outputQty, 'outputPrice' => $outputPrice, 'price'=>$price]);
        }
    }

    public function deleteClientProduct(Request $request){
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            $cart->removeCart($request->id);
            $request->session()->put('cart', $cart);
            $outputQty = $cart->totalQty;
            $outputPrice = $cart->totalPrice;
            $output = '';
            foreach($cart->items as $Product){
                $output .=
                    '
                    <li>
                        <a class="aa-cartbox-img" href="#"><img src="images/product/'.$Product['item']['image'].'" alt="ProductImage"></a>
                        <div class="aa-cartbox-info">
                            <h4><a>'.$Product['item']['name'].'</a></h4>
                            <p>'.$Product['qty'].' x '.$Product['price'].'$</p>
                        </div>
                    </li>
                ';
            }
            return response()->json(['output'=>$output,'outputQty' => $outputQty, 'outputPrice' => $outputPrice]);
        }
    }

    public function getDistrict(Request $request){
        $city = City::find($request->id);
        $output = '<option selected value="0">Select Your District</option>';
        foreach($city->District as $district){
            $output .=
                '
                    <option value='.$district->id.'>'.$district->name.'</option>
                ';
        }
        return response()->json(['output' => $output]);
    }

    public function getSubDistrict(Request $request){
        $district = District::find($request->id);
        $output = '<option data-num="0" selected value="0">Select Your Sub District</option>';
        foreach($district->SubDistrict as $SubDistrict){
            $output .=
                '
                    <option data-num='.$SubDistrict->shippingfee.' value='.$SubDistrict->id.'>'.$SubDistrict->name.'</option>
                ';
        }
        return response()->json(['output' => $output]);
    }
}
