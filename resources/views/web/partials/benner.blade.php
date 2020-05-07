	<!-- Banner -->

	<div class="col-md-12">
		<div class="banner_background" style="background-image:url({{ asset('web/images/banner_background.jpg') }})"></div>
		<div class="container">
			@if(!$benners->isEmpty())
				@foreach($benners as $benner)
					<div class="row">
						<div class="col-md-12 benner">
							<img src="{{ URL::to('/') }}/benner/{{ $benner->benner_photo }}">
						</div>
					</div>
				@endforeach
			@else
				<div class="alert alert-danger">
					benner kosong
				</div>
			@endif

		</div>
	</div>
<style type="text/css">
	.benner img{
		width: 100%;
		height: 250px;
	}
</style>
