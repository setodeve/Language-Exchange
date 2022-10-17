<?php

namespace App\Http\Controllers;
use \Faker\Factory as FakerFactory;
use App\MyClasses\Users;
use App\MyClasses\Meeting;
use Illuminate\Http\Request;
use App\Models\User;
class IndexController extends Controller
{
    public $userArray  = array() ;

    public function index(){
        $faker = FakerFactory::create() ;
        $users = User::get() ;
        $userArray = array() ;
        for($i = 0; $i < count($users); $i++){
            // echo $users[$i] ;
            $userArray[] =
                new Users(
                    $users[$i]->userName,
                    $users[$i]->firstName,
                    $users[$i]->lastName,
                    $users[$i]->gender,
                    $users[$i]->birthday,
                    $users[$i]->nativeLanguages ,
                    $users[$i]->knownLanguages ,
                    $users[$i]->targetLanguages ,
                    $users[$i]->currentMeetingList,
                    $users[$i]->userImage
                );
        }
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
            "userArray" => $userArray
        ]);
    }

    public function getUserInfo(){
        return $this->userArray ;
    }
}
