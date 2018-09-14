<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class AuthController extends Controller
{
    public function login(Request $request)
    {	
    	$email=$request->email;
    	$password=$request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('admin');
        }
        else{
        	return redirect()->intended('login');
        }
    }
}
