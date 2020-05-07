@extends('web.layout')
@section('content')
	<div class="container">
		<div class="row">

			<div class="col-md-2">
				<div class="bg_filter">
					<div class="filter_title">Filter</div>
					<div class="filterSubkategori">
						Kategori
					</div>
					<div class="filterSubcatList">
						<ul>
							@if(!$subkategoris->isEmpty())
								@foreach($subkategoris as $subcat)
									<li>
										<a href="{{ route('filter.subcat', $subcat->id) }}">
											{{ $subcat->nama }}
										</a>
									</li>
								@endforeach
							@else
								<li>subkategori kosong</li>
							@endif
						</ul>
					</div>
					<div class="filterSubkategori">
						Merek
					</div>
					<div class="filterSubcatList">
						<ul>
							@if(!$merks->isEmpty())
								@foreach($merks as $merk)
									<li>
										<a href="{{ route('filter.merk', $merk->id) }}">
											{{ $merk->nama }}
										</a>
									</li>
								@endforeach
							@else
								<li>subkategori kosong</li>
							@endif
						</ul>
					</div>
					<div class="filterSubkategori">
						Warna
					</div>
					<div class="filterSubcatList">
						<ul>
							@if(!$warnas->isEmpty())
								@foreach($warnas as $warna)
									<li>
										<a href="{{ route('filter.warna', $warna->id) }}">
											{{ $warna->warna_mobil }}
										</a>
									</li>
								@endforeach
							@else
								<li>merk kosong</li>
							@endif
						</ul>
					</div>
					<div class="filterSubkategori">
						Transmisis
					</div>
					<div class="filterSubcatList">
						<ul>
							@if(!$transmisi->isEmpty())
								@foreach($transmisi as $trans)
									<li>
										<a href="{{ route('filter.transmisi', $warna->id) }}">
											{{ $trans->nama }}
										</a>
									</li>
								@endforeach
							@else
								<li>merk kosong</li>
							@endif
						</ul>
					</div>
				</div>
			</div>
			<!-- end filter -->
			<div class="col-md-10">
				<div class="product_content">
					@if(!$productFilterWarnas->isEmpty())
						<div class="row">
							@foreach($productFilterWarnas as $product)
								<div class="col-md-6">
									<a href="{{ route('product.kategori.detail', $product->id) }}">
										<div class="products">
											<div class="productImg">
												<img src="{{ URL::to('/') }}/products/{{ $product->photo }}">
											</div>
											<div class="productName">
												{{ $product->nama }}
											</div>
											<div class="productPrice">
												Rp {{ $product->harga }}
											</div>
										</div>
									</a>
								</div>
							@endforeach
						@else
							<div class="product-kosong">
								Maff warna kosong
							</div>
						@endif
					</div>
				</div>
			</div>
			<!-- Best Sellers Item -->
		</div>
	</div>
	<style type="text/css">
		.productImg img{
			width: 100%;
		}
		.products {
		    background: #f3f3f3;
		    margin-bottom: 28px;
		    padding: 5px 5px 5px 5px;
		    border-radius: 5px;
		    box-shadow: 0px 0px 5px 0px #dcd9d9;
		}
	</style>
@endsection