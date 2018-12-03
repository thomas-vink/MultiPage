<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'id', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
