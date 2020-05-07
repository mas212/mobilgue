@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Produk Image</h4>
                </div>
                <div class="form-body">
                    {!! Form::open(array('route' => 'product-image.store', 'files'=>true, 'id'=>'form-product')) !!}
                        {{ csrf_field() }}  
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo 1</label>
                                {!! Form::file('photo_1', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo 2</label>
                                {!! Form::file('photo_2', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photo 3</label>
                                {!! Form::file('photo_3', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Produk Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection