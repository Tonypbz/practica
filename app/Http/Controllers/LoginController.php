<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect(route('privada'));
    }
    public function login(Request $request)
    {
        $credentials = [
            "email"=>$request->email,
            "password"=>$request->password,
        ];
        $remember = ($request->has('remember') ? true : false);
        if(Auth::attempt($credentials, $remember))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        }else{
            return redirect('login')->with('error', 'Los datos ingresados no son válidos. Intente nuevamente.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}