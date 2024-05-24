<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    public function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            // 'email' =>'required',
            // 'password' => 'required'
        ],[
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $infologin=
        [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)){
            return redirect('/products');
        }else {
            return redirect('')->withErrors('username or password incorrect')->withInput();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user =User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        Auth::login($user);
        return redirect('/products')->with('success', 'Registration successful. Please login.');
    }
    
}
