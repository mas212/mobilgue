@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Subkategori</h4>
                </div>
                <div class="form-body">
                    {{ Form::model($subkategori, array(
                        'method' => 'PATCH',
                        'route' => array('subkategori.update', $subkategori->id))) }}
                          {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori_id" class="form-control">
                                    <option>Pilih Kategori</option>
                                    @if(!$kategoris->isEmpty())
                                        @foreach($kategoris as $kategori)
                                            <option value="{{ $kategori->id}}">
                                                {{ $kategori->nama }}
                                            </option>
                                        @endforeach
                                    @else
                                        <div class="alert alert-danger">
                                            Data Kategori kosong
                                        </div>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                {!! Form::text('nama', null, array( 'class'=>'form-control', 'required'=>'required', 'placeholder'=>'')) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round">Simpan Kategori</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection