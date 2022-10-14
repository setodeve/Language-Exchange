@extends('layouts.template')

@section('title')
    Home
@endsection

@section('contents')
    <div class='container'>
        <p class='pt-4 pb-2'>Group near Los Angeles</p>
        @for($i = 0; $i < count($MeetingData); $i++)
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                        <img class="avator-meetup" src="{{ $MeetingData[$i]->getplaceImage() }}" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Meetup in {{ $MeetingData[$i]->getlocation() }}</p>
                            <p>Language A: {{ $MeetingData[$i]->getlanguageA() }}</p>
                            <p>Language B: {{ $MeetingData[$i]->getlanguageB() }}</p>
                            <p>Capacity: {{ $MeetingData[$i]->getmax() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class='container'>
        <p class='pt-4 pb-2'>Members</p>
        @for($i = 0; $i < count($userArray); $i++)
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                        <img class="avator" src="{{ $userArray[$i]->getuserImage() }}" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>{{ $userArray[$i]->getUserName() }}</p>
                            <p>Native language: {{ $userArray[$i]->getNativeLanguages() }}</p>
                            <p>Nnown Languages: {{ $userArray[$i]->getKnownLanguages() }}</p>
                            <p>Target Languages: {{ $userArray[$i]->getTargetLanguages() }} </p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
