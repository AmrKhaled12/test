<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function check(Request $request){
        $user =User::where(['name'=>$request->input('username'),'password'=>$request->input('pass')])->first();
        $user =User::where(['name'=>$request->input('username'),'password'=>$request->input('pass')])->first();
        if(isset($user)){
        setcookie('name',$user['name']);
        setcookie('pass',$user['password']);
        if($request->input('username')==$_COOKIE['name'] and $request->input('pass')==$_COOKIE['pass']){
            echo "done";
        }
        else{
            echo "error";
        }

    }
        else{
        echo'error';
        }
        
        


    }

}
