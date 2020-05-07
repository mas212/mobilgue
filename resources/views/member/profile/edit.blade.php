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
                    {{ Form::model($user, array(
                      'method' => 'PATCH',
                      'route' => array('profile.update')
                    ,'files'=>true)) }}
                    {{ csrf_field() }}
                      <div class="form-group row ">
                        <div class="col-md-4 text-right">Nama Lengkap: </div>
                        <div class="col-md-8  {!! $errors->has('name') ? 'has-error' : '' !!}">
                           {!! Form::text('name', null, array('class'=>'form-control')) !!}
                           {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-4 text-right">Email: </div>
                        <div class="col-md-8 {!! $errors->has('email') ? 'has-error' : '' !!}">
                          {!! Form::text('email', null, array('class'=>'form-control', ($user->email != "") ? 'readonly': '') ) !!}
                          {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-4 text-right">Nomor Telepon:  </div>
                        <div class="col-md-8 {!! $errors->has('phone') ? 'has-error' : '' !!}">
                         {!! Form::text('phone', $user->userProfile->phone, array('class' => 'form-control')) !!}
                          {!! $errors->first('phone', '<p class="help-block">Masukkan nomor telepon hanya angka</p>') !!}
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-4 text-right">Whatsapp:  </div>
                        <div class="col-md-8 {!! $errors->has('wa') ? 'has-error' : '' !!}">
                         {!! Form::text('wa', $user->userProfile->wa, array('class' => 'form-control')) !!}
                          {!! $errors->first('wa', '<p class="help-block">Masukkan nomor telepon hanya angka</p>') !!}
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-md-4 text-right">Alamat:  </div>
                        <div class="col-md-8 {!! $errors->has('address') ? 'has-error' : '' !!}">
                            {!! Form::text('address', $user->userProfile->address, array('class'=>'form-control')) !!}
                            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-4 col-md-offset-4">
                          <button class="btn btn-success btn-edit-profil">Update profile</button>
                        </div>
                      </div>
                    {{ Form::close() }}
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