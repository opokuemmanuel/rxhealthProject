<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function get_orders()
    {
        $data =  Order::all();
        return response()->JSON(['status'=>200, 'data'=>$data]);
    }

    public function get_order($id=null)
    {
        $data =  Order::where('id',$id)->get();
        return response()->JSON(['status'=>200, 'data'=>$data]);
    }



}


