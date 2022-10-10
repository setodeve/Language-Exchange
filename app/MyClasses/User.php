<?php

namespace App\MyClasses ;

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use \Faker\Factory as FakerFactory;
use Carbon\Carbon;

class User
{
    private string $userName ;
    private string $firstName ;
    private string $lastName ;
    private string $gender ;
    private string $birthday ;
    private string $nativeLanguages ;
    private string $knownLanguages ;
    private string $targetLanguages ;
    private string $currentMeetingList ;

    public function __construct($name,$firstName,$lastName,$gender,$birthday,$nativeLanguages,$knownLanguages,$targetLanguages,$currentMeetingList)
    {
        $this->userName = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->nativeLanguages = $nativeLanguages;
        $this->knownLanguages = [$knownLanguages];
        $this->targetLanguages = [$targetLanguages];
        $this->currentMeetingList = [$currentMeetingList];
    }

    private function setUserName($name) {
        $this->userName = $name;
    }

    private function setFirstName($firstname) {
        $this->firstName = $firstname;
    }

    private function setLastName($lastname) {
        $this->lastName = $lastname;
    }

    private function setGender($gender) {
        $this->gender = $gender;
    }

    private function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    private function setNativeLanguages($nativeLanguages) {
        $this->nativeLanguages = $nativeLanguages;
    }

    private function setKnownLanguages($knownLanguages) {
        $this->knownLanguages[] = $knownLanguages;
    }

    private function setTargetLanguages($targetLanguages) {
        $this->targetLanguages[] = $targetLanguages;
    }

    private function setCurrentMeetingList($currentMeetingList) {
        $this->currentMeetingList[] = $currentMeetingList;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getNativeLanguages() {
        return $this->nativeLanguages;
    }

    public function getKnownLanguages() {
        return $this->knownLanguages;
    }

    public function getTargetLanguages() {
        return $this->targetLanguages;
    }

    public function getCurrentMeetingList() {
        return $this->currentMeetingList;
    }

    public function getAge($birthday){
        return Carbon::parse($birthday)->age;
    }

}

function welcome(){
    $faker = FakerFactory::create() ;
    $male = new User($faker->name,
                    $faker->firstNameMale,
                    $faker->lastName,
                    "male",
                    $faker->date($format = 'Y-m-d', $max = 'now'),
                    "Japanese",
                    "English",
                    "English",
                    [1]
                    ) ;

    $female = new User($faker->name,
                    $faker->firstNameFemale,
                    $faker->lastName,
                    "female",
                    $faker->date($format = 'Y-m-d', $max = 'now'),
                    "English",
                    "Japanese",
                    "Japanese",
                    [1]
                    ) ;

    $meeting = new Meeting(
                    $faker->company,
                    "Mtname",
                    $faker->date($format = 'Y-m-d', $max = 'now'),
                    $faker->address,
                    "English",
                    "Japanese",
                    [$male,$female]
                ) ;
}

