<?php

namespace App\Http\Controllers;
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
                ['id_whole', $wholeProduct->id]
            ])->orderBy('sellIndex', 'desc')->take(8)->get();
            $bigsArray[$wholeProduct->id] = $productsArray[$wholeProduct->id];
        }
        $popularProducts = Products::where('active', 1)->orderBy('sellIndex', 'desc')->take(8)->get();
        $featureProducts = Products::where([
            ['active', 1],
            ['feature', 1]
        ])->orderBy('created_at', 'desc')->take(8)->get();
        $latestProducts = Products::where('active', 1)->orderBy('created_at', 'desc')->take(8)->get();
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
            ['id_type', $id]
        ])->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.typeProduct')->with(['typeProduct' => $typeProduct, 'products' => $products]);
    }

    public function getProductDetail($id){
        $product = Products::find($id);
        $relatedProducts = Products::where([
            ['active', 1],
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
}
