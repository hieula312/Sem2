<?php

namespace App\Http\Controllers;

use App\DeliveryType;
use Illuminate\Http\Request;

class DeliveryTypeController extends Controller
{
    public function getList(){
        $deliveryTypes = DeliveryType::where('active', 1)->get();
        return view('admin.DeliveryType.list')->with(['deliveryTypes' => $deliveryTypes]);
    }

    public function getAdd(){
        return view('admin.DeliveryType.add');
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|unique:deliverytype',
                'abbr' => 'required|size:1|unique:deliverytype',
                'factor' => 'required|numeric|min:0'
            ],
            [
                'name.required' => 'You must fill out the name of delivery type',
                'name.unique' => 'The name of delivery type is used',
                'abbr.unique' => 'The abbreviation name of delivery type is used',
                'abbr.required' => 'You must fill out the abbreviation name of delivery type',
                'abbr.size' => 'The abbreviation of type product must be only 1 character',
                'factor.required' => 'You must fill out the factor of delivery type',
            ]
        );
        $deliveryType = new DeliveryType();
        $deliveryType->name = $request->name;
        $deliveryType->abbr = $request->abbr;
        $deliveryType->factor = $request->factor;
        $deliveryType->save();
        return redirect('admin/deliverytype/add')->with('success', 'New delivery type is created success');
    }

    public function getDelete($id){
        $deliveryType = DeliveryType::find($id);
        $deliveryType->active = 0;
        $deliveryType->save();
        return redirect('admin/deliverytype/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $deliveryType = DeliveryType::find($id);
        return view('admin.deliverytype.update')->with(['deliveryType' => $deliveryType]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
                'abbr' => 'required|size:1',
                'factor' => 'required|numeric|min:0'
            ],
            [
                'name.required' => 'You must fill out the name of delivery type',
                'abbr.required' => 'You must fill out the abbreviation of delivery type',
                'abbr.size' => 'The abbreviation of type product must be only 1 character',
                'factor.required' => 'You must fill out the factor of delivery type',
            ]
        );
        $deliveryType = DeliveryType::find($id);
        if($deliveryType->name != $request->name){
            $dbName = DeliveryType::where('name', $request->name)->get();
            if(!$dbName->isEmpty()){
                return redirect()->back()->withErrors('The name of delivery type is used');
            }else{
                $deliveryType->name = $request->name;
            }
        }
        if($deliveryType->abbr != $request->abbr){
            $dbAbbr = DeliveryType::where('name', $request->abbr)->get();
            if(!$dbAbbr->isEmpty()){
                return redirect()->back()->withErrors('The abbreviation name of delivery type is used');
            }else{
                $deliveryType->abbr = $request->abbr;
            }
        }
        $deliveryType->factor = $request->factor;
        $deliveryType->save();
        return redirect('admin/deliverytype/list')->with('alert', 'Delivery type is updated success');
    }
}
