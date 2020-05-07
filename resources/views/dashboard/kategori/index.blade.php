@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Kategori</h4>
                </div>
                <div class="mb-0">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">
                        Tambah Kategori
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$kategoris->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Nama
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategoris as $kategori)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $kategori->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $kategori->nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    <a href="{{ route('kategori.edit',$kategori->id) }}" class="btn btn-success" style="width: 100%;">
                                        Edit
                                    </a>
                                    <div class="remove" style="margin-top: 10px; width: 100%;">
                                        {!! Form::open(['method' =>'DELETE', 'route'=>['kategori.destroy',$kategori->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                {{ $kategoris->links() }}
                            </tr>
                        </tbody>
                        @else
                          <tbody>
                            <tr>Kategoris kosong</tr>
                          </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .btn-danger{
        width: 100%;
    }
</style>
@endsection