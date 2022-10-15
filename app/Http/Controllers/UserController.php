<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\IndexController ;
class UserController extends Controller
{
    public function userList(){
        $instance = new IndexController() ;
        $userArray = $instance->getUserInfo() ;
        return view('user',compact('userArray')) ;
    }
}
