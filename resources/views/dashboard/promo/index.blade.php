@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Promo</h4>
                </div>
                <div class="mb-0">
                    <a href="{{ route('product-promo.create') }}" class="btn btn-primary">
                        Tambah Promo
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$product_promos->isEmpty())
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 font-14 font-weight-medium text-muted">No
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Nama
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Harga
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">
                                    Persentase
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_promos as $product_promo)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $product_promo->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $product_promo->nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $product_promo->harga }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $product_promo->promo_persentase }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                	

                                    <a href="{{ route('product-promo.edit',$product_promo->id) }}" class="btn btn-success" style="width: 100%; margin-top: 5px; margin-bottom: 10px;">
                                        Edit
                                    </a>
                                    <div class="remove" style="margin-top: 5px; width: 100%;">
                                        {!! Form::open(['method' =>'DELETE', 'route'=>['product-promo.destroy',$product_promo->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                          <tbody>
                            <tr>Promo kosong</tr>
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