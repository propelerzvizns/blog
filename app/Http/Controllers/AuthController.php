<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
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
            'password' => bcrypt($data['password'])
        ]);

        

        return redirect('/posts');

    }

    public function getLoginForm(){
        return view('/login');
    }

    public function login(Request $request){

        $email = $request->get('email', '');
        $password = $request->get('password', '');
        if(auth()->attempt([
            'email' => $email,
            'password' => $password
        ])){
            return redirect('/posts');
        }
        return view('login', ['loginFailed' => true]);

        $user = User::where('email', $email)->first();

        if($user && $user->password == $password) {
            auth()->login($user);
            return redirect('/posts');
        }
        return redirect('login');
    }

    public function logout(){
        auth()->logout();
        return redirect('/posts');
    }
}

