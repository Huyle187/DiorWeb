<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{
    public function Login()
    {
        return view('users.login');
    }
    public function Login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'access_level' => 1 ]))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', ('Email or Password is wrong!'));
        
    }

    public function Logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
    }
}
