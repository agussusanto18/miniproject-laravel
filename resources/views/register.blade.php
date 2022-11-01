@extends('layouts.base_auth')

@section('title')
Register
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Buat Akun</h3></div>
            <div class="card-body">
                <form method="post" action="{{route('register-process')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" type="text" placeholder="Masukan nama" value="{{old('name')}}" />
                                <label for="name">Nama</label>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$errors->first('name')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control {{$errors->has('nim') ? 'is-invalid' : ''}}" id="nim" name="nim" type="text" placeholder="Masukan nim" value="{{old('nim')}}" />
                                <label for="nim">NIM</label>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$errors->first('nim')}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}" id="username" name="username" type="text" placeholder="Masukan username" value="{{old('title')}}" />
                        <label for="username">Username</label>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        {{$errors->first('username')}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" name="password" type="password" placeholder="Create a password" value="{{old('password')}}"/>
                                <label for="password">Password</label>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$errors->first('password')}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password" />
                                <label for="password_confirmation">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 m-auto">
                            <img src="assets/img/no-profile.jpeg" id="imgPreview" class="img-thumbnail" alt="Photo">
                            <button type="button" class="btn btn-secondary w-100 mt-3" id="btn-foto">Pilih Foto</button>
                            <input type="file" name="foto" id="foto" class="d-none {{$errors->has('foto') ? 'is-invalid' : ''}}">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$errors->first('foto')}}
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Daftar</button></div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="{{route('login')}}">Sudah punya akun? Login</a></div>
            </div>
        </div>
    </div>
</div>

<script>
    var button = document.getElementById('btn-foto');
    var inputFile = document.getElementById('foto');
    var imagePreview = document.getElementById('imgPreview');
    
    button.addEventListener('click', function(){
        inputFile.click();
    });

    inputFile.addEventListener('change', function(e){
        showPreview(e);
    });

    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            imagePreview.src = src;
            imagePreview.style.display = "block";
        }
    }
</script>
@endsection