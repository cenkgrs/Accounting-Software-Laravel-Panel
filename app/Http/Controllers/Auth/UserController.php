<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        
        if($request->isMethod('get')){
            return view('auth.login');
        }
    }
}
