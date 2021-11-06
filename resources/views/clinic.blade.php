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
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card border-primary m-2" style="width: 90%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <img src="../Images/foot.svg" height="50px" width="50px" />
                                </div>
                                <div class="col-8">
                                    <p class="clinic-title">Nama Klinik</p>
                                    <p class="clinic-address">Alamat</p>
                                    <img src="../Images/pin.png" height="15px" width="15px">
                                    <span class="clinic-distance">Jarak</span></img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection