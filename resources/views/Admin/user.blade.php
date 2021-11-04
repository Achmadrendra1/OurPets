@extends('admin.index')
@section('admin')
<div class="m-4">
    <div class="row justify-content-between mb-4">
        <div class="col">
            <h6>Admin/User</h6>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-primary btn-sm m-0 py-1 px-2 mr-1">Add User</button>
        </div>
    </div>


    <!-- Card -->
    <div class="card">
        <div class="card-body">

            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    <tr>
                        <th scope="row">{{ $u -> id }}</th>
                        <td>{{ $u -> email }}</td>
                        <td>{{ $u -> name }}</td>
                        @if ($u -> is_admin == 1)
                        <td>Admin</td>
                        @else
                        <td>User</td>
                        @endif
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