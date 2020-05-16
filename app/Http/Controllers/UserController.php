<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
//    public function index($user = 'Kawsar')
//    {
//        return 'I am from Controller: '.$user;
//    }
//    public function index($user,$age)
//    {
//        if($age > 18){
//            return 'Welcome Mr. '.$user;
//        }else{
//            return 'You are not allowed';
//        }
//
//    }
//    public function index($user)
//    {
//        return view('profile',compact('user') );
//    }
//    public function index($user)
//    {
//        return view('profile',compact('user') );
//    }
    public function index($user)
    {
        $food = ['Aam','Jaam','Kathal','Lichu'];
        return view('profile',compact(['user','food']) );
    }
    public function welcome()
    {
        return view('welcome');
    }
}
