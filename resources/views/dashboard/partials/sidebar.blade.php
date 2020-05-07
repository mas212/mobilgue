
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                @if(Auth::user()->isSuperAdmin())
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Produk</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('product.index') }}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Produk
                                </span></a>
                        </li>
                        <!--<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html"
                                aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                    class="hide-menu">Statistik</span></a></li>-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('product-promo.index') }}"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Promo</span></a></li>
                       <!-- <li class="sidebar-item">
                            <a href="{{ route('admin.titip-jual') }}" class="sidebar-link">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Titip Jual</span>
                            </a>
                        </li> -->
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Data Master</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Data Master</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="{{ route('kategori.index') }}" class="sidebar-link"><span
                                            class="hide-menu"> Kategori
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{ route('subkategori.index') }}" class="sidebar-link"><span
                                            class="hide-menu">Subkategori
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{ route('transmisi.index') }}" class="sidebar-link"><span
                                            class="hide-menu">Transmisi
                                        </span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Member </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="{{ route('user.lists') }}" class="sidebar-link"><span
                                            class="hide-menu"> List Member
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('promo-benner.index') }}"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Benner</span></a></li>
                        <li class="list-divider"></li>
                    @endif
                    @guest
                        <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">Login
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="authentication-register1.html" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Register
                                </span></a>
                        </li>
                    @endguest
                         <li> 
                            <a href="{{ route('profile.index') }}">
                                <img src="{{ asset('dashboard/assets/images/users/profile-pic.jpg') }}" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                         <li> 
                            <a href="{{ route('promo-list.index') }}" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Promo Mobil
                                </span>
                            </a>
                        </li>
                         <li> 
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="sidebar-link sidebar-link" 
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <style type="text/css">
            li {
                list-style: none;
                margin: 10px 27px;
                padding: 6px 3px;
                color: #000;
            }

            a {
                color: #5e5f63;
                background-color: transparent;
                font-weight: 400;
            }
        </style>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->