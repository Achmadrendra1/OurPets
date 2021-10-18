@extends('layouts.main')

@section('content')
<div class="container profile">
    <h1 class="title-profile">
        My Our Pet's Profile
    </h1>
    <br />
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#aboutme">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#adopter">Adopter Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings">Account Settings</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="aboutme" class="tab-pane fade show active">
            <h3>About Me</h3>
            <div class="underline-title"></div>
            <form>
                <label for="fname">Name</label>
                <input type="text" id="name" name="Name" placeholder="Your Name" value="{{ Auth::User()->name }}">

                <label for="fname">Handphone</label>
                <input type="text" id="HP" name="HP" placeholder="62 xxx xxx xxx">

            </form>

            <h4>My Address</h4>
            <form>
                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="Indonesia">Indonesia</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Singapore">Singapore</option>
                </select>

                <label for="fname">State</label>
                <input type="text" id="state" name="state" placeholder="DKI Jakarta">

                <label for="fname">City</label>
                <input type="text" id="City" name="City" placeholder="Jakarta Barat">

                <label for="fname">Street</label>
                <input type="text" id="street" name="street" placeholder="Jl. Meruya Selatan No. 19">

                <label for="fname">ZIP Code</label>
                <input type="text" id="ZipCode" name="ZipCode" placeholder="11620">

            </form>
            <div id='map' style='width: 1070px; height: 400px;'></div>
            <button>S</button>
        </div>
        <div id="adopter" class="tab-pane fade">
            <h3>Adopter Profile</h3>

        </div>
        <div id="settings" class="tab-pane fade">
            <h3>Account Settings</h3>

        </div>
    </div>

</div>
@endsection