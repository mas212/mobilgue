@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Ringkasan Akun</h4>
                </div>
                <div class="col-sm-12 col-md-12">
                  <div class="user-detail panel panel-outline">
                    <header>Profil Pribadi</header>
                    <div class="form-group row">
                      <div class="col-md-4 text-right">Nama Lengkap: </div>
                      <div class="col-md-4">{{ $user->name }}</div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4 text-right">Email: </div>
                      <div class="col-md-4">{{ $user->email }}</div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4 text-right">Phone: </div>
                      <div class="col-md-4">
                        {{ $user->userProfile->phone }}
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4 text-right">Address: </div>
                      <div class="col-md-4">
                        {{ $user->userProfile->address }}
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-4 col-md-offset-4">
                        <a href="{{ Route('profile.edit') }}" class="btn btn-success btn-edit-profil">Edit dan Lengkapi Profil</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .btn-danger{
        width: 100%;
    }
</style>
@endsection