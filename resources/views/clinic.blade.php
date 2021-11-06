@extends('layouts.main')

@section('content')
<h2 class="text-center m-4">Clinic Nearby You</h2>
<div class="container">
    <div class="row">
        <div class="col">
            <div id='map_clinic' style='width: 100%; height: 500px;'></div>
        </div>

        <div class="col">
            <nav class="clinic">
                <ul class="clinic">
                    @foreach ($clinic as $u)
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <span class="clinic-title">{{ $u -> name }}</span><br />
                                    <span class="clinic-address">{{ $u -> address }}</span></br>
                                    <span class="clinic-info">{{ $u -> info }}</span>
                                    <input type="hidden" id="long_clinic" value="{{ $u->long }}">
                                    <input type="hidden" id="lat_clinic" value="{{ $u->lat }}">

                                    <br /><br />
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>

    </div>
</div>
@endsection