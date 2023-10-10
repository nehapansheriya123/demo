<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class AuthController extends Controller
{
 public function register()
 {
     return view('layouts.register');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:250',
        'email' => 'required|email|max:250|unique:users',
        'password' => 'required|min:8|confirmed'
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    $credentials = $request->only('email', 'password');
    Auth::attempt($credentials);
    return redirect('/')
    ->withSuccess('You have successfully registered & logged in!');
}
public function login()
{
    return view('layouts.login');
}
public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('/')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    } 
public function create_post()
{
    return view('create');
}
public function edit_post()
{
    return view('edit');
}
public function show_post()
{
    return view('show');
}
public function manage_post()
{
    return view('manage');
}

public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }   
}
