@extends('layouts.main')

@section('content')

<div class="detail m-4">
  <h1 class="title text-center">PET DETAIL</h1>
  <div class="row">
    <div class="col">
      <img src="{{ asset('storage/my_pet/'.$pet->photo) }}" alt="{{ $pet->petname }}" height="400px" width="400px">
    </div>
    <div class="col-8">
      <h3 class="name">Name : {{$pet->petname}}</h3>
      <h5 class="type">Animal Type : {{$pet->animal}}</h5>
      <h5 class="age">Age : {{$age}} Months</h5>
      <h5 class="gender">Gender : {{$pet->gender}}</h5>
      <h5 class="color">Color : {{$pet->color}}</h5>
      <br />
      <br />

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Edit Pet Data </button>
      <button type="button" class="btn btn-danger"> Delete </button>


      <div class="row justify-content-between mt-4">
        <div class="col">
          <a href="{{ URL::to('mypet')}}"><button type="button" class="btn btn-info"> Back </button></a>
        </div>
        <div class="col-4">
          <button type="button" class="btn btn-warning"> It's LOST !! </button>
          <button type="button" class="btn btn-success align-self-end"> Open Adopt </button>
        </div>
      </div>

    </div>
  </div>

</div>

@endsection