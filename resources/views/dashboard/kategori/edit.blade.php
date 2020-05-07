@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Kategori</h4>
                </div>
                <div class="form-body">
                    {{ Form::model($kategori, array(
                        'method' => 'PATCH',
                        'route' => array('kategori.update', $kategori->id))) }}
                          {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                {!! Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Update Kategori</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection