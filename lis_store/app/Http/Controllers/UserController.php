<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use DB;

class UserController extends Controller
{
    public function getSignup() {
    	return view('user.signup');
    }

   

    public function postSignup(Request $request) {
    	$this->validate($request, [
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:6'
    	]);

    	$user = new User([
    		'email'=> $request ->input('email'),
    		'password'=> bcrypt($request->input ('password'))
    	]);
    	$user->save();

        Auth::login($user);



    	return redirect()->route('user.index');


    }

    public function getSignin() {
        return view ('user.signin');
    }

    public function postSignin(Request $request) {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
    
            return redirect()->route('product.index');
        }
        return redirect()->back();
    }

   
    
    public function logout(Request $request){
    return redirect()->route('product.index')->with(Auth::logout());
}
}
