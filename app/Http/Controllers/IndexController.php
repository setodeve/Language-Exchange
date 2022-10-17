<?php

namespace App\Http\Controllers;
use \Faker\Factory as FakerFactory;
use App\MyClasses\Meeting;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    public $userArray  = array() ;

    public function index(){
        $faker = FakerFactory::create() ;

        $MeetingData = array(new Meeting(
            "RoomA",
            "Meet Up!!",
            $faker->date($format = 'Y-m-d', $max = 'now'),
            $faker->state,
            "English",
            "Japanese",
            "User",
            $faker->imageUrl($width = 300, $height = 150)
        )) ;

        return view('index')->with([
            "MeetingData" => $MeetingData,
            "userArray" => Controller::getUsers()
        ]);
    }

    public function getUserInfo(){
        return $this->userArray ;
    }
}
