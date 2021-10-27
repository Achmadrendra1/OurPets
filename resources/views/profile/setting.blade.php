@extends('profile.index')
@section('profile')
<div id="settings" class="tab-pane fade show active">
    <h3>Change Password</h3>
    <div class="underline-title"></div>
    <form action="settings/save" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
        <div class="row ">
            <div class="col-md-12">
                <div class="main-card mb-3  card">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="current_password">Old password</label>
                                    <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required placeholder="Enter current password">
                                    @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="new_password ">new password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Enter the new password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-3">
                                    <label for="confirm_password">confirm password</label>
                                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" required placeholder="Enter same password">
                                    @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-4 ml-2">
                                <button type="submit" class="btn btn-primary" id="formSubmit">Update Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection