<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rekomendasi_judul">
				<h2>Rekomendasi Baru</h2>
			</div>
			<!-- Best Sellers Item -->
			<?php if(!$products->isEmpty()): ?>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-4">
						<a href="<?php echo e(route('product.detail', $product->id)); ?>">
							<div class="products">
								<div class="productImg">
									<img src="<?php echo e(URL::to('/')); ?>/products/<?php echo e($product->photo); ?>">
								</div>
								<div class="productTitle">
									<?php echo e($product->nama); ?>

								</div>
								<div class="productPrice">
									Rp. <?php echo e(number_format($product->harga, 0, ',','.')); ?>

								</div>
								<div class="productStatus">
									<?php echo e($product->status_jual); ?>

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
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<div class="product-kosong">
					Maff produk kosong
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="col-md-12 partner-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12 partnerh3">
					<h3>Hero Jaya Car terpercaya, aman dan nyaman?</h3>
				</div>
				<div class="col-md-4">
					<div class="ruleHero">
						<h4>JUAL</h4>
						<ul style="margin-bottom: 13%;">
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Ribuan calon pembeli di seluruh Nusantara
							</li>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								RGRATIS! Tanpa biaya apapun
							</li>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Proses pendaftaran mudah dan cepat
							</li>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Kami menjamin keamanan mobil Anda
							</li>
						</ul>
						<h4>BELI</h4>
						<ul>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Harga langsung dari pemilik mobil
							</li>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Hasil inspeksi yang detail dengan standar tinggi
							</li>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Opsi pembayaran dengan Tunai atau Kredit
							</li>
							<li>
								<i class="fa fa-check" aria-hidden="true"></i>
								Kami menjamin Buy-Back Guarantee
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="heroImg">
						<img src="<?php echo e(asset('web/images/hero.png')); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\olx\resources\views/web/home/index.blade.php ENDPATH**/ ?>