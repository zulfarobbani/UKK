<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //login
    public function tampilLogin(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed');
    }
    
    
    //register
    public function tampilRegister(){
        return view('register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
             
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $role =  $request->role;
        
        $query = User::create([
            'name' => $validated['nama'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role_id' => $role
        ]);
        
       return redirect()->route('login');
    } 

    //logout
    public function logout(Request $request){
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');

    }
}
