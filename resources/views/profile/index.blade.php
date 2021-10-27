@extends('layouts.main')

@section('content')


<div class="container profile">
    <div class="row">
        <div class="col">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    <ul class="list-group">

                        <li class="list-group-item {{ Request::is('profile/about') ? 'active' : null }}"><a href="{{ url('profile/about') }}">About Me</a></li>
                        <li class="list-group-item {{ Request::is('profile/address') ? 'active' : null }}"><a href="{{ url('profile/address') }}">My Address</a></li>
                        <li class="list-group-item {{ Request::is('profile/settings') ? 'active' : null }}"><a href="{{ url('profile/settings') }}">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            @yield('profile')
        </div>
    </div>

</div>
@endsection