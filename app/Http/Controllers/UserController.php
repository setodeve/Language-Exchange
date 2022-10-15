<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController ;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function userList(){
        // $instance = new IndexController ;
        $userArray = IndexController::getUserInfo() ;
//usermodel作成後　修正
        dd($userArray) ;
        // return view('users',compact('userArray')) ;
    }
}
