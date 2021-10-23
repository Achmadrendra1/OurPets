@extends('layouts.main')

@section('content')
<div class="container profile">
    <h1 class="title-profile">
        {{ Auth::user()->name }}'s Profile
    </h1>
    <br />
    <ul class="nav nav-pills" id="tab" role="tablist">
        <li class=" nav-item">
            <a class="nav-link active m-2" data-toggle="pill" href="#aboutme">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link m-2" data-toggle="pill" href="#address">MyAddress</a>
        </li>
        <li class="nav-item">
            <a class="nav-link m-2" data-toggle="pill" href="#settings">Account Settings</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="aboutme" class="tab-pane fade show active">
            <h3>About Me</h3>
            <div class="underline-title"></div>
            <form>
                <label for="Name">Name</label>
                <input type="text" id="name" name="Name" placeholder="Your Name" value="{{ Auth::User()->name }}">

                <label for="Email">Email</label>
                <input type="text" id="Email" name="Email" placeholder="Ex : a@ourpets.id" value="{{ Auth::User()->email }}">

                <label for="Handphone">Handphone</label>
                <input type="text" id="HP" name="HP" placeholder="62 xxx xxx xxx">

                <label for="gender">Gender</label>
                <select id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label for="birthday">Birthday</label>
                <input type="text" id="birthday" name="birthday" placeholder="YYYY - MM - DD">

                <label for="bio">BIO</label>
                <textarea name="bio" id="bio" cols="30" rows="10"></textarea>


            </form>
            <div class="text-center">
                <button type="button" class="btn btn-primary" href="#">
                    UPDATE
                </button>
            </div>
        </div>

        <div id="address" class="tab-pane fade">
            <form method="POST" action="">
                <h3>My Address</h3>
                <div class="underline-title"></div>
                <div class="text-center m-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        + Add New Address
                    </button>
                </div>
                @foreach($user_location as $loc)
                @if($loc->userid == Auth::user()->name)
                <div class="card card-address" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $loc->loc_name}}</h5>
                        <p class="card-text">
                        {{ $loc->states}} ,{{ $loc->city}}, {{ $loc->district}} , {{ $loc->zipcode}}<br />
                        {{ $loc->latitude}} + {{ $loc->longitude}}<br />
                        </p>
                        <a href="{{ Request::url() && $loc->id }}" class="card-link">Edit</a>
                        <a href="{{ Request::url() && $loc->id }}" class="card-link">Delete</a>
                    </div>
                </div>
                </br>
                @endif
                @endforeach
                <!-- Disini pakein if ya, kalo gaada address dibikin kosong, kalo ada ditampilin -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Address</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <label for="fname">Label Address</label>
                                    <input type="text" id="state" name="locname" placeholder="Ex: Home, Office">

                                    <label for="fname">Street</label>
                                    <input type="text" id="street" name="street" placeholder="Ex: Jl. Meruya Selatan No. 19">

                                    <label for="fname">City</label>
                                    <input type="text" id="City" name="City" placeholder="Ex: Jakarta Barat">

                                    <label for="fname">State</label>
                                    <input type="text" id="state" name="state" placeholder="Ex: DKI Jakarta">

                                    <label for="country">Country</label>
                                    <select id="country" name="country">
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapore">Singapore</option>
                                    </select>

                                    <label for="fname">ZIP Code</label>
                                    <input type="text" id="ZipCode" name="ZipCode" placeholder="Ex: 11620">

                                    <div class="row">
                                        <div class="col">
                                            <!-- <label>Longitude</label> -->
                                            <input type="hidden" id="long">
                                        </div>
                                        <div class="col">
                                            <!-- <label>Latitude</label> -->
                                            <input type="hidden" id="lat">
                                        </div>

                                    </div>

                                </form>
                                <label for="map">Pin Your Location</label>
                                <div id='map' style='width: 420px; height: 300px;'></div>

                            </div>
                            <div class="text-center mb-4">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id="settings" class="tab-pane fade">
            <form>
                <label for="fname">Email</label>
                <input type="text" id="Email" name="Email" value="{{ Auth::User()->email }}">

                <label for="fname">Change Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            </form>
            <div class="text-center">
                <button type="button" class="btn btn-primary">UPDATE</button>
            </div>

        </div>

    </div>

</div>

@endsection