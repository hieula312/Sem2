<?php

namespace App\Http\Controllers;
use App\BillDetail;
use App\Bills;
use App\Cart;
use App\City;
use App\DeliveryType;
use App\District;
use App\SubDistrict;
use App\TypeProducts;
use App\WholeProducts;
use App\Products;
use Illuminate\Http\Request;

class PageController extends Controller
{
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

    public function getTypeProductPage($id){
        $typeProduct = TypeProducts::find($id);
        $products = Products::where([
            ['active', 1],
            ['unit', '>', 1],
            ['id_type', $id]
        ])->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.typeProduct')->with(['typeProduct' => $typeProduct, 'products' => $products]);
    }

    public function getProductDetail($id){
        $product = Products::find($id);
        $relatedProducts = Products::where([
            ['active', 1],
            ['unit', '>', 1],
            ['id_type', $product->TypeProduct->id]
        ])->orderBy('created_at', 'desc')->take(8)->get();
        return view('pages.product')->with(['product' => $product, 'relatedProducts' => $relatedProducts]);
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
            ]
        );
        $bill = new Bills();
        $bill->customerName = $request->name;
        $bill->customerEmail = $request->email;
        $bill->customerPhoneNumber = $request->tel;
        $bill->customerAddress = $request->address;
        $bill->customerCity = City::find($request->city)->name;
        $bill->customerDistrict = District::find($request->district)->name;
        $bill->customerSubdistrict = SubDistrict::find($request->city)->name;
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
        foreach($cart->items as $item){
            $billDetail = new BillDetail();
            $billDetail->id_product = $item['item']['id'];
            $billDetail->quantity = $item['qty'];
            $billDetail->price = $item['price'];
            $billDetail->id_bill = $bill->id;
            $billDetail->id = $deliveryType->abbr.''.$billDetail->id_product.''.$bill->id;
            $billDetail->save();
        }
        $request->session()->forget('cart');
        return redirect()->back()->with('alert', 'Your order is created success');
    }

    public function getRegister(){
        return view('pages.register');
    }
}
