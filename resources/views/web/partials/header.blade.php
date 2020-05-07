<div class="super_container">
	
	<!-- Header -->
	
	<header class="header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('web/images/phone.png') }}" alt=""></div>+6282143141090</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('web/images/mail.png') }}" alt=""></div><a href="mailto:suport@herojayacar.com">suport@herojayacar.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_user">
							@guest
								<div>
									<a href="https://api.whatsapp.com/send?phone=6282143141090" class="titip">Titip Jual
									</a>
								</div>
								<div style="padding-left: 0px;">
									<a href="https://api.whatsapp.com/send?phone=6282143141090" class="unit">Request Unit</a>
								</div>
								|
								<div style="padding-left: 15px;">
									<a href="{{ route('login') }}" class="masuk">Login</a>
								</div>
							@else
                            <li class="nav-item dropdown">
                                <a>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-4 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo">
								<a href="{{ route('home.index') }}">
									<img src="{{ asset('web/images/logo.jpg') }}">
								</a>
							</div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
									{{ Form::open(array('route' => 'product.search.lists', 'method' => 'get')) }}								
										<input type="search" name="search_nama"  class="header_search_input" placeholder="Search for products...">
										<!--<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>-->
										<button type="submit" class="header_search_button trans_300" type="submit"><img src="{{ asset('web/images/search.png') }}" alt=""></button>
									{{ Form::close() }}
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
				</div>
			</div>
		</div>
		