<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function userList(){
        return view('users')->with(["userArray" =>  Controller::getUsers()]);
    }
}
