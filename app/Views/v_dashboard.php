<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : "null";
if ($mobile == 'true') {
    $str = '&mobile=true';
} else {
    $str = '';
}
?>
<!-- <div class="card border-0 shadow bg-primary text-white">
    <div class="card-body">
        <div class="row">
            <div class="col ">
                <h1 class="text-center" style="font-family: 'poppins';">Dashboard</h1>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, veniam.</p>
            </div>
        </div>
    </div>
</div> -->

<!-- Chart 1 -->
<div class="row mt-0 mt-lg-6 px-0 px-lg-6">
    <div class="col">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center flex-row" data-aos="fade-right">
                <div class="row ">
                    <div class="col ">
                        <h2 class="fw-bolder">Indeks Pembangunan Manusia</h2>
                        <p class="fs-6" style="font-size: .9rem !important;">Selama tahun 2017 – 2021 IPM Kota Banjarbaru selalu berada diatas IPM Nasional, Provinsi Kalimantan Selatan, dan tertinggi diantara Kab/Kota se-Kalsel. Dalam rentang waktu 5 tahun terakhir, IPM Kota Banjarbaru selalu mengalami peningkatan, kecuali pada tahun 2020 yang mengalami penurunan sebagai dampak pandemi Covid-19. Pada tahun 2020, komponen pembentuk IPM yang mengalami penurunan hanya dari sisi ekonomi, namun seiring pulihnya perekonomian, IPM pada tahun 2021 kembali mengalami peningkatan.
                        </p>
                        <a href="<?php echo base_url('statistik?kategori=12&objek=64' . $str) ?>" class="btn btn-info">Selengkapnya</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-3">
                        <canvas width="300" height="400" id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chart 2 -->
<div class="row mt-6 px-0 px-lg-6">
    <div class="col">
        <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-right">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-3">
                        <canvas width="300" height="400" id="myChart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center order-first order-lg-last" data-aos="fade-left">
                <div class="row ">
                    <div class="col ">
                        <h2 class="fw-bolder">Pertumbuhan Ekonomi</h2>
                        <p>Pertumbuhan ekonomi di seluruh Indonesia mengalami penurunan yang sangat drastis pada tahun 2020 sebagai dampak pandemi Covid-19 termasuk Kota Banjarbaru yang mengalami pertumbuhan negatif menjadi sebesar -1,83. Secara umum pada tahun 2021 Kab / Kota di Kalimantan Selatan mampu memulihkan perekonomiannya sehingga tumbuh dengan kisaran 3-4,50 persen. Namun demikian pertumbuhan ekonomi Kota Banjarbaru masih lebih rendah dari pertumbuhan ekonomi Indonesia dan Kalimantan Selatan serta berada pada posisi ke-8 dari seluruh Kab / Kota di Kalsel
                        </p>
                        <a href="<?php echo base_url('statistik?kategori=9&objek=57' . $str) ?>" class="btn btn-info">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Chart 3 -->
<div class="row mt-6 px-0 px-lg-6">
    <div class="col">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center " data-aos="fade-right">
                <div class="row ">
                    <div class="col ">
                        <h2 class="fw-bolder">Angka Kemiskinan</h2>
                        <p>Selama rentang waktu 5 (lima) tahun terakhir sejak tahun 2017 – 2021, Angka Kemiskinan Kota Banjarbaru selalu berfluktuasi, namun angkanya selalu dibawah Indonesia dan Kalimantan Selatan. Pada tahun 2021 Angka Kemiskinan Kota Banjarbaru berada pada urutan ke-3 terendah diantara Kabupaten / Kota di Kalsel dengan capaian sebesar 4,40 persen. Posisi pertama terendah adalah Kabupaten Banjar dengan capaian sebesar 3,04 persen dan posisi kedua terendah adalah Kabupaten Tapin dengan capaian sebesar 3,60 persen.
                        </p>
                        <a href="<?php echo base_url('statistik?kategori=11&objek=99' . $str) ?>" class="btn btn-info">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-3">
                        <canvas width="300" height="400" id="myChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chart 4 -->
<div class="row my-6 px-0 px-lg-6">
    <div class="col">
        <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-right">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-3">
                        <canvas width="300" height="400" id="myChart4"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center order-first order-lg-last" data-aos="fade-left">
                <div class="row ">
                    <div class="col ">
                        <h2 class="fw-bolder">Tingkat Pengangguran Terbuka</h2>
                        <p>Tingkat Pengangguran Terbuka (TPT) di Kota Banjarbaru selama rentang waktu 4 (empat) tahun terakhir selalu mengalami peningkatan sejak tahun 2018 sampai dengan 2021. Pada tahun 2018 sempat mengalami penurunan sebesar 0,40 poin dari 5,51 % di tahun 2017 turun menjadi sebesar 5,11%. Selama rentang 4 (empat) tahun kemudian angka pengangguran selalu mengalami peningkatan sebesar 0,59 poin menjadi sebesar 5,70% pada tahun 2021.
                        </p>
                        <a href="<?php echo base_url('statistik?kategori=13&objek=66' . $str) ?>" class="btn btn-info">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AOS -->
