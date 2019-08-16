<?php

namespace App\Http\Controllers;

use App\Bills;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function getList(){
        $bills = Bills::where('active', 1)->get();
        return view('admin.Bill.list')->with(['bills' => $bills]);
    }
}
