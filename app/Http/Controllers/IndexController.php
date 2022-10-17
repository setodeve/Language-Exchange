<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    public function index(){

        return view('index')->with([
            "MeetingData" => Controller::getMeetings(),
            "userArray" => Controller::getUsers(),
            "loggedInUser" => Controller::getLoggedInUser()
        ]);
    }

    public function userList(){
        return view('users')->with([
            "userArray" =>  Controller::getUsers(),
            "loggedInUser" => Controller::getLoggedInUser()
        ]);
    }

    public function meetupList(){
        return view('meetings')->with([
            "MeetingData" => Controller::getMeetings(),
            "loggedInUser" => Controller::getLoggedInUser()
        ]);
    }
}
