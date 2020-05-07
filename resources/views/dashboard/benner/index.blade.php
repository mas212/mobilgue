@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Benner</h4>
                </div>
                <div class="mb-0">
                    <a href="{{ route('promo-benner.create') }}" class="btn btn-primary">
                        Tambah Benner
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$benners->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Nama
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Description
                                </th>
                                
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($benners as $benner)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $benner->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $benner->benner_nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $benner->benner_description }}
                                </td>
                                
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    <a href="{{ route('promo-benner.edit',$benner->id) }}" class="btn btn-success" style="width: 100%; margin-top: 5px; margin-bottom: 10px;">
                                        Edit
                                    </a>
                                    <div class="remove" style="width: 100%;">
                                        {!! Form::open(['method' =>'DELETE', 'route'=>['promo-benner.destroy',$benner->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                          <tbody>
                            <tr>Benner kosong</tr>
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