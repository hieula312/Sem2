<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getList(){
        $employees = User::where([
            ['active', 1],
            ['level', 2]
        ])->get();
        return view('admin.Employee.list')->with(['employees' => $employees]);
    }

    public function getAdd(){
        return view('admin.Employee.add');
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'phoneNumber' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'checkTel' => 'numeric|min:1',
            ],
            [
                'name.required' => 'Your must fill out the name of employee',
                'phoneNumber.required' => 'Your must fill out the phone number of employee',
                'phoneNumber.unique' => 'Your phone number is used',
                'email.required' => 'Your must fill out the email of employee',
                'email.email' => 'Your email is incorrect format',
                'email.unique' => 'Your email is used',
                'password.required' => 'Your must fill out the password of employee',
                'password.min' => 'Password length is at least 6 characters',
                'checkTel.min' =>'Your phone number is incorrect format',
            ]
        );
        $employee = new User();
        $employee->level = 2;
        $employee->name = $request->name;
        $employee->phoneNumber = $request->phoneNumber;
        $employee->email = $request->email;
        $employee->password = bcrypt($request->password);
        $employee->sex = $request->sex;
        $employee->save();
        return redirect('admin/employee/add')->with('success', 'New product type is created success');
    }

    public function getUpdate($id){
        $employee = User::find($id);
        return view('admin.Employee.update')->with(['employee' => $employee]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
                'phoneNumber' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'checkTel' => 'numeric|min:1',
            ],
            [
                'name.required' => 'Your must fill out the name of employee',
                'phoneNumber.required' => 'Your must fill out the phone number of employee',
                'email.required' => 'Your must fill out the email of employee',
                'email.email' => 'Your email is incorrect format',
                'password.required' => 'Your must fill out the password of employee',
                'password.min' => 'Password length is at least 6 characters',
                'checkTel.min' =>'Your phone number is incorrect format',
            ]
        );
        $employee = User::find($id);
        $DbTelEmployee = User::where([
            ['phoneNumber', '!=', $employee->phoneNumber]
        ])->get();

        $DbEmailEmployee = User::where([
            ['email', '!=', $employee->email]
        ])->get();
        foreach($DbEmailEmployee as $DbEmail){
            if($DbEmail->email == $request->email){
                return redirect()->back()->withInput()->withErrors('Your email is used');
            }
        }
        foreach($DbTelEmployee as $DbTel){
            if($DbTel->phoneNumber == $request->phoneNumber){
                return redirect()->back()->withInput()->withErrors('Your phone is used');
            }
        }
        $employee->phoneNumber = $request->phoneNumber;
        $employee->email = $request->email;
        $employee->name = $request->name;
        if($request->checkPassword == 1){
            $employee->password = bcrypt($employee->password);
        }
        $employee->sex = $request->sex;
        $employee->save();
        return redirect('admin/employee/list')->with('alert', 'Update information of employee is success');
    }
}
