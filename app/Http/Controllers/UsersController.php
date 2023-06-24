<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    //
    function loginTo(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ]);
     //checking if the user exist in our database 
        $user = User::where('email', $request->email)->first();
     //if not the user and the matching eamil return response error
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        // return $user->createToken($request->name)->plainTextToken;
        $token = $user->createToken($request->name)->plainTextToken;
        $response = [
            'user'=>$user,
            'token'=>$token,
        ];
        return response($response,202);
    }
    public function GetUsersData()
    {
        return User::all();
    }
}
