@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Warna</h4>
                </div>
                <div class="form-body">
                    {!! Form::open(array('route' => 'warna.store')) !!}
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Warna Mobil</label>
                                {!! Form::text('warna_mobil', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Warna</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection