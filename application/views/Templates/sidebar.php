
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= base_url('assets/')?>images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                        <a class="js-arrow" href="#" style="text-decoration: none;">
                            <i class="fa-solid fa-igloo"></i>Dashboard</a>
                        </li>
                        <li>
                        <a href="chart.html" style="text-decoration: none;">
                            <i class="fa-solid fa-cart-shopping"></i>Daftar Barang</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Admin/addBarang')?>" style="text-decoration: none;">
                            <i class="fas fa-chart-bar" ></i>Tambah Barang</a>
                        </li>
                        <li>
                        <a href="<?= base_url('Admin/viewAdd_barang')?>" style="text-decoration: none;">
                            <i class="fa-solid fa-cart-plus"></i>Tambah Barang</a>
                        </li>
                        <li>
                        <a href="<?= base_url('Auth/logout')?>" style="text-decoration: none;">
                            <i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/')?>images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#" style="text-decoration: none;">
                            <i class="fa-solid fa-igloo"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#" style="text-decoration: none;">
                                <i class="fa-solid fa-cart-shopping"></i>Daftar Barang</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('Admin/daftarBarang')?>" style="text-decoration: none;">Makanan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Admin/minuman')?>" style="text-decoration: none;">Minuman</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Admin/sembako')?>" style="text-decoration: none;">Sembako</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Admin/perabot')?>" style="text-decoration: none;">Perabotan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Admin/makanan')?>" style="text-decoration: none;">Kebersihan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Admin/obat')?>" style="text-decoration: none;">Obat-Obatan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Admin/perabot')?>" style="text-decoration: none;">Perabotan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('Admin/viewAdd_barang')?>" style="text-decoration: none;">
                            <i class="fa-solid fa-cart-plus"></i>Tambah Barang</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Auth/logout')?>" style="text-decoration: none;">
                            <i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->