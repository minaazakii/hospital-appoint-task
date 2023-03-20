<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        if(!Auth::attempt($request->validated()))
        {
            return redirect()->back()->with('error','Wrong Email or Password');
        }
        return redirect()->route('client.appointment.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
