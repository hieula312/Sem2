<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\SubDistrict;
use Illuminate\Http\Request;

class SubDistrictController extends Controller
{
    public function getList(){
        $subdistricts = SubDistrict::where('active', 1)->get();
        return view('admin.subdistrict.list')->with(['subdistricts' => $subdistricts]);
    }

    public function getAdd(){
        $citys = City::where('active', 1)->get();
        $districts = District::where('active', 1)->get();
        return view('admin.subdistrict.add')->with(['citys' => $citys, 'districts' => $districts]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|unique:subdistrict',
                'shippingfee' => 'required|numeric'
            ],
            [
                'name.required' => 'Your must fill out the name of subdistrict',
                'name.unique' => 'Your subdistrict name is used',
                'shippingfee.required' => 'Your must fill out the shipping fee of subdistrict',
            ]
        );
        $subdistrict = new SubDistrict();
        $subdistrict->name = $request->name;
        $subdistrict->id_district = District::find($request->district)->id;
        $subdistrict->shippingfee = $request->shippingfee;
        $subdistrict->save();
        return redirect('admin/subdistrict/add')->with('success', 'New subdistrict is created success');
    }

    public function getDelete($id){
        $subdistrict = SubDistrict::find($id);
        $subdistrict->active = 0;
        $subdistrict->save();
        return redirect('admin/subdistrict/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $citys = City::where('active', 1)->get();
        $districts = District::where('active', 1)->get();
        $subdistrict = SubDistrict::find($id);
        return view('admin.subdistrict.update')->with(['districts' => $districts, 'citys' => $citys, 'subdistrict' => $subdistrict]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
                'shippingfee' => 'required|numeric'
            ],
            [
                'name.required' => 'Your must fill out the name of district',
                'shippingfee.required' => 'Your must fill out the shipping fee of subdistrict',
            ]
        );
        $subdistrict = SubDistrict::find($id);
        if($request->name != $subdistrict->name){
            $dbSub = SubDistrict::where('name', $request->name)->get();
            if(!$dbSub->isEmpty()){
                return redirect()->back()->withErrors('Your subdistrict name is used');
            }
            $subdistrict->name = $request->name;
        }
        $subdistrict->id_district = District::find($request->district)->id;
        $subdistrict->shippingfee = $request->shippingfee;
        $subdistrict->save();
        return redirect('admin/subdistrict/list')->with('alert', 'Subdistrict is updated success');
    }
}
