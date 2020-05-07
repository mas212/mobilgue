		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<?php if(!$kategoris->isEmpty()): ?>
										<?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<a href="<?php echo e(route('product.kategori', $kategori->id)); ?>">
												<?php echo e($kategori->nama); ?>

											</a>
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>

									<?php endif; ?>
								</ul>
							</div>
							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">
										    <?php if(auth()->guard()->guest()): ?>
										    <a href="https://api.whatsapp.com/send?phone=6282143141090" class="titip">Titip Jual
										</a>
										
											<a href="<?php echo e(route('login')); ?>" class="unit">
												Login
											</a>
										    <?php else: ?>
										        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
										    <?php endif; ?>
										</div>
									</div>
										
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

	

	</header><?php /**PATH C:\xampp\htdocs\olx\resources\views/web/partials/menu.blade.php ENDPATH**/ ?>