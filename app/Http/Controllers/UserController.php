<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user)
    {
        $food = ['Aam','Jaam','Kathal','Lichu'];
        return view('profile',compact(['user','food']) );
    }
    public function welcome()
    {
        return 'Welcome to Laravel family';
    }
    public function congrats()
    {
        return view('congrats');
    }
}
