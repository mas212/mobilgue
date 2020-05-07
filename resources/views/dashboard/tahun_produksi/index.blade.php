@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Tahun Produksi</h4>
                </div>
                <div class="mb-0">
                    <a href="{{ route('tahun-produksi.create') }}" class="btn btn-primary">
                        Tambah Tahun Produksi
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$tahun_produksi->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Tahun Produksi
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tahun_produksi as $tahun_produk)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $tahun_produk->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $tahun_produk->tahun_produksi }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    <a href="{{ route('tahun-produksi.edit',$tahun_produk->id) }}" class="btn btn-success">
                                        Edit
                                    </a>
                                    <div class="remove" style="margin-top: 5px; position: relative; left: 19%; bottom: 42px;">
                                        {!! Form::open(['method' =>'DELETE', 'route'=>['tahun-produksi.destroy',$tahun_produk->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                          <tbody>
                            <tr class="alert alert-danger">Tahun Produksi kosong</tr>
                          </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection