@extends('web.layout')
@section('content')
	<!-- Single Product -->
	<div class="single_product">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 no-padding">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
					    <li class="breadcrumb-item">
					    	{{ $product->nama }}
					    </li>
					  </ol>
					</nav>
				</div>
				<!-- Images -->
				<!-- Selected Image -->
				<div class="col-lg-8 order-lg-2 order-1">
					<div class="image_selected">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="{{ URL::to('/') }}/products/{{ $product->photo }}" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							      	<img src="{{ URL::to('/') }}/products/{{ $productImage->photo_1 }}" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							      	<img src="{{ URL::to('/') }}/products/{{ $productImage->photo_2 }}" class="d-block w-100">
							    </div>
							    <div class="carousel-item">
							      	<img src="{{ URL::to('/') }}/products/{{ $productImage->photo_3 }}" class="d-block w-100">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
					</div>
				</div>

				<!-- Description -->
				<div class="col-lg-4 order-3">
					<div class="product_description">
						<div class="row detailName">
							<div class="col-md-4">
								<div class="productType">Bekas</div>
							</div>
							<div class="col-md-8">
								<div class="productName">
									{{ $product->nama }}
								</div>
							</div>
						</div>
						<div class="product_harga">
						    Rp. {{ number_format($product->harga, 0, ',','.') }}
						</div>
						<div class="detailChat">
							<a href="https://api.whatsapp.com/send?phone=6282143141090">
								<div class="chat_penjual">
									CHAT DENGAN PENJUAL
								</div>
							</a>
						</div>
						<div class="productLocation">
							<div class="detailLocation">
								<span class="locationTitle">
									Lokasi
								</span>
								<span class="locationDetail">
									Jl.Sentot - Jember - Indonesia
								</span>
							</div>
						</div>
					</div>
					<!-- end -->
					<div class="detailPatner">
						<div class="row">
							<div class="col-md-12 detailPartnerTitle">
								Kredit Dengan Partner HERO JAYA CAR
							</div>
							<div class="col-md-6">
								<div class="detailPartnerList">
									<img src="{{ asset('web/images/acc.png') }}" alt="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="detailPartnerList">
									<img src="{{ asset('web/images/mandiri.png') }}" alt="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="detailPartnerList">
									<img src="{{ asset('web/images/bca.png') }}" alt="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="detailPartnerList">
									<img src="{{ asset('web/images/sinarmas.png') }}" alt="">
								</div>
							</div>
						</div>
					</div>
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
						INFORMASI MOBIL
					</div>
					<div class="row">
						<div class="col-md-3 deskripsi-ket-detail">
							<ul>
								<li>
								    <span class="img-icon">
								        <img src="{{ asset('web/images/engine-size.png') }}" alt="">
								    </span>
								    <span class="fitur-car">Tahun Produksi</span>
								    <span class="fiture-tile">
								        {{ $product->tahun }}
								    </span>
								</li>
								<li>
								    <span class="img-icon">
								        <img src="{{ asset('web/images/fuel-type.png') }}" alt="">
								    </span>
								    <span class="fitur-car">Kategori</span>
								    <span class="fiture-tile">
								         {{ $product->kategori->nama }}
								    </span>
								</li>
							
							</ul>
						</div>
						<div class="col-md-3 deskripsi-ket-detail">
							<ul>
								<li>
								    <span class="img-icon">
								        <img src="{{ asset('web/images/engine-size.png') }}" alt="">
								    </span>
								    <span class="fitur-car">Model</span>
								    <span class="fiture-tile">
								         {{ $product->merek }}
								    </span>
								</li>
							</ul>
						</div>
						<div class="col-md-3 deskripsi-ket-detail">
							<ul>
								<li>
								    <span class="img-icon">
								        <img src="{{ asset('web/images/transmission.png') }}" alt="">
								    </span>
								    <span class="fitur-car">Transmisi</span>
								    <span class="fiture-tile">
								        {{ $product->tranmisi->nama }}
								    </span>
								</li>
								<li>
								    <span class="img-icon">
								        <img src="{{ asset('web/images/mileage.png') }}" alt="">
								    </span>
								    <span class="fitur-car">Kilometer</span>
								    <span class="fiture-tile">
								        {{ $product->jarak }}
								    </span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
				<div class="productDetail-ket">
					<div class="deskripsi-ket-detail">
						<div class="descriptionTitle">
							PENJELASAN HASIL INSPEKSI
						</div>
						<div class="description">
						    {{ $product->deskripsi }}
						</div>
						<div class="col-md-12 share">
						     <div class="share-title">Share:</div>
							<div class="sharethis-inline-share-buttons"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="detail-recomendation">
		<div class="row">
			<div class="col-md-12 title">
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
								<div class="productTitle">
									{{ $product->nama }}
								</div>
								<div class="productPrice">
									 Rp. {{ number_format($product->harga, 0, ',','.') }}
								</div>
								<div class="icon_list">
									<ul>
										<li>
											<i class="fa fa-tachometer"></i>
											7000 km
										</li> 
										<li>
											<i class="fa fa-calendar-o"></i> 2020
										</li>
										<li>
											<i class="fa fa-filter"></i>
											Manual
										</li>
									</ul>
								</div>
								<div class="map">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Kota Jember
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
@endsection