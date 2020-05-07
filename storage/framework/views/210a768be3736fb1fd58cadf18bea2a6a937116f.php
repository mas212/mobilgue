
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <?php if(Auth::user()->isSuperAdmin()): ?>
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Produk</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="<?php echo e(route('product.index')); ?>"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Produk
                                </span></a>
                        </li>
                        <!--<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html"
                                aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                    class="hide-menu">Statistik</span></a></li>-->
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo e(route('product-promo.index')); ?>"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Promo</span></a></li>
                       <!-- <li class="sidebar-item">
                            <a href="<?php echo e(route('admin.titip-jual')); ?>" class="sidebar-link">
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
                                <li class="sidebar-item"><a href="<?php echo e(route('kategori.index')); ?>" class="sidebar-link"><span
                                            class="hide-menu"> Kategori
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo e(route('subkategori.index')); ?>" class="sidebar-link"><span
                                            class="hide-menu">Subkategori
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo e(route('transmisi.index')); ?>" class="sidebar-link"><span
                                            class="hide-menu">Transmisi
                                        </span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Member </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="<?php echo e(route('user.lists')); ?>" class="sidebar-link"><span
                                            class="hide-menu"> List Member
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?php echo e(route('promo-benner.index')); ?>"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Benner</span></a></li>
                        <li class="list-divider"></li>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
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
                    <?php endif; ?>
                         <li> 
                            <a href="<?php echo e(route('profile.index')); ?>">
                                <img src="<?php echo e(asset('dashboard/assets/images/users/profile-pic.jpg')); ?>" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><?php echo e(Auth::user()->name); ?></span>
                            </a>
                        </li>
                         <li> 
                            <a href="<?php echo e(route('promo-list.index')); ?>" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Promo Mobil
                                </span>
                            </a>
                        </li>
                         <li> 
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="sidebar-link sidebar-link" 
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span>
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

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
        <!-- ============================================================== --><?php /**PATH C:\xampp\htdocs\olx\resources\views/dashboard/partials/sidebar.blade.php ENDPATH**/ ?>