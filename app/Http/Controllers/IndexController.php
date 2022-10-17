<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    public function index(Request $request){
        return view('index')->with([
            "MeetingData" => Controller::getMeetings($request),
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

    public function targetuserList($language){
        return view('users')->with([
            "userArray" =>  Controller::getTargetUsers($language),
            "loggedInUser" => Controller::getLoggedInUser()
        ]);
    }

    public function meetupList(Request $request){
        return view('meetings')->with([
            "MeetingData" => Controller::getMeetings($request),
            "loggedInUser" => Controller::getLoggedInUser()
        ]);
    }
}
