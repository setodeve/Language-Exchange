<?php

namespace App\Http\Controllers;
use \Faker\Factory as FakerFactory;
use App\MyClasses\User;
use App\MyClasses\Meeting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $userArray ;

    public function index(){
        $faker = FakerFactory::create() ;
        $this->userArray = array(
            new User($faker->name,
            $faker->firstNameMale,
            $faker->lastName,
            "male",
            $faker->date($format = 'Y-m-d', $max = 'now'),
            "Japanese",
            "English",
            "English",
            1,
            $faker->imageUrl($width = 150, $height = 150)
        ) ,
            new User($faker->name,
            $faker->firstNameFemale,
            $faker->lastName,
            "female",
            $faker->date($format = 'Y-m-d', $max = 'now'),
            "English",
            "Japanese",
            "Japanese",
            1,
            $faker->imageUrl($width = 150, $height = 150)
        ),
        );
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
            "userArray" => $this->userArray
        ]);
    }

    public static function getUserInfo(){
        // return $this->userArray ;
    }
}
