@extends('layouts.base')

@section('title')
Home
@endsection

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Nama </th>
                        <td>:</td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>NIM </th>
                        <td>:</td>
                        <td>{{$user->nim}}</td>
                    </tr>
                    <tr>
                        <th>Username </th>
                        <td>:</td>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <th valign='top'>Foto </th>
                        <td valign='top'>:</td>
                        <td>
                        <img src="uploads/{{$user->foto}}" width="100" id="imgPreview" class="img-thumbnail" alt="Photo">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection