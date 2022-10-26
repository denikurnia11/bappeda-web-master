<nav class="navbar navbar-light px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="<?= base_url(); ?>">
        <img class="navbar-brand-dark" src="<?= base_url('public') ?>/assets/img/favicon/lambang_bjb.png" alt="Logo Bjb" /> <img class="navbar-brand-light" src="<?= base_url('public') ?>/assets/img/favicon/lambang_bjb.png" alt="Logo Bjb" />
        <!-- <span class="display-6">Bappeda Banjarbaru</span> -->
    </a>
    <div class="d-flex align-items-center">
        <!-- <button class="btn btn-primary me-2">Logout</button> -->
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar style="margin-left: -100rem">
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="<?= base_url('public') ?>/assets/img/user.png" class="card-img-top rounded-circle border-white" alt="User">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Admin</h2>
                    <a href="<?= base_url('auth/login/logout'); ?>" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Log Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="<?= base_url('public') ?>/assets/img/favicon/lambang_bjb.png" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">BAPPEDA BJB</span>

                </a>
            </li>
            <!-- Data Master -->
            <li class="nav-item">
                <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-dataMaster">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-bars"></i>
                        </span>
                        <span class="sidebar-text">Data Master</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="data-master multi-level collapse show" role="list" id="submenu-dataMaster" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/DataMaster/Objek">
                                <span class="sidebar-text">Objek</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/DataMaster/Kategori">
                                <span class="sidebar-text">Kategori</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/DataMaster/Attribut">
                                <span class="sidebar-text">Attribut</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/DataMaster/Bulan">
                                <span class="sidebar-text">Bulan</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/DataMaster/Tahun">
                                <span class="sidebar-text">Tahun</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/DataMaster/Lokasi">
                                <span class="sidebar-text">Lokasi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('user') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <span class="sidebar-text">Data User</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa fa-pie-chart"></i>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('statistik') ?>" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa fa-bar-chart"></i>
                    </span>
                    <span class="sidebar-text">Statistik</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-statistik">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fa fa-bar-chart"></i>
                        </span>
                        <span class="sidebar-text">Statistik</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="list-objek multi-level collapse" role="list" id="submenu-statistik" aria-expanded="false">
                   
                </div>
            </li> -->


            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item">
                <a href="<?= base_url('panduan'); ?>" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Panduan</span>
                </a>
            </li>
        </ul>
    </div>
</nav>