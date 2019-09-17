<?php

namespace App\Http\Controllers;

use App\BillDetail;
use App\Bills;
use App\Cart;
use App\City;
use App\Comment;
use App\District;
use App\Events\CommentEvent;
use App\Events\OrderEvent;
use App\Follower;
use App\Notification;
use App\Products;
use App\User;
use App\WholeProducts;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function getDistrictAd(Request $request){
        $city = City::find($request->id);
        $output = '';
        foreach($city->District as $district){
            $output .= "<option value=".$district->id.">".$district->name."</option>";
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

            $time = new Carbon($item->created_at);
            if($time->isToday()){
                $z =  "Today - ".$time->format('h:i');
            }else{
                $z = $time->diffForHumans(Carbon::now())." - ".$time->format('h:i jS F');
            }
            $output .=
            '
                <tr>
                        <td>'.$item->id.'</td>
                        <td>
                            <a href="admin/product/update/'.$item->id.'">'.$item->name.'</a>
                        </td>
                    
                        <td>'.$item->unit_price.'</td>
                        <td>'.$item->promotion_price.'</td>
                        <td>'.$item->unit.'</td>
                        <td>'.$item->sellIndex.'</td>
                        <td>'
                            .$z.'
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
        if(intval($product->unit) - intval($request->num) < 0){
            $left = intval($product->unit);
            if($request->session()->has('cart')) {
                $cart = $request->session()->get('cart');
                if(array_key_exists($request->id, $cart->items)){
                    $oldQty = $cart->items[$request->id]['qty'];
                }else{
                    $oldQty = 0;
                }
                $left = intval($product->unit) - intval($oldQty);
            }
            return response()->json(['left' => $left, 'check'=> 1]);
        }
        if($request->session()->has('cart')){
            if(array_key_exists($request->id,$cart->items)){
                $num = $cart->items[$request->id]['qty'];
                if(intval($product->unit) - intval($num) - intval($request->num) < 0){
                    $left = intval($product->unit) - intval($num);
                    return response()->json(['left' => $left, 'check'=> 1]);
                }
            }
        }
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
        return response()->json(['output'=>$output, 'outputQty' => $outputQty, 'outputPrice' => $outputPrice, 'check'=> 0]);
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
        $product = Products::find($request->id);
        if(intval($product->unit) - intval($request->newQty) < 0){
            $left = intval($product->unit);
            if($request->session()->has('cart')) {
                $cart = $request->session()->get('cart');
                $oldQty = $cart->items[$request->id]['qty'];
                $left = intval($product->unit) - intval($oldQty);
            }
            return response()->json(['left' => $left, 'check'=> 1, 'oldQty' => $oldQty]);
        }
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            $oldQty = $cart->items[$request->id]['qty'];
            if($oldQty > $request->newQty && $request->newQty > 0){
                $cart->removeOneCart($request->id);
            }elseif($oldQty < $request->newQty ){
                $product = Products::find($request->id);
                $cart->addCart($product, $request->id, $request->newQty - $oldQty);
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
            return response()->json(['output'=>$output,'outputQty' => $outputQty, 'outputPrice' => $outputPrice, 'price'=>$price, 'check' => 0]);
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

    public function addComment(Request $request){
        $comment = new Comment();
        $comment->message = $request->message;
        if($request->rate == 0){
            $comment->rate = 5;
        }else{
            $comment->rate = $request->rate;
        }
        $comment->id_product = $request->id;

        if (Auth::check()){
            $comment->name = Auth::user()->name;
            $comment->id_user = Auth::user()->id;
        }else{
            $comment->name = $request->name;
        }
        $comment->save();
        $notification = new Notification();
        $notification->type = 1;
        $notification->seen = 0;
        $notification->message = $comment->name." commented in your post";
        $notification->link = 'product/'.$comment->id_product;
        $notification->save();
        event(new CommentEvent($comment, $notification));
        $output = '';
        return response()->json(['output' => $output]);
    }

    public function updateNoti(Request $request){
        $noti = Notification::find($request->id);
        if($noti->seen = 1){

        }
        $noti->seen = 1;
        $noti->save();
        return response()->json([]);
    }

    public function orderProcess(Request $request){
        $bill = Bills::find($request->id);
        if($bill->status < 6){
            $bill->status++;
        }
        $billDetails = BillDetail::where('id_bill', $bill->id)->get();
        if($bill->status == 5){
            foreach ($billDetails as $item){
                $product = Products::find($item->id_product);
                $product->sellIndex = $item->quantity;
                $product->save();
            }
        }
        $bill->save();
        event(new OrderEvent($bill));
        return response()->json(['status' => $bill->status]);
    }

    public function postSubscribe(Request $request){
        $DBfollower = Follower::where('mail', $request->email)->get();
        if($DBfollower->isEmpty()){
            $follower = new Follower();
            $follower->mail = $request->email;
            $follower->save();
        }
        return response()->json();
    }
}
