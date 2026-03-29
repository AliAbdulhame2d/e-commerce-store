<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function login(Request $request) {
        if(! Auth::attempt($request->only('email','password'))){
            return response()->json(['message' => 'Invalid'], 401);
        }

            $user = Auth::user();
        return response()->json(['token' => $user->createToken('api-token')->plainTextToken]);
    }
    
    public function register(Request $request) {
            $user = User::create([
                'user' =>$request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        return response()->json(['token' => $user->createToken('api-token')->plainTextToken]);
        }

    public function logout(Request $request) {
            $request->user()->currentAccessToken()->delete();
        return response()->json(['message'=>'Logged out']);
    }

}
