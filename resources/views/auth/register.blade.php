@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                <h4 class="pt-5">Join Feedler!</h4>
                <hr>
                <form action="/register" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                        <small class="text-danger">{{ $errors->first('username') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="email">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"><strong>Sign up</strong></button>
                    </div>
                </form>

                <div class="small text-muted">
                    By signing up, you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>,
                    including Cookie Use. Others will be able to find you by email or
                    phone number when provided.
                </div>
            </div>
        </div>
    </div>
@endsection
