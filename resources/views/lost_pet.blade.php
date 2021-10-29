@extends('layouts.main')

@section('content')
<!-- Kalo lokasinya kosong, redirect ke profil atau bikin modal isi address -->
<div class="container" id="loc">
    <div class="row">
        <div class="col-10">
          
            <p>{{ Request::is('Lost/change') ? $place : $address }}</p>
            
        </div>
        <div class="col">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Change Location</button>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Location</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ URL::to('Lost/change')  }}">
                    @csrf
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
                    <div id='map' style='width: 420px; height: 300px;'></div>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container mb-4">
    <div class="row text-center">
        <div class="col">
            <h1 class="title">
                Lost Pet Nearby
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://media.istockphoto.com/photos/cute-kitten-licking-glass-table-with-copy-space-picture-id1293763250?b=1&k=20&m=1293763250&s=170667a&w=0&h=zcK63xxkMVX-ca0d5laTsDxauVUMH62F71MKcbqaGnI=" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card-sl">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560807707-8cc77767d783?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=435&q=80" height="300px" class="card-img" />
                </div>

                <!-- <a class="card-action" href="#"><i class="bi bi-heart"></i></a> -->
                <div class="card-heading text-center">
                    Briya
                </div>
                <div class="card-text text-center">
                    Cat | Kitten
                </div>
                <div class="card-text text-center">
                    0.6 Km
                </div>
            </div>
        </div>

    </div>



</div>
@endsection