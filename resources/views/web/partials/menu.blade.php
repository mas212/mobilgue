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
									@if(!$kategoris->isEmpty())
										@foreach($kategoris as $kategori)
										<li>
											<a href="{{ route('product.kategori', $kategori->id) }}">
												{{ $kategori->nama }}
											</a>
										</li>
										@endforeach
									@else

									@endif
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
										    @guest
										    <a href="https://api.whatsapp.com/send?phone=6282143141090" class="titip">Titip Jual
										</a>
										
											<a href="{{ route('login') }}" class="unit">
												Login
											</a>
										    @else
										        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
										    @endguest
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

	

	</header>