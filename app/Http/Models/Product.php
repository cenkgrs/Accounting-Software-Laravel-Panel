<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    public function Categories(){
        return $this->belongsTo('App\Http\Models\Categories' , 'category_id');
    }

    public function Firm(){
        return $this->belongsTo('App\Http\Models\Firms' , 'firm_id');
    }

}
