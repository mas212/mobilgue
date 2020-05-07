@extends('web.layout')
@section('content')
	<div class="container">
		<div class="row">

			<div class="col-md-2">
				<div class="bg_filter">
					<div class="filter_title">Filter</div>
				

					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					         Kategori <span class="icon-list">
					         	<i class="fa fa-chevron-down"></i>
					         </span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
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
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Transmisi <span class="icon-list">
					         	<i class="fa fa-chevron-down"></i>
					         </span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					          <div class="filterSubcatList">
								<ul>
									@if(!$transmisi->isEmpty())
										@foreach($transmisi as $trans)
											<li>
												<a href="{{ route('filter.transmisi', $trans->id) }}">
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
					  </div>
					</div>
					
					
					
				</div>
			</div>
			<!-- end filter -->
			<div class="col-md-10">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
				    <li class="breadcrumb-item">
				    	Transmisi
				    </li>
				  </ol>
				</nav>
				<div class="product_content">
					@if(!$productFilterTransmisi->isEmpty())
						<div class="row">
							@foreach($productFilterTransmisi as $product)
								<div class="col-md-6">
									<a href="{{ route('product.kategori.detail', $product->id) }}">
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
							<div class="col-md-12 paginate">
								{{ $productFilterTransmisi->links() }}
							</div>
						@else
							<div class="product-kosong">
								Maff transmisi kosong
							</div>
						@endif
					</div>
				</div>
			</div>
			<!-- Best Sellers Item -->
		</div>
	</div>
@endsection