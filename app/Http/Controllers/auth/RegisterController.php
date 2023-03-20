<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\auth\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('login.index')->with('success','Register Successful');
    }
}
