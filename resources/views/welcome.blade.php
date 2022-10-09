<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">

        <title>Home</title>
    </head>
    <body>
        <!-- navigation start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary px-md-5 text-white">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">Language Exchange</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Meetup</a>
                        </li>

                    </ul>
                </div>
                <p class='d-none d-lg-block'>username: recursion</p>
            </div>
        </nav>
        <!-- navigation end -->

        <div class='container'>
            <p class='pt-4 pb-2'>Group near Los Angeles</p>

            <!-- meetup1 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                        <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/10/16/13/44/young-woman-1745173__340.jpg" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Meetup in Long Beach</p>
                            <p>Language A: Japanese</p>
                            <p>Language B: English</p>
                            <p>Capacity: 10</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meetup1 end -->

            <!-- meetup2 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                        <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/08/16/19/07/los-angeles-1598750__340.jpg" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Meetup in DT Los Angeles</p>
                            <p>Language A: Korean</p>
                            <p>Language B: English</p>
                            <p>Capacity: 16</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meetup2 end -->

            <!-- meetup3 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                        <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/08/16/17/32/hollywood-sign-1598473__340.jpg" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Meetup in HollyWood</p>
                            <p>Language A: English</p>
                            <p>Language B: Spanish</p>
                            <p>Capacity: 8</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meetup3 end -->


            <!-- meetup4 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                        <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2015/10/12/22/01/lake-985226__340.jpg" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Meetup in Irvine</p>
                            <p>Language A: Japanese</p>
                            <p>Language B: Spanish</p>
                            <p>Capacity: 4</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meetup4 end -->


            <!-- meetup5 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                        <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/09/09/18/25/usa-1657783__340.jpg" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Meetup in Santa Monica</p>
                            <p>Language A: English</p>
                            <p>Language B: Spanish</p>
                            <p>Capacity: 20</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- meetup5 end -->

        </div>

        <div class='container'>
            <p class='pt-4 pb-2'>Members</p>

            <!-- user1 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                        <img class="avator" src="https://i.pravatar.cc/150?img=2" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Shannon B.</p>
                            <p>Native language: Japanese</p>
                            <p>Nnown Languages: Chinese</p>
                            <p>Target Languages: English, French </p>
                        </div>
                    </div>
                </div>
            </div>
             <!-- user1 end -->

            <!-- user2 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                        <img class="avator" src="https://i.pravatar.cc/150?img=12" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Robert</p>
                            <p>Native language: English</p>
                            <p>Nnown Languages: None</p>
                            <p>Target Languages: Japanese </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user2 end -->

            <!-- user3 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                        <img class="avator" src="https://i.pravatar.cc/150?img=51" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Toby T.</p>
                            <p>Native language: Spanish</p>
                            <p>Nnown Languages: None</p>
                            <p>Target Languages: Japanese </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user3 end -->


            <!-- user4 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                        <img class="avator" src="https://i.pravatar.cc/150?img=35" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Izzi Z.</p>
                            <p>Native language: Spanish</p>
                            <p>Nnown Languages: English</p>
                            <p>Target Languages: Japanese</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user4 end -->


            <!-- user5 start -->
            <div class="card col-lg-8 my-1">
                <div class="card-body d-flex px-0">
                    <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                        <img class="avator" src="https://i.pravatar.cc/150?img=25" alt="">
                    </div>

                    <div class='d-flex align-items-center'>
                        <div>
                            <p class='fw-bold'>Chang K.</p>
                            <p>Native language: Chinese</p>
                            <p>Nnown Languages: Japanese</p>
                            <p>Target Languages: English</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user5 end -->
        </div>


        <div class='d-flex mt-5 bg-primary text-white pb-2'>
            <div class='col-6 px-5 pt-3'>
                <p>Meetup All Rights Reserved 2021</p>
            </div>

            <div class='col-6 pt-2 d-flex justify-content-end px-5'>
                <div>
                    <i class="fab fa-twitter fa-2x px-1"></i>
                    <i class="fab fa-instagram fa-2x px-1"></i>
                    <i class="fab fa-pinterest fa-2x px-1"></i>
                    <i class="fab fa-facebook fa-2x px-1"></i>
                </div>
            </div>

        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>
