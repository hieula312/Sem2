<?php

namespace App\Http\Controllers;

use App\BillDetail;
use Illuminate\Http\Request;

class BillDetailController extends Controller
{
    public function getList(Request $request){
        if($request->has('idBill')){
            $billDetails = BillDetail::where([
                ['active', 1],
                ['id_bill', $request->idBill]
            ])->get();
        }else{
            $billDetails = BillDetail::where('active', 1)->get();
        }
        return view('admin.BillDetail.list')->with(['billDetails' => $billDetails]);
    }
}
