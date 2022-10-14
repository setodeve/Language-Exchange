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

        <title>@yield('title')</title>
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
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
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

        @yield('contents')

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
