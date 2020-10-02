<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post')){

        }

        return view('products.index');

    }
}
