@extends('profile.index')
@section('profile')
<div id="aboutme" class="tab-pane fade show active">
    <h3>My Address</h3>
    <div class="underline-title"></div>
    @foreach ($user_loc as $loc)
    @if(@$loc->email == Auth::user()->email)
    <div class="card card-address" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">{{ $loc->loc_name}}</h5>
            <p class="card-text">
                {{ $loc->district}}, {{ $loc->city}}, {{ $loc->states}}, {{ $loc->zipcode}}<br />
                {{ $loc->latitude}}, {{ $loc->longitude}}<br />
            </p>
            <a href="{{ url('profile/address/edit/'. $loc->id) }}"  class="btn btn-primary btn-block" data-toggle="modal" class="card-link" data-target="#exampleModalCenter">Edit</a>
            <a href="{{ url('profile/address/destroy/'. $loc->id) }}" class="btn btn-danger btn-block" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </div>
    </div>
    </br>
    @endif
    @endforeach
    <div class="text-center m-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            + Add New Address
        </button>
    </div>
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
                <form method="post" action="address/create">
                    @csrf
                    <div class="modal-body">
                        <label for="locname">Label Address</label>
                        <input type="text" id="locname" name="locname" value="{{ $user_location->locname }}" required placeholder="Ex: Home, Office" >

                        <label for="street">Street</label>
                        <input type="text" id="street" name="street" required placeholder="Ex: Jl. Meruya Selatan No. 19">

                        <label for="City">City</label>
                        <input type="text" id="City" name="City" required placeholder="Ex: Jakarta Barat">

                        <label for="state">State</label>
                        <input type="text" id="state" name="state" required placeholder="Ex: DKI Jakarta">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                        </select>

                        <label for="ZipCode">ZIP Code</label>
                        <input type="text" id="ZipCode" name="ZipCode" required placeholder="Ex: 11620">

                        <div class="row">
                            <div class="col">
                                <!-- <label>Longitude</label> -->
                                <input type="hidden" id="long" name="long">
                            </div>
                            <div class="col">
                                <!-- <label>Latitude</label> -->
                                <input type="hidden" id="lat" name="lat">
                            </div>

                        </div>
                        <label for="map">Pin Your Location</label>
                        <div id='map' style='width: 420px; height: 300px;'></div>

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