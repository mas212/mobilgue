@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Promo</h4>
                </div>
                <div class="form-body">
                    {{ Form::model($product_promo, array(
                        'method' => 'PATCH',
                         'files' => true, 
                         'enctype' => 'multipart/form-data',
                        'route' => array('product-promo.update', $product_promo->id))) }}
                          {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                {!! Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga</label>
                                {!! Form::text('harga', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ringkasan</label>
                                {!! Form::text('ringkasan', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Persentase</label>
                                {!! Form::text('promo_persentase', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <br>
                                {!! Form::file('photo', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                {!! Form::textarea('deskripsi', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Promo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection