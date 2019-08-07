<?php

namespace App\Http\Controllers;

use App\Products;
use App\TypeProducts;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function getList(){
        $typeProduct = TypeProducts::where('active', 1)->get();
        return view('admin.TypeProduct.list')->with(['typeProduct' => $typeProduct]);
    }

    public function getAdd(){
        $typeProduct = TypeProducts::where('active', 1)->get();
        return view('admin.TypeProduct.add')->with(['typeProduct' => $typeProduct]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'description' => 'required',
                'abbreviation' => 'required'
            ],
            [
                'name.required' => 'Your must fill out the name of product type',
                'name.min' => 'The name of product type must be at least 3 characters',
                'description.required' => 'Your must fill out the description of product type',
                'abbreviation.required' => 'Your must fill out the abbreviation of product type'
            ]
        );
        $typeProduct = new TypeProducts();
        $typeProduct->name = $request->name;
        $typeProduct->abbreviation = $request->abbreviation;
        $typeProduct->description = $request->description;
        $typeProduct->save();
        return redirect('admin/typeproduct/add')->with('success', 'New product type is created success');
    }

    public function getDelete($id){
        $typeProduct = TypeProducts::find($id);
        foreach($typeProduct->Products as $product){
            $product->active = 0;
            $product->save();
        };
        $typeProduct->active = 0;
        $typeProduct->save();
        return redirect('admin/typeproduct/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $typeProduct = TypeProducts::find($id);
        return view('admin.TypeProduct.update')->with(['typeProduct' => $typeProduct]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'description' => 'required'
            ],
            [
                'name.required' => 'Your must fill out the name of product type',
                'name.min' => 'The name of product type must be at least 3 characters',
                'description.required' => 'Your must fill out the description of product type',
            ]
        );
        $oldtypeProduct = TypeProducts::find($id);
        $newtypeProduct = new TypeProducts();
        if($oldtypeProduct->name == $request->name){
            $oldtypeProduct->description = $request->description;
            $oldtypeProduct->abbreviation = $request->abbreviation;
        }else{
            $oldtypeProduct->active = 0;
            foreach($oldtypeProduct->Products as $product){
                $product->active = 0;
                $product->save();
            };
            $newtypeProduct->name = $request->name;
            $newtypeProduct->abbreviation = $request->abbreviation;
            $newtypeProduct->description = $request->description;
            $newtypeProduct->save();
        }
        $oldtypeProduct->save();
        return redirect()->back()->with('success', 'Update success');
    }
}
