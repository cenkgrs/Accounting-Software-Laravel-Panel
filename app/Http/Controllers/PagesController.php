<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        $data["stocks"] = [
            "fruit"         => ["name" => "Fruit Stock", "quantity" => 50, "unit" => "kg"],
            "drink"         => ["name" => "Drink Stock", "quantity" => 10, "unit" => "lt"],
            "meal"          => ["name" => "Meal Stock", "quantity" => 95, "unit" => "piece"],
            "vegetables"    => ["name" => "Vegetable Stock", "quantity" => 10, "unit" => "kg"],
        ];


        return view('home.index', $data);
    }
}
