@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Tipe Bahan Bakar</h4>
                </div>
                <div class="form-body">
                    {{ Form::model($bahan_bakar, array(
                        'method' => 'PATCH',
                        'route' => array('bahan-bakar.update', $bahan_bakar->id))) }}
                          {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tipe Bahan Bakar</label>
                                {!! Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Update Tipe Bahan Bakar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection