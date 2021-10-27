@extends('profile.index')
@section('profile')
<div id="aboutme" class="tab-pane fade show active">
    <h3>About Me</h3>
    <div class="underline-title"></div>
    <form>
        <label for="Name">Name</label>
        <input type="text" id="name" name="Name" placeholder="Your Name" value="{{ Auth::User()->name }}">

        <label for="Email">Email</label>
        <input type="text" disabled id="Email" name="Email" placeholder="Ex : a@ourpets.id" value="{{ Auth::User()->email }}">

        <label for="Handphone">Handphone</label>
        <input type="text" id="HP" name="HP" placeholder="62 xxx xxx xxx">

        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="birthday">Birthday</label>
        <input type="text" id="birthday" name="birthday" placeholder="YYYY - MM - DD">

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Photo</label>
            <input class="form-control" type="file" id="photo" name="photo" onchange="loadFile(event)">
            </br>
            <div class="text-center">
                <img id="output" width="200px" />
            </div>
        </div>


    </form>
    <div class="text-center m-4">
        <button type="button" class="btn btn-primary" href="#">
            UPDATE
        </button>
    </div>
</div>
@endsection