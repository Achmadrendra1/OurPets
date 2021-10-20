@extends('layouts.main')

@section('content')
<h2 class="text-center m-4">My Pet</h2>
<!-- sama kayak address ya, looping if -->
<div class="card card-mypet m-4" style="width: 95%;">
    <div class="card-body">
        <div class="row ">
            <div class="col-2">
                <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="200px" />
            </div>
            <div class="col">
                <h5 class="card-title">Pet Name</h5>
                <p class="card-text">
                    Age<br />
                    Desired<br />
                    Gender<br />
                    Breed<br />
                    Color<br />
                </p>
                <a href="#" class="card-link">Edit</a>
                <a href="#" class="card-link">Delete</a>
            </div>
        </div>
        <a href="detail" class="stretched-link"></a>
    </div>
</div>
<div class="card card-mypet m-4" style="width: 95%;">
    <div class="card-body">
        <div class="row ">
            <div class="col-2">
                <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=436&q=80" height="200px" />
            </div>
            <div class="col">
                <h5 class="card-title">Pet Name</h5>
                <p class="card-text">
                    Age<br />
                    Desired<br />
                    Gender<br />
                    Breed<br />
                    Color<br />
                </p>
                <a href="#" class="card-link">Edit</a>
                <a href="#" class="card-link">Delete</a>
            </div>
        </div>
        <a href="detail" class="stretched-link"></a>
    </div>
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
                <form>
                    <label for="fname">Pet Name</label>
                    <input type="text" id="state" name="petName">

                    <label for="fname">Type</label>
                    <select id="type" name="type">
                        <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Bird">Birds</option>
                        <option value="Rabbits">Rabbits</option>
                        <option value="Reptile">Reptile</option>
                        <option value="Fish">Fish</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="fname">Breed</label>
                    <select id="breed" name="breed">
                        <!-- <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Bird">Birds</option>
                        <option value="Rabbits">Rabbits</option>
                        <option value="Reptile">Reptile</option>
                        <option value="Fish">Fish</option>
                        <option value="Other">Other</option> -->
                        <!-- belum research -->
                    </select>
                    <div class="row">
                        <div class="col">
                            <label for="birthDate">Birth Month</label>
                            <input type="text" id="month" name="month" placeholder="Ex : May">
                        </div>
                        <div class="col">
                            <label for="fname">Birth Year</label>
                            <input type="text" id="year" name="year" placeholder="Ex : 2019">
                        </div>
                    </div>


                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Don't Know">Don't Know</option>
                    </select>

                    <label for="Color">Color</label>
                    <input type="text" id="Color" name="Color" placeholder="Ex: Black and White">

                </form>
                <label for="photo">Upload Photo</label>
                <input type="file" accept="image/*" onchange="loadFile(event)">
                <div class="text-center">
                    <img id="output" width="200px" />
                </div>

            </div>
            <div class="text-center mb-4">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection