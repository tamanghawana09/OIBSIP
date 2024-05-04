<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
    public function signup(Request $request){
        try{
            $validatedData = $request->validate([
                'fullname' => 'required|string',
                'email' => 'required|email',
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
            $user = new User();
            $user->fullname=$validatedData['fullname'];
            $user->email=$validatedData['email'];
            $user->username=$validatedData['username'];
            $user->password =bcrypt($validatedData['password']);
            $user->save();

            return redirect(route('login'));

        }catch(\Exception $e){
            return back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function signin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect(route('index'));
        }
    }
}
