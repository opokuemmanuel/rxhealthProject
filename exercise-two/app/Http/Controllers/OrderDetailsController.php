<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderDetailsController extends Controller
{
    public function get_order_with_details($id=null)
    {
        $data =  Order::with('order_details')->where('id',$id)->get();
        return response()->JSON(['status'=>200, 'data'=>OrderResource::collection($data)]);
    }
}



