
@extends('layouts.main')

@section('content')

<div class="container profile">
    <h1 class="title-profile">
        
    {{ Auth::user()->name }}'s Profile
    </h1>
    <br />
        <ul class="nav nav-pills" id="tab" role="tablist">
            <li class=" nav-item">
                <a class="nav-link m-2 active" href="#aboutme" data-toggle="pill">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link m-2" href="#address" data-toggle="pill">MyAddress</a>
            </li>
            <li class="nav-item">
                <a class="nav-link m-2 " href="#settings" data-toggle="pill">Account Settings</a>
            </li>
        </ul>
    </div>

</div>

@endsection