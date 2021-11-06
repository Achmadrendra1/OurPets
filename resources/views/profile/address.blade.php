@extends('profile.index')
@section('profile')
<div id="aboutme" class="tab-pane fade show active">
    <h3>My Address</h3>
    <div class="underline-title"></div>
    @foreach ($user_loc as $loc)
    <div class="card card-address" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">{{ $loc->loc_name}}</h5>
            <p class="card-text">
                {{ $loc->street}}, {{ $loc->city}}, {{ $loc->states}}, {{ $loc->zipcode}}<br />
                {{ $loc->latitude}}, {{ $loc->longitude}}<br />
            </p>
            <a href="{{ url('profile/address/edit/'. $loc->id) }}"  class="btn btn-primary btn-block" data-toggle="modal" class="card-link" data-target="#EditAddress{{ $loc->id }}">Edit</a>
            <a href="{{ url('profile/address/destroy/'. $loc->id) }}" class="btn btn-danger btn-block" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </div>
    </div>
    <div class="modal fade" id="EditAddress{{ $loc->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('profile/address/update/'. $loc->id) }}">
                    @csrf
                    <div class="modal-body">
                        <label for="locname">Label Address</label>
                        <input type="text" id="locname" value="{{ $loc->loc_name }}" name="loc_name" required placeholder="Ex: Home, Office" >

                        <label for="street">Street</label>
                        <input type="text" id="street" value="{{ $loc->street }}" name="street" required placeholder="Ex: Jl. Meruya Selatan No. 19">

                        <label for="City">City</label>
                        <input type="text" id="City" value="{{ $loc->city }}" name="City" required placeholder="Ex: Jakarta Barat">

                        <label for="state">State</label>
                        <input type="text" id="state" value="{{ $loc->states }}" name="states" required placeholder="Ex: DKI Jakarta">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="{{ $loc->country }}">{{ $loc->country }}</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                        </select>

                        <label for="ZipCode">ZIP Code</label>
                        <input type="text" id="ZipCode" value="{{ $loc->zipcode }}" name="ZipCode" required placeholder="Ex: 11620">

                        <div class="row">
                            <div class="col">
                                <!-- <label>Longitude</label> -->
                                <input type="hidden" value="{{ $loc->longitude }}" id="long_edit" name="longitude">
                            </div>
                            <div class="col">
                                <!-- <label>Latitude</label> -->
                                <input type="hidden" value="{{ $loc->latitude }}" id="lat_edit" name="latitude">
                            </div>

                        </div>
                        <label for="map">Pin Your Location</label>
                        <div id='map_edit' style='width: 420px; height: 300px;'></div>

                    </div>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </br>
    @endforeach
    <div class="text-center m-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NewAddress">
            + Add New Address
        </button>
    </div>
    <!-- Disini pakein if ya, kalo gaada address dibikin kosong, kalo ada ditampilin -->
    <div class="modal fade" id="NewAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="address/create">
                    @csrf
                    <div class="modal-body">
                        <label for="locname">Label Address</label>
                        <input type="text" id="locname" name="locname_add" required placeholder="Ex: Home, Office" >

                        <label for="street">Street</label>
                        <input type="text" id="street" name="street_add" required placeholder="Ex: Jl. Meruya Selatan No. 19">

                        <label for="City">City</label>
                        <input type="text" id="City" name="City_add" required placeholder="Ex: Jakarta Barat">

                        <label for="state">State</label>
                        <input type="text" id="state" name="state_add" required placeholder="Ex: DKI Jakarta">

                        <label for="country">Country</label>
                        <select id="country" name="country_add">
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                        </select>

                        <label for="ZipCode">ZIP Code</label>
                        <input type="text" id="ZipCode" name="ZipCode_add" required placeholder="Ex: 11620">

                        <div class="row">
                            <div class="col">
                                <!-- <label>Longitude</label> -->
                                <input type="text" id="long" name="long_add">
                            </div>
                            <div class="col">
                                <!-- <label>Latitude</label> -->
                                <input type="text" id="lat" name="lat_add">
                            </div>

                        </div>
                        <label for="map">Pin Your Location</label>
                        <div id='map_add' style='width: 420px; height: 300px;'></div>

                    </div>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
