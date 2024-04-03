<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Validator;
use App\Jobs\OrderCreated;
class OrderController extends Controller
{
    public function store( Request $request ){
        $validator = Validator::make($request->all(),[
            'product_id'=>'required',
            'count'=>'required',
        ]);
    
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $order = new Order();
        $order->product_id = $request->product_id;
        $order->count = $request->count;
        $order->save();
        OrderCreated::dispatch($order->toArray());
        
        return response()->json('order is added',201);
        
    }


}
