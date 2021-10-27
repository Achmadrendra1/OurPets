@extends('profile.index')
@section('profile')
<div id="settings" class="tab-pane fade">
    <form>
        <label for="fname">Email</label>
        <input type="text" id="Email" name="Email" value="{{ Auth::User()->email }}">

        <label for="fname">Change Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

    </form>
    <div class="text-center">
        <button type="button" class="btn btn-primary">UPDATE</button>
    </div>

</div>
@endsection