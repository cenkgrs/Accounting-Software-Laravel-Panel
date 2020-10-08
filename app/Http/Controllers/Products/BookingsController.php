<?php

namespace App\Http\Controllers\Products;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Bookings;
use App\Http\Models\Categories;
use App\Http\Models\Firms;

class BookingsController extends Controller
{
    public function index(){

        $data['columns'] = Schema::getColumnListing('bookings');

        $data['bookings'] = Bookings::with('Product.Categories', 'Product.Firm')->paginate(10);

        return view('bookings.index', $data);
    }
}
