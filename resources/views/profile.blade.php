@extends('layouts.main')

@section('content')
<div class="container profile">
    <h1 class="title-profile">
        My Our Pet's Profile
    </h1>
    <br />
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class=" nav-item">
            <a class="nav-link active" data-toggle="pill" href="#aboutme">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#adopter">Adopter Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#settings">Account Settings</a>
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
            <div class="text-center">
                <button type="button" class="btn btn-primary" href="#">
                    UPDATE
                </button>
            </div>
            <h4>My Address</h4>
<<<<<<< HEAD
            <!-- Disini pakein if ya, kalo gaada address dibikin kosong, kalo ada ditampilin -->
            <div class="card card-address" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Label Address</h5>
                    <p class="card-text">
                        Street, City, State, Country, ZIP Code<br />
                        Icon + Coordinat<br />
                    </p>
                    <a href="#" class="card-link">Edit</a>
                    <a href="#" class="card-link">Delete</a>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Add Address
                </button>
            </div>
=======
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>
>>>>>>> 0ae03048455a3041f7b2cc07d773a00e183a6b47
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
<<<<<<< HEAD
                                <label for="fname">Label Address</label>
                                <input type="text" id="state" name="state" placeholder="Ex: Home, Office">

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
=======
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

>>>>>>> 0ae03048455a3041f7b2cc07d773a00e183a6b47
        </div>


        <div id="adopter" class="tab-pane fade">
            <h3>Adopter Profile</h3>

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