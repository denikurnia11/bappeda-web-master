<!-- Bottom Navigation -->
<div class="d-block d-sm-none position-fixed bottom-0 start-50 translate-middle-x shadow w-100" style="height: 80px; background-color: #220455;z-index: 99;">
    <div class="row text-center py-3">
        <div class="col">
            <a href="<?= base_url('dashboard'); ?>" style="color: #644c89; font-size: 30px;" id="dashboard-menu">
                <i class='bx bx-home'></i>
                <span class="title" style="font-size: .7rem; margin-top: -10px;">Dashboard</span>
            </a>
        </div>
        <div class="col">
            <a id="statistik-menu" href="<?= base_url('statistik'); ?>" style="color: #644c89; font-size: 30px;">
                <i class='bx bx-line-chart'></i>
                <span class="title" style="font-size: .7rem; margin-top: -10px;">Statistik</span>
            </a>
        </div>
        <div class="col position-relative">
            <a class="" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span style="color: #644c89; font-size: 30px;" id="datamaster-menu">
                    <i class='bx bx-menu'></i>
                    <span class="title" style="font-size: .7rem; margin-top: -10px;">Data Master</span>
                </span>
            </a>
        </div>
    </div>

    <!-- Data Master Menu -->
    <div class="collapse" id="collapseExample">
        <div class="row position-absolute" style="width:100%; background-color: #644c89; top: -23rem;left:.7rem; z-index: 8;">
            <div class="col text-white d-flex flex-column text-center">
                <a class="pt-3" href="<?= base_url(); ?>/datamaster/objek">Data Objek</a>
                <li role="separator" class="dropdown-divider mt-2 mb-1 border-gray-700"></li>
                <a class="pt-3" href="<?= base_url(); ?>/datamaster/attribut">Data Attribut</a>
                <li role="separator" class="dropdown-divider mt-2 mb-1 border-gray-700"></li>
                <a class="pt-3" href="<?= base_url(); ?>/datamaster/kategori">Data Kategori</a>
                <li role="separator" class="dropdown-divider mt-2 mb-1 border-gray-700"></li>
                <a class="pt-3" href="<?= base_url(); ?>/datamaster/tahun">Data Tahun</a>
                <li role="separator" class="dropdown-divider mt-2 mb-1 border-gray-700"></li>
                <a class="pt-3" href="<?= base_url(); ?>/datamaster/bulan">Data Bulan</a>
                <li role="separator" class="dropdown-divider mt-2 mb-1 border-gray-700"></li>
                <a class="pt-3" href="<?= base_url(); ?>/datamaster/lokasi">Data Lokasi</a>
                <li role="separator" class="dropdown-divider mt-2 mb-1 border-gray-700"></li>
                <a class="pt-3" href="<?= base_url('user') ?>">Data User</a>
                <span class="mt-2 mb-1"></span>
            </div>
        </div>
    </div>
</div>