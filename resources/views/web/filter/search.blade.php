@extends('web.layout')
@section('content')
	<div class="container">
		<div class="row">
			<!-- Best Sellers Item -->
			@if(!$products->isEmpty())
				@foreach($products as $product)
					<div class="col-md-4">
						<a href="{{ route('product.kategori.detail', $product->id) }}">
							<div class="products">
								<div class="productImg">
									<img src="{{ URL::to('/') }}/products/{{ $product->photo }}">
								</div>
								<div class="productName">
									{{ $product->nama }}
								</div>
								<div class="productPrice">
									Rp. {{ number_format($product->harga, 0, ',','.') }}
								</div>
							</div>
						</a>
					</div>
				@endforeach
				<div class="col-md-12 paginate">
					{{ $products->links() }}
				</div>
			@else
				<div class="product-kosong">
					Maff produk kosong
				</div>
			@endif
		</div>
	</div>
@endsection