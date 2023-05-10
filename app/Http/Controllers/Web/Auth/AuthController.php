<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function dologin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect(route('dashboard'));
        // } else {
        //     return redirect(route('login'))->with(['error'=>'Invaled Credentials']);
        // }
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1])){
            return redirect(route('dashboard'));
        } else{
            return redirect(route('login'))->with(['error'=>'Invaled Credentials']);
        }
    }
}
