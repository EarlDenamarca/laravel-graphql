<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Services\UserService;

class LoginController extends Controller
{
    private UserService $user_service;

    public function __construct()
    {
        $this->user_service = new UserService;
    }

    public function login( Request $request )
    {
        $user = $this->user_service->findByEmail( $request->email );

        if ( !$user ) {
            return $this->invalidRespone();
        }

        if (Hash::check($request->password, $user->password)) {
            $user->token = $user->createToken('Laravel GraphQL')->accessToken;
            return response()->json($user, 200);
        }

        return $this->invalidRespone();
    }

    public function invalidRespone()
    {
        return response()->json([
            'message' => 'Invalid Username or Password'
        ], 400);
    }
}
