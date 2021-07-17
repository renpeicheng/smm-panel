@extends('layouts.auth')

@section('content')
<h3 class="text-center">Sign In</h3>
<div class="login-form">
    <div class="form-group form-floating-label">
        <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
        <label for="username" class="placeholder">Username</label>
    </div>
    <div class="form-group form-floating-label">
        <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
        <label for="password" class="placeholder">Password</label>
        <div class="show-password">
            <i class="flaticon-interface"></i>
        </div>
    </div>
    <div class="row form-sub m-0">
        <div class="col col-md-6">
        </div>
        <div class="col col-md-6 login-forget">
            <a href="#" class="link">Forget Password ?</a>
        </div>
    </div>
    <div class="form-action">
        <a href="#" class="btn btn-primary btn-rounded btn-login">Sign In</a>
    </div>
    <div class="login-account">
        <span class="msg">Don't have an account yet ?</span>
        <a href="register" class="link">Sign Up</a>
    </div>
</div>
@endsection
