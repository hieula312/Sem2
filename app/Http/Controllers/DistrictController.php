<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getList(){
        $districts = District::where('active', 1)->get();
        return view('admin.district.list')->with(['districts' => $districts]);
    }

    public function getAdd(){
        $citys = City::where('active', 1)->get();
        return view('admin.district.add')->with(['citys' => $citys]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|unique:district',
            ],
            [
                'name.required' => 'Your must fill out the name of district',
                'name.unique' => 'Your district name is used',
            ]
        );
        $district = new District();
        $district->name = $request->name;
        $district->id_city = City::find($request->city)->id;
        $district->save();
        return redirect('admin/district/add')->with('success', 'New district is created success');
    }

    public function getDelete($id){
        $district = District::find($id);
        $district->active = 0;
        foreach ($district->SubDistrict as $subDistrict){
            $subDistrict->active = 0;
            $subDistrict->save();
        }
        $district->save();
        return redirect('admin/district/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $district = District::find($id);
        $citys = City::where('active', 1)->get();
        return view('admin.district.update')->with(['district' => $district, 'citys' => $citys]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Your must fill out the name of district',
            ]
        );
        $oldDistrict = District::find($id);
        $newDistrict = new District();
        if($oldDistrict->id_city == $request->city && $oldDistrict->name == $request->name){
            return redirect('admin/district/update/'.$id);

        }elseif($oldDistrict->id_city != $request->city && $oldDistrict->name == $request->name){
           $oldDistrict->id_city = $request->city;
        }else{
            foreach ($oldDistrict->SubDistrict as $subDistrict){
                $subDistrict->active = 0;
                $subDistrict->save();
            }
            $oldDistrict->active = 0;
            $oldDistrict->save();
            $dbDistrict = District::where('name', $request->name)->get();
            if(!$dbDistrict->isEmpty()){
                return redirect()->back()->withErrors('Your district name is used');
            }
            $newDistrict->name = $request->name;
            $newDistrict->id_city = $request->city;
            $newDistrict->save();
        }
        return redirect('admin/district/list')->with('alert', 'District is updated success');
    }
}
