<?php

namespace App\Http\Controllers\Useres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('loginUser'); 
    }
    public function store1(Request $request){
     
        $validated = $request->validate([
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);
        $mang = [
            'email' =>$request['email'],
            'password' => $request['password']
        ];
        $is_true=Auth::attempt($mang);
        if($is_true == true){
            return redirect()->route('home');

        }
        $request->session()->flash('error', 'Email hoặc password không đúng');
        return redirect()->back();
    }
    
}
