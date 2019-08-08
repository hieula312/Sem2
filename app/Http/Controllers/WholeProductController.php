<?php

namespace App\Http\Controllers;

use App\WholeProducts;
use Illuminate\Http\Request;

class WholeProductController extends Controller
{
    public function getList(){
        $wholeProduct = WholeProducts::where('active', 1)->get();
        return view('admin.WholeProduct.list')->with(['wholeProduct' => $wholeProduct]);
    }

    public function getAdd(){
        $wholeProduct = WholeProducts::where('active', 1)->get();
        return view('admin.WholeProduct.add')->with(['wholeProduct' => $wholeProduct]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:2|unique:whole_products',
            ],
            [
                'name.unique' => 'Your type product name is used',
                'name.required' => 'Your must fill out the name of product type',
                'name.min' => 'The name of product type must be at least 2 characters',
            ]
        );
        $wholeProduct = new WholeProducts();
        $wholeProduct->name = $request->name;
        $wholeProduct->save();
        return redirect('admin/wholeproduct/add')->with('success', 'New whole product is created success');
    }

    public function getDelete($id){
        $wholeProduct = WholeProducts::find($id);
        foreach($wholeProduct->TypeProducts as $typeProduct){
            $typeProduct->active = 0;
            $typeProduct->save();
        };
        foreach($wholeProduct->Products as $product){
            $product->active = 0;
            $product->save();
        };
        $wholeProduct->active = 0;
        $wholeProduct->save();
        return redirect('admin/wholeproduct/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $wholeProduct = WholeProducts::find($id);
        return view('admin.WholeProduct.update')->with(['wholeProduct' => $wholeProduct]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required|min:2',
            ],
            [
                'name.required' => 'Your must fill out the name of product type',
                'name.min' => 'The name of whole product must be at least 2 characters',
            ]
        );
        $oldwholeProduct = WholeProducts::find($id);
        if($oldwholeProduct->name == $request->name){
            return redirect('admin/wholeproduct/update/'.$id);
        }else{
            $dbSelected = WholeProducts::where('name', $request->name)->get();
            if(!$dbSelected->isEmpty()){
                return redirect()->back()->withErrors(['Whole product name has already existed']);
            }
            $newwholeProduct = new WholeProducts();
            foreach($oldwholeProduct->TypeProducts as $typeProduct){
                $typeProduct->active = 0;
                $typeProduct->save();
            };
            foreach($oldwholeProduct->Products as $product){
                $product->active = 0;
                $product->save();
            };
            $oldwholeProduct->active = 0;
            $oldwholeProduct->save();
            $newwholeProduct->name = $request->name;
            $newwholeProduct->save();
            return redirect('admin/wholeproduct/list')->with('alert', 'Update success');
        }
    }
}
