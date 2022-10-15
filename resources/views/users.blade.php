@extends('layouts.template')

@section('title')
    UserList
@endsection

@section('contents')
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
