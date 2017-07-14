@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                <h4 class="pt-5">Login</h4>
                <hr>
                <form action="/login" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                        <small class="text-danger">{{ $errors->first('username') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"><strong>Login</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
