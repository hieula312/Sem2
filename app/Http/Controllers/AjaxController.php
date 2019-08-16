<?php

namespace App\Http\Controllers;

use App\Cart;
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
            if($Product['item']['promotion_price'] == 0){
                $price = $Product['item']['unit_price'];
            }else{
                $price = $Product['item']['promotion_price'];
            }
            $output .=
                '
                    <li>
                        <a class="aa-cartbox-img" href="#"><img src="images/product/'.$Product['item']['image'].'" alt="ProductImage"></a>
                        <div class="aa-cartbox-info">
                            <h4><a>'.$Product['item']['name'].'</a></h4>
                            <p>'.$Product['qty'].' x '.$price.'$</p>
                        </div>
                        <a class="aa-remove-product"><span class="fa fa-times"></span></a>
                    </li>
                ';
        }
        return response()->json(['output'=>$output, 'outputQty' => $outputQty, 'outputPrice' => $outputPrice]);
    }
}
