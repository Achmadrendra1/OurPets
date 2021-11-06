@extends('admin.index')
@section('admin')
<div class="m-4">
    <div class="row justify-content-between mb-4">
        <div class="col">
            <h6>Admin/Clinic</h6>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewClinic">
                + Add Clinic
            </button>
        </div>
    </div>
    <div class="modal fade" id="NewClinic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Clinic</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="clinic/add">
                    @csrf
                    <div class="modal-body">
                        <label for="name">Clinic Name</label>
                        <input type="text" id="name" name="name_clinic">

                        <label for="address">Address</label>
                        <input type="text" id="address" name="address_clinic">

                        <label for="long">Longitude</label>
                        <input type="text" id="long" name="long_clinic">

                        <label for="lat">Latitude</label>
                        <input type="text" id="lat" name="lat_clinic">

                        <label for="info">Info</label>
                        <input type="text" id="info" name="info_clinic">

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Photo</label>
                            <input class="form-control" type="file" id="photo" name="photo" onchange="loadFile(event)">
                            </br>
                            <div class="text-center">
                                <img id="output" width="200px" />
                            </div>
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Card -->
<div class="card">
    <div class="card-body">

        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" width="200px">Clinic Name</th>
                    <th scope="col" width="200px">Address</th>
                    <th scope="col" width="100px">Long</th>
                    <th scope="col" width="100px">Lat</th>
                    <th scope="col">Info</th>
                    <th scope="col">Photo</th>
                    <th scope="col" width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clinic as $u)
                <tr>
                    <th scope="row">{{ $u -> id }}</th>
                    <td>{{ $u -> name }}</td>
                    <td>{{ $u -> address }}</td>
                    <td>{{ $u -> long }}</td>
                    <td>{{ $u -> lat }}</td>
                    <td>{{ $u -> info }}</td>
                    <td>test</td>

                    <td>
                        <button type="button" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm m-0 py-1 px-2">Delete</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <!-- Table -->

    </div>
</div>
<!-- Card -->
</div>

@endsection