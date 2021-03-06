@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Produk</h4>
                </div>
                <div class="mb-0">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">
                        Tambah Produk
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        @if(!$products->isEmpty())
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
                                    Status
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="border-top-0 text-muted px-2 py-4 font-14">
                                    {{ $product->id }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $product->nama }}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ $product->harga }}
                                </td>
                                <td>{{ $product->status_jual }}</td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                    {{ Form::model($product, array(
                                        'method' => 'PATCH',
                                        'route' => array('product.status', $product->id))) }}
                                        {{ csrf_field() }}
                                    <select name="status_jual" class="select-2">
                                      <option value="terjual">Terjual</option>
                                      <option value="ada">Ada</option>
                                    </select>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-round">Update Product Status</button>
                                  {!! Form::close() !!}
                                </td>
                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                	

                                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-success" style="width: 100%; margin-top: 5px; margin-bottom: 10px;">
                                        Edit
                                    </a>
                                    <div class="remove" style="margin-top: 5px; width: 100%;">
                                        {!! Form::open(['method' =>'DELETE', 'route'=>['product.destroy',$product->id]]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                {{ $products->links() }}
                            </tr>
                        </tbody>
                        @else
                          <tbody>
                            <tr>Product kosong</tr>
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
    .select-2{
        width: 62%;
        padding: 4px;
        border-radius: 3px;
    }
</style>
@endsection 