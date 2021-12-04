@extends('layouts.main')
@section('content')
<h2 class="text-center m-4">My Pet</h2>

<div class="row m-4">
    @foreach ($all_pet as $pet)
    @if ($pet->user->id == Auth::user()->id)
    <div class="col-md-3 mb-4">
        <div class="card-sl mb-3">
            <img src="{{ asset('storage/my_pet/'.$pet->photo) }}" height="300px" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {{ $pet-> petname }}</h5>
                <small class="text-muted">
                    Added On //Time Add
                </small>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="{{ url('mypet/detail/'.$pet->petid) }}" class="btn btn-primary text-decoration-none">View More</a>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>



<div class="text-center m-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Add A Pet
    </button>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add A Pet</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="pet/add_pet" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="petName">Pet Name</label>
                        <input type="text" id="state" name="petName">
                    </div>

                    <div class="form-group">
                        <label for="animal">Type Animal</label>
                        <select id="animal" name="animal">
                            <option value="Cat">Cat</option>
                            <option value="Dog">Dog</option>
                            <option value="Bird">Birds</option>
                            <option value="Rabbits">Rabbits</option>
                            <option value="Reptile">Reptile</option>
                            <option value="Fish">Fish</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="breed">Breed</label>
                        <select id="breed" name="breed">
                            <option value="Cat">Cat</option>
                            <option value="Dog">Dog</option>
                            <option value="Bird">Birds</option>
                            <option value="Rabbits">Rabbits</option>
                            <option value="Reptile">Reptile</option>
                            <option value="Fish">Fish</option>
                            <option value="Other">Other</option>
                            <!-- belum research -->
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="birthDate">Date Birth</label>
                                <input type="date" class="form-control" id="date_birth" name="date_birth" placeholder="Ex : May">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Don't Know">Don't Know</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Color">Color</label>
                        <input type="text" id="Color" name="Color" placeholder="Ex: Black and White">
                    </div>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection