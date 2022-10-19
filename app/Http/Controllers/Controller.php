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
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUsers(){
        $userArray = [] ;
        $loggedInUser = $this->getLoggedInUser() ;
        $users = User::where('knownLanguages', '=', $loggedInUser->targetLanguages)
        ->orWhere('targetLanguages', '=', $loggedInUser->targetLanguages)->get();
        for($i = 0; $i < count($users); $i++){
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
        return $userArray ;
    }

    public function getMeetings(Request $request){
        $loggedInUser = $this->getLoggedInUser() ;
        $MeetingData = [];

        if(!$request->exists('languageA') && !$request->exists('languageB') &&
           !$request->exists('min') && !$request->exists('max')){
            $meetings = Meeting::where('languageA', '=', $loggedInUser->targetLanguages)
            ->orWhere('languageB', '=', $loggedInUser->targetLanguages)->get();
        }else{
            $lanA = $request->query('languageA') ;
            $lanB = $request->query('languageB') ;
            $min = $request->query('min') ;
            $max = $request->query('max') ;
            $meetings = Meeting::where('languageA', '=', $lanA)
            ->orWhere('languageB', '=', $lanB)
            ->Where('min', '=', $min)
            ->Where('max', '=', $max)->get();
        }

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
