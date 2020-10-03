<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Product;

class ProductsController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){

        }   

        $data['products'] = Product::get();

        return view('products.index', $data);

    }
}
