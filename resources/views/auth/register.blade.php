@extends('layouts.auth')

@section('content')
<h3 class="text-center">Sign Up</h3>
<div class="login-form">
    <div class="form-group form-floating-label">
        <input  id="fullname" name="fullname" type="text" class="form-control input-border-bottom" required>
        <label for="fullname" class="placeholder">Fullname</label>
    </div>
    <div class="form-group form-floating-label">
        <input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
        <label for="email" class="placeholder">Email</label>
    </div>
    <div class="form-group form-floating-label">
        <input  id="passwordsignin" name="passwordsignin" type="password" class="form-control input-border-bottom" required>
        <label for="passwordsignin" class="placeholder">Password</label>
        <div class="show-password">
            <i class="flaticon-interface"></i>
        </div>
    </div>
    <div class="form-group form-floating-label">
        <input  id="confirmpassword" name="confirmpassword" type="password" class="form-control input-border-bottom" required>
        <label for="confirmpassword" class="placeholder">Confirm Password</label>
        <div class="show-password">
            <i class="flaticon-interface"></i>
        </div>
    </div>
    <div class="row form-sub m-0">
        <div class="col">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
            </div>
        </div>
    </div>
    <div class="form-action">
        <a href="login" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
        <a href="#" class="btn btn-primary btn-rounded btn-login">Sign Up</a>
    </div>
</div>
@endsection
