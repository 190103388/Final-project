<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
    	$user= User::where(['email'=>$req->email])->first();
    	// return $user->password;
    	if (!$user || !Hash::check($req->password,$user->password)) {
    		return "Username of password is not mached";
    	}else{
    		$req->session()->put('user',$user);
    		return redirect('/');
    	}
    }
    function register(Request $req){
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
       
        return redirect('/login');
     }

    //  static function index(Request $req)
    // {
    //     return $req->file('file')->store('docs');
    // }
}
