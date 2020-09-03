<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;

class AuthController extends Controller
{
    //
    public function getRegisterForm(){
        return view('/register');
    }

    public function register(RegisterRequest $request){

        $data = $request->validated();
        // return $data;
      
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        return redirect('/posts');

    }
}

