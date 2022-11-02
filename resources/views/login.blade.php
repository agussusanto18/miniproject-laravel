@extends('layouts.base_auth')

@section('title')
Login
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
            <div class="card-body">
                <form method="post" action="{{route('login-process')}}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="username" name="username" type="text" placeholder="Username" value="{{old('username')}}"/>
                        <label for="username">Username</label>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$errors->first('username')}}
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" name="password" type="password" placeholder="Password" value="{{old('password')}}"/>
                        <label for="password">Password</label>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$errors->first('password')}}
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="remember" id="inputRememberPassword" type="checkbox" />
                        <label class="form-check-label" for="inputRememberPassword">Ingat Password</label>
                    </div>
                    <div class="d-flex align-items-center mt-4 mb-0">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{route('register')}}">Belum punya akun? Register!</a></div>
            </div>
        </div>
    </div>
</div>
@endsection