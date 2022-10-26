<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title><?= $title; ?> | Bappeda </title>
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

    <!-- Jquery -->
    <script src="<?= base_url('public') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="<?= base_url('public') ?>/vendor/aos/aos.css" />

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <style>
        .nav-pills {
            margin-left: .27rem !important;
            align-items: flex-end !important;
        }

        .nav-pills .nav-link.active {
            /* background-color: #374151 !important; */
            padding-bottom: 1rem !important;
            font-weight: bolder !important;

        }

        .nav-pills .nav-link {
            font-size: .8rem !important;
            transition: .9s !important;

        }

        .nilai {
            font-size: 5rem !important;
        }

        /* #myChart {
            height: 90vh
        } */
        .filter-date {
            /* height: 39px; */
            height: 35px;
            font-size: .8rem !important;
            width: 7rem !important;

        }


        @media (max-width: 576px) {
            .nilai {
                font-size: 3rem !important;
            }

            /* .pangkat {
                font-size: 1rem !important;
            } */

            .judul-chart {
                font-size: .9rem !important;
            }

            #myChart {
                height: 25rem;
                width: 10rem;
            }

            .text-zoom {
                font-size: .7rem !important;
            }

            .chart-action {
                font-size: .7rem !important;
                padding: 6px 16px !important;
                margin: 8px 8px 8px 0 !important;
            }


            .card-chart {
                overflow-x: scroll !important;
            }

            .isi-chart,
            .isi-chart2,
            .isi-chart3,
            .isi-chart4 {
                width: 50rem !important;
                overflow-x: scroll !important;

            }


        }

        @media (max-width: 767.98px) {}

        @media (max-width: 991.98px) {
            .nav-pills .nav-link {
                margin-bottom: -1rem;

            }

            #sidebarMenu {
                margin-left: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            width: 7px;
            /* height: 5px; */
            /* width of the entire scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: white;
            /* color of the tracking area */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #374151;
            /* color of the scroll thumb */

            /* roundness of the scroll thumb */
            border: 3px solid #374151;
            /* creates padding around scroll thumb */
        }

        .chart-action {
            font-weight: 500;
            background: rgba(40, 44, 52, .05);
            border: 1px solid transparent;
            border-radius: 6px;
            color: #3080d0;
            text-decoration: none !important;
            display: inline-block;
            font-size: .8rem;
            padding: 8px 16px;
            margin: 0 8px 8px 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .chart-action:hover {
            background: rgba(48, 128, 208, .15);
            border-color: rgba(48, 128, 208, .2);
            color: #3080d0;
        }

        .title {
            display: block;
        }

        .nav-item-active {
            color: #fff !important;
            transform: translateY(-20%);
            font-size: 45px;
            position: relative;
            bottom: 0px;
        }
    </style>

</head>

<body>


    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <!-- Bagian mengubungkan isi dengan layout -->
    <?php
    $mobile = isset($_GET['mobile']) ? $_GET['mobile'] : "null";
    if ($mobile != 'true') {
        echo $this->include('navbar_left');
        echo $this->include('navbar_top');
        $container = '';
    } else {
        $container = 'container';
    }

    ?>
    <div class="<?= $container; ?>">
        <?= $this->renderSection('content') ?>
        <!-- Bagian mengubungkan isi dengan layout End-->

        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">Developed by <a class="text-info fw-normal" href="https://t-paz.com" target="_blank">Tarkiz Paz Banua</a> | 2022</p>
                </div>
            </div>
        </footer>
    </div>
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
    <!-- <script src="<?= base_url('public') ?>/vendor/chartist/dist/chartist.min.js"></script> -->
    <!-- <script src="<?= base_url('public') ?>/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->

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

    <!-- Datatables -->
    <script src="<?= base_url('public') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('public') ?>/vendor/datatables/dataTables.bootstrap5.min.js"></script>

    <!-- Chartjs -->
    <script src="<?= base_url(); ?>/public/vendor/chartjs/chart.js"></script>
    <!-- Chartjs Plugin -->
    <script src="<?= base_url(); ?>/public/vendor/chartjs/plugin/chartjs-plugin-zoom/hammerjs@2.0.8.js"></script>
    <script src="<?= base_url(); ?>/public/vendor/chartjs/plugin/chartjs-plugin-zoom/chartjs-plugin-zoom.min.js"></script>
    <script src="<?= base_url(); ?>/public/vendor/chartjs/plugin/chartjs-plugin-datalabels/chartjs-plugin-datalabels.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jspdf@1.5.3/dist/jspdf.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.content').css('margin-left', '0')
            $('.btn-hamburger').on('click', function() {
                if ($('#sidebarMenu').hasClass('aktif')) {
                    $('#sidebarMenu').removeClass('aktif')
                    $('#sidebarMenu').css('margin-left', '-100rem')
                    $('.content').css('margin-left', '0')
                } else {
                    $('#sidebarMenu').addClass('aktif')
                    $('#sidebarMenu').css('margin-left', '')
                    $('.content').css('margin-left', '')
                }
            })
            // For Bottom Navigation
            const url = window.location.href;
            if (url.includes('dashboard')) {
                $('#dashboard-menu').addClass('nav-item-active')
                $('#statistik-menu').removeClass('nav-item-active')
                $('#datamaster-menu').removeClass('nav-item-active')
            } else if (url.includes('statistik')) {
                $('#dashboard-menu').removeClass('nav-item-active')
                $('#statistik-menu').addClass('nav-item-active')
                $('#datamaster-menu').removeClass('nav-item-active')
            } else if (url.includes('datamaster') || url.includes('user')) {
                $('#datamaster-menu').addClass('nav-item-active')
                $('#dashboard-menu').removeClass('nav-item-active')
                $('#statistik-menu').removeClass('nav-item-active')
            }
        })
    </script>
</body>

</html>