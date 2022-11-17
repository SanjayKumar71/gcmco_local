<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function post_sign_in(Request $request){
        
        $request->validate([
            'email'    => 'required',
            'password' => 'required'
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect()->route('account');
        }
        
        return redirect('sign-in')->withError('Login details not valid');
    }

}