<script src="<?= base_url('public') ?>/vendor/aos/aos.js"></script>

<!-- Chart -->
<script src=" <?= base_url('public') ?>/assets/js/diagram/index.js"></script>
<script>
    function getURL() {
        return '<?= base_url('/dashboard'); ?>'
    }

    $(document).ready(function() {
        AOS.init()
        // Indeks Pembangunan Manusia Kota Banjarbaru, Prov. Kalsel Dan Indonesia
        $.ajax({
            url: `${getURL()}/getData/64`,
            dataType: "json",
            success: function(res) {

                // Panggil fungsi chart
                const cht = lineChart(res, 'myChart', "Indeks Pembangunan Manusia Kota Banjarbaru")
                // Update nilai di card top
                $('.text1').html(cht)
            },
        });
        // Perbandingan Indeks Pembangunan Manusia Kabupaten / Kota Di Provinsi Kalsel
        $.ajax({
            url: `${getURL()}/getData/65`,
            dataType: "json",
            success: function(res) {
                // Panggil fungsi chart
                // barChart(res, 'myChart5', "Perbandingan Indeks Pembangunan Manusia Kabupaten / Kota Di Provinsi Kalsel")
            },
        });
        // Pertumbuhan Ekonomi Kota Banjarbaru
        $.ajax({
            url: `${getURL()}/getData/57`,
            dataType: "json",
            success: function(res) {
                // Panggil fungsi chart
                const cht = lineChart(res, 'myChart2', 'Pertumbuhan Ekonomi Kota Banjarbaru');
                // Update nilai di card top
                $('.text2').html(cht)
            },
        });
        // Angka Kemiskinan Kota Banjarbaru
        $.ajax({
            url: `${getURL()}/getData/99`,
            dataType: "json",
            success: function(res) {
                // Panggil fungsi chart
                const cht = lineChart(res, 'myChart3', 'Angka Kemiskinan Kota Banjarbaru');
                // Update nilai di card top
                $('.text4').html(cht)
            },
        });
        // Tingkat Pengangguran Terbuka Kota Banjarbaru
        $.ajax({
            url: `${getURL()}/getData/66`,
            dataType: "json",
            success: function(res) {
                // Panggil fungsi chart
                const cht = lineChart(res, 'myChart4', 'Tingkat Pengangguran Terbuka Kota Banjarbaru');
                // Update nilai di card top
                $('.text3').html(cht)
            },
        });

    });

    function barChart(res, chartId, title) {
        // Make Chart
        const ctx = document.getElementById(chartId);
        const myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [],
                datasets: [{}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}],
            },
            plugins: [ChartDataLabels],
            options: {
                indexAxis: 'y',
                maintainAspectRatio: false,
                scales: {
                    x: {
                        beginAtZero: false,

                    },
                    y: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: "end",
                        align: "right",
                        labels: {
                            title: {
                                font: {
                                    weight: "bold",
                                },
                            },
                            value: {
                                color: "black",
                            },
                        },
                    },
                    title: {
                        display: true,
                        text: title,
                        font: {
                            size: 12,
                        }
                    },
                    legend: {
                        display: false,
                        labels: {
                            // boxWidth: 12,
                            usePointStyle: true,
                            pointStyle: "rectRounded",
                        },
                        position: "bottom",
                    },
                    zoom: {
                        zoom: {
                            wheel: {
                                enabled: false,
                            },
                            pinch: {
                                enabled: false,
                            },
                            mode: "xy",
                        },
                        pan: {
                            enabled: false,
                            mode: "xy",
                        },
                    },
                },


            },
        });

        // meambil objek pada response
        const {
            objek
        } = res;

        // Mengambil lokasi unique
        const lokasi = [...new Set(objek.map(({
            nama_lokasi
        }) => nama_lokasi))];

        // mengambil label
        const labels = [...new Set(objek.map(({
            tahun
        }) => tahun))];
        lokasi.forEach((item, index) => {
            myChart.data.labels.push(item);
        });


        // membuat data sesuai lokasi


        labels.forEach((item, index) => {
            // filter data sesuai lokasi
            objek
                .filter(({
                    tahun
                }) => item == tahun)
                .forEach((e) => {
                    if (e.tahun === labels[labels.length - 1]) {
                        myChart.data.datasets[index].data.push(e.value);
                        myChart.data.datasets[index].label = e.tahun;

                    }
                    // Handle Lokasi Null
                    if (lokasi == "null") {
                        myChart.data.datasets[index].label = "BANJARBARU";
                    }
                });
        });

        // Remove Undefined Datasets
        myChart.data.datasets = myChart.data.datasets.filter((e) => {
            return e.data.length !== 0;
        });

        // Add backgroundColor, borderColor and borderWidth
        let backgroundColor = []
        myChart.data.labels.forEach((e) => {
            if (e === "Penduduk Banjarbaru" || e === "Banjarbaru") {
                backgroundColor.push(" rgba(255, 99, 132, 1)");
            } else {
                backgroundColor.push('rgba(54, 162, 235, 1)');
            }
            myChart.data.datasets[0].backgroundColor = backgroundColor;
            myChart.data.datasets[0].borderWidth = 1;
            myChart.data.datasets[0].borderRadius = 3;
        });

        // Update Chart
        myChart.update();
    }

    function lineChart(res, chartId, title) {
        // Make Chart
        const ctx = document.getElementById(chartId);
        const myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: [],
                datasets: [{}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}],
            },
            plugins: [ChartDataLabels],
            options: {
                tension: 0.4,
                fill: true,

                maintainAspectRatio: false,
                scales: {
                    x: {
                        beginAtZero: false,
                    },
                    y: {
                        ticks: {
                            display: false
                        },
                        grid: {
                            display: false
                        }

                    }
                },
                plugins: {
                    datalabels: {
                        anchor: "end",
                        align: "top",
                        labels: {
                            title: {
                                font: {
                                    weight: "bold",
                                },
                            },
                            value: {
                                color: "black",
                            },
                        },
                    },
                    title: {
                        display: true,
                        text: title,
                        font: {
                            size: 12,

                        },
                        padding: {
                            bottom: 30
                        }
                    },
                    legend: {
                        display: false,
                        labels: {
                            // boxWidth: 12,
                            usePointStyle: true,
                            pointStyle: "line",
                        },
                        position: "bottom",
                    },
                    zoom: {
                        zoom: {
                            wheel: {
                                enabled: false,
                            },
                            pinch: {
                                enabled: false,
                            },
                            mode: "xy",
                        },
                        pan: {
                            enabled: false,
                            mode: "xy",
                        },
                    },
                },


            },
        });

        // meambil objek pada response
        const {
            objek
        } = res;

        // Mengambil lokasi unique
        const lokasi = [...new Set(objek.map(({
            nama_lokasi
        }) => nama_lokasi))];

        // mengambil label
        const labels = [...new Set(objek.map(({
            tahun
        }) => tahun))];

        // me set label lima tahun terakhir
        labels.forEach((item) => {
            if (item >= labels[labels.length - 1] - 4) {
                myChart.data.labels.push(item);
            }
        });

        // membuat data sesuai lokasi
        let value = []; // Buat analisis

        lokasi.forEach((item, index) => {

            // filter data sesuai lokasi
            objek
                .filter(({
                    nama_lokasi
                }) => item == nama_lokasi)
                .forEach((e) => {
                    if (e.tahun >= labels[labels.length - 1] - 4 && e.nama_lokasi === 'Banjarbaru') {
                        // For analytic
                        if (e.nama_lokasi === "Banjarbaru" || e.nama_lokasi === "null") {
                            value.push(parseFloat(e.value));
                        } else if (e.nama_lokasi === "Penduduk Banjarbaru") {
                            value.push(parseFloat(e.value));
                        }
                        // End For Analytic
                        // Push Data
                        myChart.data.datasets[index].data.push(e.value);
                        myChart.data.datasets[index].label = e.nama_lokasi;
                    }
                    // Handle Lokasi Null
                    if (lokasi == "null") {
                        myChart.data.datasets[index].label = "BANJARBARU";
                    }
                });
        });

        // Remove Undefined Datasets
        myChart.data.datasets = myChart.data.datasets.filter((e) => {
            return e.data.length !== 0;
        });

        // Add backgroundColor, borderColor and borderWidth
        myChart.data.datasets.forEach((e) => {
            // 
            // if (e.label === "Penduduk Banjarbaru" || e.label === "Banjarbaru") {
            //     e.backgroundColor = 'rgba(233, 54, 92, .2)';
            //     e.borderColor = 'rgba(233, 54, 92, 1)';
            // } else {
            //     const c = randomColor();
            //     e.backgroundColor = c.fillColor;
            //     e.borderColor = c.borderColor;

            // }
            const c = randomColor();
            e.backgroundColor = c.fillColor;
            e.borderColor = c.borderColor;


        });

        // Update Chart
        myChart.update();
        const nilaiAkhir = value[value.length - 1]
        return nilaiAkhir;
        // For 4 card on top

    }
</script>


<?= $this->endSection() ?>