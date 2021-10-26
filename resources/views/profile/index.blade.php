
@extends('layouts.main')

@section('content')


<div class="container profile">
    <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ Auth::user()->name }}</h5>
        <ul class="list-group">
            <li class="list-group-item">About Me</li>
            <li class="list-group-item">Address</li>
            <li class="list-group-item">Settings</li>
        </ul>
    </div>
    
    </div>
    <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Example Grati</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam omnis maxime harum unde repellat, illo consequatur officiis veritatis totam id! Optio fugit porro mollitia aut id! Nobis tenetur architecto quod.</p>
        <a href="#" class="btn btn-primary">Example Grati</a>
    </div>
    </div>
</div>
@yield('profile')

@endsection