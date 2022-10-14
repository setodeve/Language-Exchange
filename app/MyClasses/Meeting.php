<?php

namespace App\MyClasses ;



class Meeting
{
    public string $houseUsername ;
    public string $title ;
    public string $meetDate ;
    public string $location ;
    public string $languageA ;
    public string $languageB ;
    public string $participants ;
    public int $min = 2 ;
    public int $max = 10;
    public string $placeImage ;

    public function __construct($houseUsername,$title,$meetDate,$location,$languageA,$languageB,$participants,$placeImage)
    {
        $this->houseUsername = $houseUsername ;
        $this->title = $title ;
        $this->meetDate = $meetDate ;
        $this->location = $location ;
        $this->languageA = $languageA ;
        $this->languageB = $languageB ;
        $this->participants = $participants ;
        $this->placeImage = $placeImage ;
    }

    private function sethouseUsername($houseUsername){
        $this->houseUsername = $houseUsername ;
    }

    private function settitle($title){
        $this->title = $title ;
    }

    private function setmeetDate($meetDate){
        $this->meetDate = $meetDate ;
    }

    private function setlocation($location){
        $this->location = $location ;
    }

    private function setlanguageA($languageA){
        $this->languageA = $languageA ;
    }

    private function setlanguageB($languageB){
        $this->languageB = $languageB ;
    }

    private function setparticipants($participants){
        $this->participants[] = $participants ;
    }

    private function setmax($number){
        $this->max = $number ;
    }

    private function setmin($number){
        $this->min = $number ;
    }

    private function setplaceImage($image){
        $this->placeImage = $image ;
    }

    public function gethostUsername(){
        return $this->houseUsername ;
    }

    public function gettitle(){
        return $this->title ;
    }

    public function getmeetDate(){
        return $this->meetDate ;
    }

    public function getlocation(){
        return $this->location ;
    }

    public function getlanguageA(){
        return $this->languageA ;
    }

    public function getlanguageB(){
        return $this->languageB ;
    }

    public function getparticipants(){
        return $this->participants ;
    }

    public function getmax(){
        return $this->max ;
    }

    public function getmin(){
        return $this->min ;
    }

    public function getplaceImage(){
        return $this->placeImage ;
    }
}
