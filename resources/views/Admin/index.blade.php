@extends('layouts.Admin')
@section('admin')
<h6 class="m-4">Admin</h6>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3> {{ Auth::user()->count() }} </h3>
                    <p> Users </p>
                </div>
                <div class="icon">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <a href="{{ url('admin/user') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> ?? </h3>
                    <p> Tips & Trick </p>
                </div>
                <div class="icon">
                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                </div>
                <a href="{{ url('admin/tips') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> ?? </h3>
                    <p> Clinic </p>
                </div>
                <div class="icon">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                </div>
                <a href="{{ url('admin/clinic') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> ?? </h3>
                    <p> Lost Pet </p>
                </div>
                <div class="icon">
                    <i class="fa fa-paw" aria-hidden="true"></i>
                </div>
                <a href="{{ url('admin/lost') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

@endsection