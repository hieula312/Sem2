<?php

namespace App\Http\Controllers;

use App\Products;
use App\TypeProducts;
use App\WholeProducts;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function getList(){
        $typeProduct = TypeProducts::where('active', 1)->get();
        return view('admin.TypeProduct.list')->with(['typeProduct' => $typeProduct]);
    }

    public function getAdd(){
        $wholeProduct = WholeProducts::where('active', 1)->get();
        $typeProduct = TypeProducts::where('active', 1)->get();
        return view('admin.TypeProduct.add')->with(['typeProduct' => $typeProduct, 'wholeProduct' => $wholeProduct]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:3|unique:type_products',
                'description' => 'required',
                'abbreviation' => 'required|size:2|unique:type_products',
            ],
            [
                'name.unique' => 'Your type product name is used',
                'name.required' => 'Your must fill out the name of product type',
                'name.min' => 'The name of product type must be at least 3 characters',
                'description.required' => 'Your must fill out the description of product type',
                'abbreviation.required' => 'Your must fill out the abbreviation of product type',
                'abbreviation.size' => 'Your abbreviation of product type must be equal 2 characters',
                'abbreviation.unique' => 'Your abbreviation of type product is used',
            ]
        );
        $typeProduct = new TypeProducts();
        $typeProduct->name = $request->name;
        $typeProduct->id_whole = $request->wholeProduct;
        $typeProduct->abbreviation = strtoupper($request->abbreviation);
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
        $wholeProduct = WholeProducts::where('active', 1)->get();
        $typeProduct = TypeProducts::find($id);
        return view('admin.TypeProduct.update')->with(['typeProduct' => $typeProduct, 'wholeProduct' => $wholeProduct]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required|min:3',
                'description' => 'required',
                'abbreviation' => 'required||size:2'
            ],
            [
                'name.required' => 'Your must fill out the name of product type',
                'name.min' => 'The name of product type must be at least 3 characters',
                'description.required' => 'Your must fill out the description of product type',
                'abbreviation.required' => 'Your must fill out the abbreviation of product type',
                'abbreviation.size' => 'Your abbreviation of product type must be equal 2 characters',
            ]
        );
        $oldtypeProduct = TypeProducts::find($id);
        $newtypeProduct = new TypeProducts();
        $request->abbreviation = strtoupper($request->abbreviation);
        $dbselected = TypeProducts::where('abbreviation', $request->abbreviation)->get();
        if($oldtypeProduct->name == $request->name){
            if($oldtypeProduct->abbreviation == $request->abbreviation){
                $oldtypeProduct->description = $request->description;
                $oldtypeProduct->abbreviation = strtoupper($request->abbreviation);
                $oldtypeProduct->id_whole = $request->wholeProduct;
            }else{
                if(!$dbselected->isEmpty()){
                    return redirect('admin/typeproduct/update/'.$id)->withErrors('Your abbreviation of type product is used');
                }
            }
        }else{
            $oldtypeProduct->active = 0;
            foreach($oldtypeProduct->Products as $product){
                $product->active = 0;
                $product->save();
            };
            $newtypeProduct->name = $request->name;
            if(!$dbselected->isEmpty()){
                return redirect('admin/typeproduct/update/'.$id)->withErrors('Your abbreviation of type product is used');
            }
            $newtypeProduct->abbreviation = $request->abbreviation;
            $newtypeProduct->description = $request->description;
            $newtypeProduct->id_whole = $request->wholeProduct;
            $newtypeProduct->save();
        }
        $oldtypeProduct->save();
        return redirect('admin/typeproduct/list')->with('alert', 'Update success');
    }
}
