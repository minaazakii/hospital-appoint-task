<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return response()->json($user);
    }
    public function login(Request $request)
    {
        $credentials = ['email'=>$request->email,'password'=>$request->password];
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized User'], 401);
        }

        return $this->createToken($token);
    }
    protected function createToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'user'=>auth('api')->user()
        ]);
    }
}
