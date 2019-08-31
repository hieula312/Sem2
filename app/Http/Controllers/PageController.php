<?php

namespace App\Http\Controllers;
use App\BillDetail;
use App\Bills;
use App\Cart;
use App\City;
use App\Comment;
use App\Events\BillEvent;
use App\Events\MyEvent1;
use App\Notification;
use App\User;
use App\DeliveryType;
use App\District;
use App\SubDistrict;
use App\TypeProducts;
use App\WholeProducts;
use App\Products;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Pusher\Pusher;

class PageController extends Controller
{
    public function __construct(){
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); // Getting current URI like 'category/books/'
        array_unshift($links, $currentLink); // Putting it in the beginning of links array
        session(['links' => $links]); // Saving links array to the session
    }
    public function getHomepage(Request $request){
//        $request->session()->forget('cart');
        $wholeProducts = WholeProducts::where('active', 1)->get();
        $productsArray = null;
        $bigsArray = null;
        $numArr = array();
        foreach($wholeProducts as $wholeProduct){
            array_push($numArr, $wholeProduct->id);
            $productsArray[$wholeProduct->id] = Products::where([
                ['active', 1],
                ['unit', '>', 1],
                ['id_whole', $wholeProduct->id]
            ])->orderBy('sellIndex', 'desc')->take(8)->get();
            $bigsArray[$wholeProduct->id] = $productsArray[$wholeProduct->id];
        }
        $popularProducts = Products::where('active', 1)->orderBy('sellIndex', 'desc')->take(8)->get();
        $featureProducts = Products::where([
            ['active', 1],
            ['unit', '>', 1],
            ['feature', 1]
        ])->orderBy('created_at', 'desc')->take(8)->get();
        $latestProducts = Products::where([
            ['active', 1],
            ['unit', '>', 1],
            ['new', 1]
        ])->orderBy('created_at', 'desc')->take(8)->get();
        $a = rand(0, 100);
        while(in_array($a, $numArr)){
            $a = rand(0,100);
        }
        array_push($numArr, $a);
        $bigsArray[$a] = $popularProducts;

        while(in_array($a, $numArr)){
            $a = rand(0,100);
        }
        array_push($numArr, $a);
        $bigsArray[$a] = $featureProducts;

        while(in_array($a, $numArr)){
            $a = rand(0,100);
        }
        $bigsArray[$a] = $latestProducts;
        return view('pages.homepage')->with(['bigsArray' => $bigsArray, 'productsArray' => $productsArray, 'wholeProducts' => $wholeProducts, 'popularProducts' => $popularProducts, 'featureProducts' => $featureProducts, 'latestProducts' => $latestProducts]);
    }

    public function getTypeProductPage($id, Request $request){
        $typeProduct = TypeProducts::find($id);
        if($request->has('sort')) {
            if ($request->sort == 'low-to-high') {
                $products = Products::where([
                    ['active', 1],
                    ['unit', '>', 1],
                    ['id_type', $request->id]
                ])->orderBy('unit_price', 'asc')->paginate(12);
                $products->setPath('typeProduct/' . $typeProduct->id . '/?sort=' . $request->sort);
            } else if ($request->sort == 'high-to-low') {
                $products = Products::where([
                    ['active', 1],
                    ['unit', '>', 1],
                    ['id_type', $request->id]
                ])->orderBy('unit_price', 'desc')->paginate(12);
                $products->setPath('typeProduct/' . $typeProduct->id . '/?sort=' . $request->sort);
            } else if ($request->sort == 'newest') {
                $products = Products::where([
                    ['active', 1],
                    ['unit', '>', 1],
                    ['id_type', $request->id]
                ])->orderBy('new', 'desc')->paginate(12);
                $products->setPath('typeProduct/' . $typeProduct->id . '/?sort=' . $request->sort);
            } else if ($request->sort == 'top-selling') {
                $products = Products::where([
                    ['active', 1],
                    ['unit', '>', 1],
                    ['id_type', $request->id]
                ])->orderBy('sellIndex', 'desc')->paginate(12);
                $products->setPath('typeProduct/' . $typeProduct->id . '/?sort=' . $request->sort);
            }
        }else{
            $products = Products::where([
                ['active', 1],
                ['unit', '>', 1],
                ['id_type', $id]
            ])->paginate(12);
        }
        return view('pages.typeProduct')->with(['typeProduct' => $typeProduct, 'products' => $products]);
    }

    public function getProductDetail($id){
        $product = Products::find($id);
        $relatedProducts = Products::where([
            ['active', 1],
            ['unit', '>', 1],
            ['id_type', $product->TypeProduct->id]
        ])->orderBy('created_at', 'desc')->take(8)->get();
        $comments = Comment::where([
            ['active', 1],
            ['id_product', $id]
        ])->orderBy('created_at', 'desc')->get();
        return view('pages.product')->with(['product' => $product, 'relatedProducts' => $relatedProducts, 'comments' => $comments]);
    }

    public function showCart(){
        return view('pages.cart');
    }

    public function getCheckout(){
        return view('pages.checkout');
    }

    public function postOrder(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
                'city' => 'numeric|min:1',
                'district' => 'numeric|min:1',
                'subdistrict' => 'numeric|min:1',
                'address' => 'required',
                'deliveryType' => 'numeric|min:1',
                'checkTel' => 'numeric|min:1',

            ],
            [
                'name.required' => 'Please fill out your name',
                'email.required' => 'Please fill out your email',
                'email.email' => 'Your email is incorrect format',
                'tel.required' => 'Please fill out your telephone number',
                'city.min' => 'Please select your city',
                'district.min' => 'Please select your district',
                'subdistrict.min' => 'Please select your subdistrict',
                'address.required' => 'Please fill out your address',
                'deliveryType.min' => 'Please select your delivery type',
                'checkTel.min' =>'Your phone number is incorrect format',
            ]
        );
        $bill = new Bills();
        if($request->checkUser == 1){
            $bill->id_user = Auth::user()->id;
        }
        $bill->customerName = $request->name;
        $bill->customerEmail = $request->email;
        $bill->customerPhoneNumber = $request->tel;
        $bill->customerAddress = $request->address;
        $bill->customerCity = City::find($request->city)->name;
        $bill->customerDistrict = District::find($request->district)->name;
        $bill->customerSubdistrict = SubDistrict::find($request->subdistrict)->name;
        $bill->note = $request->note;
        $bill->payment = $request->payment;
        $bill->total = $request->totalPrice;
        $bill->deliveryType = DeliveryType::find($request->deliveryType)->name;
        $bill->id = getRandomStringNumber(8);
        $dbBill = Bills::where('id', $bill->id)->get();
        while(!$dbBill->isEmpty()){
            $bill->id = getRandomStringNumber(8);
        }
        $bill->save();
        $cart = $request->session()->get('cart');
        $deliveryType = DeliveryType::find($request->deliveryType);
        if ($request->session()->has('cart')){
            foreach($cart->items as $item){
                $billDetail = new BillDetail();
                $billDetail->id_product = $item['item']['id'];
                $billDetail->quantity = $item['qty'];
                $billDetail->price = $item['price'];
                $billDetail->id_bill = $bill->id;
                $billDetail->id = $deliveryType->abbr.''.$billDetail->id_product.''.$bill->id;
                $billDetail->save();
            }
        }
        $notification = new Notification();
        $notification->type = 2;
        $notification->seen = 0;
        $notification->message = $bill->customerName." has just ordered";
        $notification->link = 'admin/bill/list';
        $notification->save();
        event(new BillEvent($bill, $notification));
        $request->session()->forget('cart');
        return redirect('homepage')->with('alert', 'Your order is created success!');
    }

    public function getRegister(){
        return view('pages.register');
    }

    public function postRegister(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'refillpassword' => 'required|same:password',
                'sex' => 'min:1|numeric',
                'phoneNumber' => 'required|unique:users',
                'city' => 'numeric|min:1',
                'district' => 'numeric|min:1',
                'subdistrict' => 'numeric|min:1',
                'address' => 'required',
                'checkTel' => 'numeric|min:1',
            ],
            [
                'name.required' => 'Please fill out your name',
                'email.required' => 'Please fill out your email',
                'email.email' => 'Your email is incorrect format',
                'email.unique' => 'Your email is already used',
                'password.required' => 'Please fill out your password',
                'password.min' => 'Your password must be at least 6 characters',
                'refillpassword.required' => 'Please fill out your refill password',
                'refillpassword.same' => 'Your refill password isn\'t match',
                'phoneNumber.required' => 'Please fill out your telephone number',
                'phoneNumber.unique' => 'Your phone number is already used',
                'city.min' => 'Please select your city',
                'sex.min' => 'Please select your sex',
                'district.min' => 'Please select your district',
                'subdistrict.min' => 'Please select your subdistrict',
                'address.required' => 'Please fill out your address',
                'checkTel.min' =>'Your phone number is incorrect format',
            ]
        );
        $user = new User();
        $user->level = 1;
        $user->name = $request->name;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if($request->sex == 1){
            $user->sex = 'M';
        }elseif($request->sex == 2){
            $user->sex = 'F';
        }
        $user->address = $request->address;
        $user->customerCity = City::find($request->city)->name;
        $user->customerDistrict = District::find($request->district)->name;
        $user->customerSubdistrict = SubDistrict::find($request->subdistrict)->name;
        $user->save();
        Auth::login($user);
        return redirect()->back()->with('alert', 'Register success!');
    }

    public function getSearch(Request $request){
        $search = $request->search;
        $products = Products::where('name', 'like', '%'.$search.'%')->orWhere('description', 'like', '%'.$search.'%')->paginate(12);
        $count = count(Products::where('name', 'like', '%'.$search.'%')->orWhere('description', 'like', '%'.$search.'%')->get());
        $products->setPath('search/?search='.$search);
        return view('pages.search')->with(['products' => $products, 'count' => $count, 'search' => $search]);
    }

    public function checkOrder(){
        return view('pages.checkOrder');
    }
    public function postSignIn(Request $request){
        $validator = Validator::make($request->all(), [
            'information' => 'required',
            'password' => 'required|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }else {
            if($request->filter == 2){
                if(Auth::attempt(['phoneNumber' => $request->information, 'password' => $request->password])){
                    $user = Auth::user();
                    Auth::login($user);
                    return response()->json(['success'=>'Ok']);
                }else{
                    return response()->json(['error1'=>'At least one input isn\'t not correct']);
                }
            }else if($request->filter == 3){
                if(Auth::attempt(['email' => $request->information, 'password' => $request->password])){
                    $user = Auth::user();
                    Auth::login($user);
                    return response()->json(['success'=>'Ok']);
                }else{
                    return response()->json(['error1'=>'At least one input isn\'t not correct']);
                }
            }else if($request->filter == 0){
                return response()->json(['error1'=>'Your information isn\'t correct format']);
            }
        }
    }

    public function SignOut(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->back();
        }
    }

    public function testPusher(){
        return view('testpusher');
    }

}
