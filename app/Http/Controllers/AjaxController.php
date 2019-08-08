<?php

namespace App\Http\Controllers;

use App\WholeProducts;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getTypeProduct(Request $request){
        $wholeProduct = WholeProducts::find($request->id);
        $output = '';
        foreach($wholeProduct->TypeProducts as $typeProduct){
            $output .= "<option value=".$typeProduct->id.">".$typeProduct->name."</option>";
        }
        return response()->json(['output'=>$output]);
    }
}
