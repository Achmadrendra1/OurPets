@extends('admin.index')
@section('admin')
<div class="m-4">
    <div class="row justify-content-between mb-4">
        <div class="col">
            <h6>Admin/Clinic</h6>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Add Clinic</button>
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
                        <th scope="col">Clinic Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Long</th>
                        <th scope="col">Lat</th>
                        <th scope="col">Info</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                        <td>
                            <button type="button" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm m-0 py-1 px-2">Delete</button>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
            <!-- Table -->

        </div>
    </div>
    <!-- Card -->
</div>

@endsection