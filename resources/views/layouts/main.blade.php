<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Pet's | {{ $title }}</title>
    <link rel="icon" href="../Images/foot.svg">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <script src="../js/scripts.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Maps -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
    </svg>
    <!-- NAVBAR -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #004AAD">
        <nav class="navbar-1-3 navbar navbar-expand-lg navbar-dark p-4 px-md-4">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="../Images/logo putih.png" width="91.84" height="50" alt="LOGO">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-md-4 active" aria-current="page" href="{{ URL::to('Lost') }}">Lost Pet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="{{ URL::to('Adopt') }}">Adoption</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="{{ URL::to('Clinic') }}">Clinic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="{{ URL::to('Tips') }}">Tips & Trick</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="{{ URL::to('AboutUs') }}">About</a>
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

                            <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" type="button" href="{{ URL::to('profile') }}">Profile</a>
                                <a class="dropdown-item" type="button" href="{{ URL::to('pet') }}">My Pet</a>
                                @if (Auth::user()->is_admin == 1)
                                <a class="dropdown-item" type="button" href="{{ URL::to('admin') }}">Switch To Admin Page</a>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
                    <img src="../Images/logo putih.png" width="183.67" height="100" alt="" class="footer">
                </div>
            </div>
            <div class="row text-center">
                <p class="copyright text-white">Copyright © 2021 Our Pet’s. All Rights Reserved</p>
            </div>
        </div>
    </section>
    <!-- Akhir Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script>
        $(function() {
            var url = document.location.toString();
            if (url.match('#')) {
                console.log(url.split('#')[1]);
                $('a[href="#' + url.split('#')[1] + '"]').parent().addClass('active');
                $('#' + url.split('#')[1]).addClass('active in')
            }
            $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
                window.location.hash = e.target.hash;
            });
        });
    </script>
    <!-- Maps -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
    @include('partial.maps')
    @stack('scripts')
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>