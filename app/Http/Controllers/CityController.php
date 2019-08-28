<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getList(){
        $citys = City::where('active', 1)->get();
        return view('admin.city.list')->with(['citys' => $citys]);
    }

    public function getAdd(){
        $citys = City::where('active', 1)->get();
        return view('admin.city.add')->with(['citys' => $citys]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required|unique:city',
            ],
            [
                'name.required' => 'Your must fill out the name of city',
                'name.unique' => 'Your city name is used',
            ]
        );
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return redirect('admin/city/add')->with('success', 'New city is created success');
    }

    public function getDelete($id){
        $city = City::find($id);
        $city->active = 0;
        foreach ($city->District as $district){
            $district->active = 0;
            $district->save();
        }
        foreach ($city->SubDistrict as $subDistrict){
            $subDistrict->active = 0;
            $subDistrict->save();
        }
        $city->save();
        return redirect('admin/city/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $city = City::find($id);
        return view('admin.city.update')->with(['city' => $city]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Your must fill out the name of slide',
            ]
        );
        $oldCity = City::find($id);
        if($oldCity->name == $request->name){
            return redirect('admin/city/update/'.$id);
        }else{
            $newCity = new City();
            $newCity->name = $request->name;
            $newCity->save();
            foreach ($oldCity->District as $district){
                $district->active = 0;
                $district->save();
            }
            foreach ($oldCity->SubDistrict as $subDistrict){
                $subDistrict->active = 0;
                $subDistrict->save();
            }
            $oldCity->active = 0;
            $oldCity->save();
        }
        return redirect('admin/city/list')->with('alert', 'City is updated success');
    }
}
