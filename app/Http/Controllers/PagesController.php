<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

class PagesController extends Controller
{
    public function dashboard(){

        $data['stock_alerts'] = [
            "kg" => 100,
            "lt" => 200,
            "piece" => 10,
        ];
   
        $data['stocks'] = Product::with('categories')->groupBy('category_id') ->selectRaw('*, sum(quantity) as sum')->get();
        return view('home.index', $data);
    }
}
