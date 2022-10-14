<?php

namespace App\Http\Controllers;
use \Faker\Factory as FakerFactory;
use App\MyClasses\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $faker = FakerFactory::create() ;
        $userArray = array( new User($faker->name,
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
                            )
                            );
        // dd($userArray) ;
        // print_r($userArray[0]->userName) ;
        // return view('index', compact('male','female'));
        return view('index', compact('userArray'));
    }
}
