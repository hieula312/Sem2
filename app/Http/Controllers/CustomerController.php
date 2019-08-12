<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getList(){
        $customers = User::where([
            ['active', 1],
            ['level', 1]
        ])->get();
        return view('admin.customer.list')->with(['customers' => $customers]);
    }
}
