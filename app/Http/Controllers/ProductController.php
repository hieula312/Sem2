<?php

namespace App\Http\Controllers;

use App\Products;
use App\TypeProducts;
use App\WholeProducts;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getList(){
        $products = Products::where('active', 1)->get();
        return view('admin.product.list')->with(['products' => $products]);
    }

    public function getAdd(){
        $wholeProduct = WholeProducts::where('active', 1)->get();
        $typeProduct = TypeProducts::where('active', 1)->get();
        return view('admin.product.add')->with(['typeProduct' => $typeProduct, 'wholeProduct' => $wholeProduct]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'description' => 'required',
                'unitprice' => 'required|numeric',
                'promotionprice' => 'required||numeric',
                'quantity' => 'required|min:1||numeric',
                'description' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png|max:2048'
            ],
            [
                'name.required' => 'You must fill out the name of product',
                'name.min' => 'The name of product must be at least 3 characters',
                'unitprice.required' => 'You must fill out the unit price of product',
                'promotionprice.required' => 'You must fill out the promotionprice price of product',
                'quantity.required' => 'The quantity of product must be at greater than 1',
                'quantity.min' => 'The quantity of product must be fill out',
                'description.required' => 'The description of product must be fill out',
                'image.mimes' => 'The format of image of product is not correct',
                'image.required' => 'The image of product must be fill out',
                'image.max' => 'Only upload the image size below 2MB'
            ]
        );
        if($request->promotionprice > $request->unitprice){
            return redirect()->back()->withInput()->withErrors("The promotion price must be lower than the unit price");
        }
        $product = new Products();
        $typeProduct = TypeProducts::find($request->typeproduct);
        $a= $typeProduct->abbreviation."".getRandomStringNumber(5);
        $DBproduct = Products::where('id', $a)->get();
        while(!$DBproduct->isEmpty()){
            $a= $typeProduct->abbreviation."".getRandomStringNumber(5);
        }
        $product->id = $a;
        $product->id_type = $request->typeproduct;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unitprice;
        $product->promotion_price = $request->promotionprice;
        $product->unit = $request->quantity;
        $product->new = $request->new;
        $file = $request->file('image');
        $extens = $file->getClientOriginalExtension();
        $imageName = $a.".".$extens;
        $product->image = $a.".".$extens;
        $file->move('images/product', $imageName);
        $product->save();
        return redirect('admin/product/add')->with('success', 'New product is created success');
    }

    public function getDelete($id){
        $product = Products::find($id);
        foreach($product->BillDetail as $BillDetail){
            $BillDetail->active = 0;
            $BillDetail->save();
        };
        $product->active = 0;
        $product->save();
        return redirect('admin/product/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $wholeProduct = WholeProducts::where('active', 1)->get();
        $typeProduct = TypeProducts::where('active', 1)->get();
        $product = Products::find($id);
        return view('admin.product.update')->with(['typeProduct' => $typeProduct, 'wholeProduct' => $wholeProduct, 'product' => $product]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'description' => 'required',
                'unitprice' => 'required|numeric',
                'promotionprice' => 'required|numeric',
                'quantity' => 'required|min:1|numeric',
                'description' => 'required',
            ],
            [
                'name.required' => 'You must fill out the name of product',
                'name.min' => 'The name of product must be at least 3 characters',
                'unitprice.required' => 'You must fill out the unit price of product',
                'promotionprice.required' => 'You must fill out the promotionprice price of product',
                'quantity.required' => 'The quantity of product must be at greater than 1',
                'quantity.min' => 'The quantity of product must be fill out',
                'description.required' => 'The description of product must be fill out',
            ]
        );
        if($request->promotionprice > $request->unitprice){
            return redirect()->back()->withInput()->withErrors("The promotion price must be lower than the unit price");
        }
        $product = Products::find($id);
        $product->id_type = $request->typeproduct;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit_price = $request->unitprice;
        $product->promotion_price = $request->promotionprice;
        $product->unit = $request->quantity;
        $product->new = $request->new;
        if($request->checkImg == 1){
            $this->validate($request,
                [
                    'image' => 'required|mimes:jpg,jpeg,png|max:2048'
                ],
                [
                    'image.mimes' => 'The format of image of product is not correct',
                    'image.required' => 'The image of product must be fill out',
                    'image.max' => 'Only upload the image size below 2MB'
                ]
            );
            unlink('images/product/'.$product->image);
            $newfile = $request->file('image');
            $newfile->move('images/product', $product->image);
        }
        $product->save();
        return redirect('admin/product/list')->with('alert', 'Product is updated success');
    }
}
