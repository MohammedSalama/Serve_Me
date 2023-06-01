<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
//    public function register(Request $request)
//    {
//        $fields = $request->validate([
//            'name' => 'required|string',
//            'email' => 'required|string|unique:users,email',
//            'password' => 'required|string|confirmed'
//        ]);
//
//        $user = User::create([
//            'name' => $fields['name'],
//            'email' => $fields['email'],
//            'password' => bcrypt($fields['password'])
//        ]);
//
//        $token = $user->createToken('myapptoken')->plainTextToken;
//
//        $response = [
//            'user' => $user,
//            'token' => $token
//        ];
//
//        return response($response , 201);
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $fields = $request->validate([
//            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //Check Email
        $user = User::where('email' , $fields['email'])->first();

        //Check Password
        if (!$user || !Hash::check($fields['password'], $user->password))
        {
            return response([
                'message' => 'Bad Creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response , 201);
    }

    /**
     * @param Request $request
     * @return string[]
     */
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged Out'
        ];
    }
}
