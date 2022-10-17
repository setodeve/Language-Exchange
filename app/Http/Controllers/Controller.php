<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\MyClasses\Users;
use App\Models\User;
use App\MyClasses\Meetings;
use App\Models\Meeting;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUsers(){
        $users = User::get() ;
        $userArray = array() ;
        $loggedInUser = $this->getLoggedInUser() ;
        for($i = 0; $i < count($users); $i++){
            if($users[$i]->targetLanguages == $loggedInUser->targetLanguages ||
               $users[$i]->knownLanguages == $loggedInUser->targetLanguages)
            {
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
        }
        return $userArray ;
    }

    public function getMeetings(){
        $meetings = Meeting::get() ;
        $MeetingData = array();
        for($i = 0; $i < count($meetings); $i++){
            $MeetingData[] =
                new Meetings(
                    $meetings[$i]->houseUsername,
                    $meetings[$i]->title,
                    $meetings[$i]->meetDate,
                    $meetings[$i]->location,
                    $meetings[$i]->languageA,
                    $meetings[$i]->languageB,
                    $meetings[$i]->participants,
                    $meetings[$i]->placeImage
                ) ;
        }
        return $MeetingData ;
    }

    public function getLoggedInUser(){
        return Users::createFakeSignedInUser();
    }

}
