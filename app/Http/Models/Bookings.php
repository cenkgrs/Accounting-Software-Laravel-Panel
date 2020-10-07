<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table = 'bookings';
    public $timestamps = false;

    public function Product(){
        return $this->belongsTo('App\Http\Models\Product' , 'product_id');
    }
}
