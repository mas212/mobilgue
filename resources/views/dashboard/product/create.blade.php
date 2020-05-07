@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Produk</h4>
                </div>
                <div class="form-body">
                    {!! Form::open(array('route' => 'product.store', 'files'=>true, 'id'=>'form-product')) !!}
                        {{ csrf_field() }}  
                        <div class="col-md-12">
                            <div class="form-group{!! $errors->has('nama') ? 'has-error' : '' !!}">
                                <label>Nama</label>
                                {!! Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {!! $errors->has('kategori_id') ? 'has-error' : '' !!}">
                                <label>Kategories</label>
                                <select name="kategori_id" class="form-control">
                                    @if(!$kategoris->isEmpty())
                                        <option>Pilih Kategori</option>
                                        @foreach($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">
                                                {{ $kategori->nama }}
                                            </option>
                                        @endforeach
                                    @else
                                        <div class="alert alert-danger">
                                            Data kategori kosong
                                        </div>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {!! $errors->has('subcat_id') ? 'has-error' : '' !!}">
                                <label>Subkategories</label>
                                <select name="subcat_id" class="form-control">
                                    @if(!$subkategoris->isEmpty())
                                        <option>Pilih Subkategori</option>
                                        @foreach($subkategoris as $subkategori)
                                            <option value="{{ $subkategori->id }}">
                                                {{ $subkategori->nama }}
                                            </option>
                                        @endforeach
                                    @else
                                        <div class="alert alert-danger">
                                            Data subkategori kosong
                                        </div>
                                    @endif
                                </select>
                            </div>
                        </div>
                 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tahun</label>
                                {!! Form::text('tahun', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                                <label>Merek</label>
                                {!! Form::text('merek', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Jarak</label>
                                {!! Form::text('jarak', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Warna</label>
                                {!! Form::text('warna', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group {!! $errors->has('transmisi_id') ? 'has-error' : '' !!}">
                                <label>Transmisi</label>
                                <select name="transmisi_id" class="form-control">
                                    @if(!$transmisis->isEmpty())
                                        <option>Pilih Transmisi</option>
                                        @foreach($transmisis as $transmisi)
                                            <option value="{{ $transmisi->id }}">
                                                {{ $transmisi->nama }}
                                            </option>
                                        @endforeach
                                    @else
                                        <div class="alert alert-danger">
                                            Data Transmisi kosong
                                        </div>
                                    @endif
                                </select>
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
                                <label>Photo</label>
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
                                <button type="submit" class="btn btn-primary btn-round">Selanjut Product Photo > </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection