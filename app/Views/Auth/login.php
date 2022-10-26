<?php
$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : "null";
if ($mobile == 'true') {
    $str = '?mobile=true';
} else {
    $str = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Login | Bappeda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Analisis Statistik Bappeda Banjarbaru">
    <meta name="author" content="Bappeda Banjarbaru">
    <meta name="description" content="Website analisis statistik Bappeda kota banjarbaru">
    <meta name="keywords" content="analisis, statistik, banjarbaru, kalimantan selatan" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('public') ?>/assets/img/favicon/lambang_bjb.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public') ?>/assets/img/favicon/lambang_bjb.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('public') ?>/assets/img/favicon/lambang_bjb.png">
    <link rel="manifest" href="<?= base_url('public') ?>/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url('public') ?>/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="<?= base_url('public') ?>/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <!-- <link type="text/css" href="<?= base_url('public') ?>/vendor/notyf/notyf.min.css" rel="stylesheet"> -->

    <!-- Volt CSS -->
    <link type="text/css" href="<?= base_url('public') ?>/assets/css/volt.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <main class="bg-login">

        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container" style="height: 33rem; overflow-y: hidden; margin-top: 6rem;">
                <div class="row justify-content-center form-bg-image">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white bg-opacity-75 shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 style="color: green;"> <i class="fa fa-line-chart"></i></h1>
                                <h6> Analisis Statistik Bappeda Banjarbaru</h6>
                                <!-- FlashData -->
                                <?php if (session()->getFlashdata('pesan')) : ?>
                                    <div class="alert alert-danger text-start d-flex justify-content-between align-items-center" role="alert">
                                        <?= session()->getFlashdata('pesan'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <form action="<?= base_url(); ?>/auth/login/cek<?= $str; ?>" class="mt-4" method="post">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <span class="fa fa-user"></span>
                                        </span>
                                        <input type="username" class="form-control" placeholder="Masukkan Username" id="username" name="username" autofocus required>

                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input type="password" placeholder="Masukkan Password" class="form-control" id="password" name="password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Login</button>
                                </div>
                            </form>

                            <!-- <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Not registered?
                                    <a href="./sign-up.html" class="fw-bold">Create account</a>
                                </span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
    <script src="<?= base_url('public') ?>/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('public') ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- vendor JS -->
    <script src="<?= base_url('public') ?>/vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <!-- <script src="<?= base_url('public') ?>/vendor/nouislider/distribute/nouislider.min.js"></script> -->

    <!-- Smooth scroll -->
    <script src="<?= base_url('public') ?>/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <!-- <script src="<?= base_url('public') ?>/vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url('public') ?>/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->

    <!-- Datepicker -->
    <!-- <script src="<?= base_url('public') ?>/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script> -->

    <!-- Sweet Alerts 2 -->
    <script src="<?= base_url('public') ?>/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script> -->

    <!-- Vanilla JS Datepicker -->
    <!-- <script src="<?= base_url('public') ?>/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script> -->

    <!-- Notyf -->
    <!-- <script src="<?= base_url('public') ?>/vendor/notyf/notyf.min.js"></script> -->

    <!-- Simplebar -->
    <!-- <script src="<?= base_url('public') ?>/vendor/simplebar/dist/simplebar.min.js"></script> -->

    <!-- Github buttons -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

    <!-- Volt JS -->
    <script src="<?= base_url('public') ?>/assets/js/volt.js"></script>


</body>

</html>