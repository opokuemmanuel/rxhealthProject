<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'Order';

    public function order_details(){
       return $this->hasMany(OrderDetails::class,'OrderId', 'Id');
    }
}
