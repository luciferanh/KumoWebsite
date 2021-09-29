<?php

namespace App\Http\Controllers\Useres;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('admin.loginUser'); 
    }
    public function store(Request $request){
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
            return redirect()->route('admin');

        }
        $request->session()->flash('error', 'Email hoặc password không đúng');
        return redirect()->back();
    }
    
}
