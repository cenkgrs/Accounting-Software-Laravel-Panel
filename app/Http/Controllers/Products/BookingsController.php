<?php

namespace App\Http\Controllers\Products;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Models\Bookings;

class BookingsController extends Controller
{
    public function index(){

        $data['columns'] = Schema::getColumnListing('bookings');

        $data['bookings'] = Bookings::with('Product')->paginate(10);

        return view('bookings.index', $data);
    }
}
