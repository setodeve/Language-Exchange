<?php

use Illuminate\Support\Carbon ;

class Meeting
{
    private string $houseUsername ;
    private string $title ;
    private string $meetDate ;
    private string $location ;
    private string $languageA ;
    private string $languageB ;
    private User $participants ;
    private int $min ;
    private int $max ;


    public function __construct($houseUsername,$title,$meetDate,$location,$languageA,$languageB,$participants)
    {
        $this->houseUsername = $houseUsername ;
        $this->title = $title ;
        $this->meetDate = $meetDate ;
        $this->location = $location ;
        $this->languageA = $languageA ;
        $this->languageB = $languageB ;
        $this->participants[] = $participants ;

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

}
