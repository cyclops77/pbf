<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('public.login.index');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/list-pendaftar');
    	}
    	return 'Password Salah COK';
    }
    public function logout()
    {
        Auth::logout();
        return '';
    }
}
