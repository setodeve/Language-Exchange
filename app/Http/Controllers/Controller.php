<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\MyClasses\Users;
use App\Models\User;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUsers(){
        $users = User::get() ;
        $userArray = array() ;
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
}
