<?php

namespace App\MyClasses ;

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Carbon\Carbon;
use \Faker\Factory as FakerFactory;

class Users
{
    public string $userName ;
    public string $firstName ;
    public string $lastName ;
    public string $gender ;
    public string $birthday ;
    public string $nativeLanguages ;
    public string $knownLanguages ;
    public string $targetLanguages ;
    public string $currentMeetingList ;
    public string $userImage ;

    public function __construct($name,$firstName,$lastName,$gender,$birthday,$nativeLanguages,$knownLanguages,$targetLanguages,$currentMeetingList,$userImage)
    {
        $this->userName = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->nativeLanguages = $nativeLanguages;
        $this->knownLanguages = $knownLanguages;
        $this->targetLanguages = $targetLanguages;
        $this->currentMeetingList = $currentMeetingList;
        $this->userImage = $userImage;
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

    private function setuserImage($image){
        $this->userImage = $image ;
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

    public function getuserImage(){
        return $this->userImage ;
    }

    public function getAge($birthday){
        return Carbon::parse($birthday)->age;
    }

    public static function createFakeSignedInUser(){
        $faker = FakerFactory::create();
        $LoggedInUser =  new Users(
            $faker->name(),
            $faker->firstName('male'),
            $faker->lastName,
            'male',
            '1900-01-01',
            "Japanese",
            "English",
            "Chinese",
            0,
            $faker->imageUrl($width = 150, $height = 150)
        );
        return $LoggedInUser ;
    }

}


