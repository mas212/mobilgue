@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Jarak Tempuh</h4>
                </div>
                <div class="form-body">
                    {!! Form::open(array('route' => 'jarak-tempuh.store')) !!}
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group {!! $errors->has('jarak_tempuh') ? 'has-error' : '' !!}">
                                <label>Jarak Tempuh</label>
                                {!! Form::text('jarak_tempuh', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                                {!! $errors->first('jarak_tempuh', '<p class="help-block">Jarak Tempuh Wajib Diisi</p>') !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Jarak Tempuh</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection