@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Promo Benner</h4>
                </div>
                <div class="form-body">
                    {{ Form::model($benner, array(
                        'method' => 'PATCH',
                        'files'=>true,
                        'route' => array('promo-benner.update', $benner->id))) }}
                          {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                {!! Form::text('benner_nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                {!! Form::text('benner_description', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <br>
                                {!! Form::file('benner_photo', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Benner</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection