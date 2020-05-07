@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Tahun Produksi</h4>
                </div>
                <div class="form-body">
                    {!! Form::open(array('route' => 'tahun-produksi.store')) !!}
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tahun Produksi</label>
                                {!! Form::text('tahun_produksi', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Tahun Produksi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection