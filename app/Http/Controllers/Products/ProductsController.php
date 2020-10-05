<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;
use App\Http\Models\Product;
use App\Http\Models\Categories;

class ProductsController extends Controller
{
    
    public function index(Request $request){

        if($request->isMethod('post')){
            $input = $request->all();
            $operation = $input['operation'];

            if($operation == 'filter'){
                $data['products'] = Product::where(function ($q) use ($input) {
                    if(isset($input['id']) && $input['id']){
                        $q->where('id', $input['id']);
                    }
                    if(isset($input['code']) && $input['code']){
                        $q->where('code', $input['code']);
                    }
                    if(isset($input['name']) && $input['name']){
                        $q->where('name', $input['name']);
                    }
                    if(isset($input['category_id']) && $input['category_id']){
                        $q->where('category_id', $input['category_id']);
                    }
                    if(isset($input['firm_id']) && $input['firm_id']){
                        $q->where('firm_id', $input['firm_id']);
                    }
                })->get();

                return view('products.index', $data);

            }

            if($operation == 'insert'){
                Product::insert([
                    'code'          => $input['code'],
                    'name'          => $input['name'],
                    'price'         => $input['price'],
                    'category_id'   => $input['category_id'],
                    'firm_id'       => $input['firm_id']
                ]);
            }

            if($operation == 'delete'){
                Product::where('id', $input['id'])->delete();
            }

            if($operation == 'update'){
                Product::where('id', $input['id'])->update([
                    'code'          => $input['code'],
                    'name'          => $input['name'],
                    'price'         => $input['price']
                ]);
            }

         
        }   

        $data['columns'] = Schema::getColumnListing('products');

        $data['products'] = Product::with('Categories')->paginate(9);

        return view('products.index', $data);

    }
}
