@extends('layouts.main')

@section('content')

<div class="detail m-4">
  <h1 class="title text-center">PET DETAIL</h1>
  <div class="row">
    <div class="col">
      <img src="{{ asset('storage/my_pet/'.$pet->photo) }}" alt="{{ $pet->petname }}" height="400px" width="400px">
    </div>
    <div class="col-8">
      <p class="name">Name : {{$pet->petname}}</p>
      <p class="name">Animal Type : {{$pet->animal}}</p>
      <p class="name">Age : {{$age}} Months</p>
      <p class="name">Gender : {{$pet->gender}}</p>
      <p class="name">Color : {{$pet->color}}</p>
      <br />
      <br />

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Edit Pet Data </button>
      <button type="button" class="btn btn-danger"> Delete </button>
      <a href="{{ URL::to('mypet')}}"><button type="button" class="btn btn-info"> Back </button></a>
      <br /><br />
      <button type="button" class="btn btn-warning"> This Pet It's LOST !! </button>
    </div>
  </div>

</div>

@endsection