@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Transmisi</h4>
                </div>
                <div class="mb-0">
                    <a href="{{ route('transmisi.create') }}" class="btn btn-primary">
                        Tambah Transmisi
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$transmisis->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Transmisi
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transmisis as $transmisi)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $transmisi->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $transmisi->nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    <a href="{{ route('transmisi.edit',$transmisi->id) }}" class="btn btn-success">
                                        Edit
                                    </a>
                                    <div class="remove" style="margin-top: 5px; position: relative; left: 19%; bottom: 42px;">
                                        {!! Form::open(['method' =>'DELETE', 'route'=>['transmisi.destroy',$transmisi->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                {{ $transmisis->links() }}
                            </tr>
                        </tbody>
                        @else
                          <tbody>
                            <tr>Transmisi kosong</tr>
                          </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection