<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Validation\ValidationException;


class AutheticationController extends Controller
{
    /**
     * Method autheticate
     *
     * @param App\Http\Requests\LoginRequest $request 
     *
     * @return Json
     */
    public function autheticate(LoginRequest $request)
    {
    
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('')->plainTextToken;

        return response()->json([
            'status' => true,
            'token' => $token,
        ], 200);
    }

    /**
     * Method register
     *
     * @param RegisterRequest $request 
     */
    public function register(RegisterRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => true,
            'user' => new UserResource($user),
            'message' => 'Register Successfully.'
        ]);
    }
}
