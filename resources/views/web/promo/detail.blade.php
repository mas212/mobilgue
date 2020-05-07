@extends('web.layout')
@section('content')
	<!-- Single Product -->
	<div class="single_product">
		<div class="container">
			<div class="row">
				<!-- Images -->
				<!-- Selected Image -->
				<div class="col-lg-8 order-lg-2 order-1">
					<div class="image_selected">
						<img src="{{ URL::to('/') }}/promo/{{ $productPromo->photo }}">
					</div>
				</div>

				<!-- Description -->
				<div class="col-lg-4 order-3">
					<div class="product_description">
						<div class="product_harga">Rp {{ $productPromo->harga }}</div>
						<div class="product_nama">
							{{ $productPromo->nama}}
						</div>
						<div class="productPercent">
							{{ $productPromo->promo_persentase }} %
						</div>
						
					</div>
					<!-- end -->
					<div class="product_description" style="margin-bottom: 8px; margin-top: 8px;">
						<div class="product_title">Deskripsi Penjual</div>
						<a href="https://api.whatsapp.com/send?phone=6282143141090">
							<div class="chat_penjual">
								CHAT DENGAN PENJUAL
							</div>
						</a>
					</div>
					<!-- end -->
				</div>
				<!--end -->
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
				<div class="productDetail-ket">
					<div class="deskripsi-ket">
						Deskripsi
					</div>
					<div class="deskripsi-ket-detail">
						{{ $productPromo->deskripsi }}
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="title" style="width: 100%; margin-bottom: 30px; margin-top: 15px;">
				<h1 style="font-size: 18px; display: block;">Produk Rekomendasi</h1>
			</div>
			<!-- Best Sellers Item -->
			@if(!$productRecomendations->isEmpty())
				@foreach($productRecomendations as $product)
					<div class="col-md-4">
						<a href="{{ route('product.detail', $product->id) }}">
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
					Maff produk kosong
				</div>
			@endif
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
		.product_description {
		    padding-left: 10px!important;
		    border: 1px solid #ccc;
		    border-radius: 5px;
		}
		.product_harga {
		    font-weight: bold;
		    font-size: 29px;
		}
		.product_nama {
		    font-size: 18px;
		    color: #757171;
		    margin-top: 7px;
		    margin-bottom: 7px;
		}
</style>

@endsection