<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Pet's | {{ $title }}</title>
    <link rel="icon" href="Images\foot.svg">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Maps -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
    <!-- NAVBAR -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #004AAD">
        <nav class="navbar-1-3 navbar navbar-expand-lg navbar-dark p-4 px-md-4">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="Images/logo putih.png" width="91.84" height="50" alt="LOGO">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-md-4 active" aria-current="page" href="Lost">Lost Pet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="Adopt">Adoption</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="Clinic">Clinic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="Tips">Tips & Trick</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="About">About</a>
                        </li>
                    </ul>

                    <div class="d-flex">
                        @guest
                        @if (Route::has('login'))
                        <a class="btn btn-login text-white" href="{{ route('login') }}">Login</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="btn btn-register btn-fill text-white" href="{{ route('register') }}">Register</a>
                        @endif

                        @else
                        <div class="d-flex">

                            <a class="btn btn-login text-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" type="button" href="profile">Profile</a>
                                <a class="dropdown-item" type="button" href="pet">My Pet</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endguest
                    </div>


                </div>
            </div>
        </nav>
    </section>
    <!--Akhir NAVBAR  -->
    @yield('content')
    <!-- Footer -->
    <section class="footer">

        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="Images/logo putih.png" width="183.67" height="100" alt="" class="footer">
                </div>
            </div>
            <div class="row text-center">
                <p class="copyright text-white">Copyright © 2021 Our Pet’s. All Rights Reserved</p>
            </div>
        </div>
    </section>
    <!-- Akhir Footer -->
    <!-- Maps center: '-6.209391837461502, 106.73858120477016'-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWNobWFkcmVuZHJhMSIsImEiOiJja3VqdXlwZnkzMXh5MnZuemY0dXlxajd3In0.UI_gQ4TAo_CwXdZVduEIxQ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [106.73858120477016, -6.209305105318441], // starting position
            zoom: 13 // starting zoom
        });

        // Add zoom and rotation controls to the map.
        map.addControl(new mapboxgl.NavigationControl());
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>