<?php

namespace App\Http\Controllers;
use \Faker\Factory as FakerFactory;
use App\MyClasses\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $faker = FakerFactory::create() ;
        $male = new User($faker->name,
                        $faker->firstNameMale,
                        $faker->lastName,
                        "male",
                        $faker->date($format = 'Y-m-d', $max = 'now'),
                        "Japanese",
                        "English",
                        "English",
                        1
                        ) ;

        return view('index', $male);
    }
}
