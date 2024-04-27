<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Login success',
                'data' => auth()->user()
            ]);
        } else {
            // register
            $data['username'] = $request->username;
            $data['password'] = bcrypt($request->password);
            $data['name'] = $request->username;
            $data['email'] = $request->username . '@kubet.com';
            $data['balance'] = 0;

            $user = User::create($data);
            // dd($user->id);
            $user = $user->find($user->id);

            auth()->login($user);

            return response()->json([
                'status' => 'success',
                'message' => 'Login success',
                'data' => auth()->user()
            ]);
        }
    }
}
