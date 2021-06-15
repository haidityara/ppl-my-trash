<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TakeOrder extends Model
{
    protected $table = 'take_orders';

    public function getOrder(){
        return $this->belongsTo(Sell::class,'order_id');
    }
}
