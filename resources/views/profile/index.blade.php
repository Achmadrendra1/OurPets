@extends('layouts.main')

@section('content')

<div class="container profile">
    <div class="row">
        <div class="col-4">
            <div class="text-center m-4">
                @if(Auth::user()->photo)
                <img src=" {{ asset('storage/' . $pet->photo) }} " />
                @else
                <img src="../Images/profile.jpg" width="40%" />
                @endif
                <h5 class="title">{{ Auth::user()->name }}</h5>
            </div>

            <nav class="nav flex-column nav-pills">

                <li class="nav-item">
                    <a class="nav-link px-md-4 {{ Request::is('profile') ? 'active' : null }}" href="{{ url('profile') }}">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-4 {{ Request::is('profile/address') ? 'active' : null }}" href="{{ url('profile/address') }}">My Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-md-4 {{ Request::is('profile/settings') ? 'active' : null }}" href="{{ url('profile/settings') }}">Change Password</a>
                </li>

            </nav>

        </div>
        <div class="col-8">
            @yield('profile')
        </div>
    </div>

</div>
@endsection