<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Models\User;

class UserController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('get')){
            return view('auth.login');
        }
        
        $input = $request->all();

        $user = User::where('username', $input['username'])->where('password', $input['password'])->first();

        if($user ){
            Auth::login($user);
            return redirect()->route('dashboard');
        }
    }

    public function logout(Request $request){
        
        Auth::logout();
        return redirect('/login');
    }
}
