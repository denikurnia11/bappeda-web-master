<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : "null";
?>
<div class="row mb-4">
    <div class="col-12 col-md-6 mb-lg-0 mb-4">
        <div class="card border-0 shadow mb-4 h-100">
            <div class="card-body">
                <div class="mb-1 mb-lg-0">
                    <p class="display-5 fw-bolder">Filter Pencarian</p>
                </div>
                <form action="" method="post" id="form-statistik" class="mt-4">
                    <label class="my-1 me-2" for="kategori">Kategori</label>
                    <div class="input-group mb-1">
                        <select class="form-select" id="select_kategori" name="kategori" aria-label="Default select example">
                            <option value="" selected disabled>Pilih Kategori...</option>
                            <?php foreach ($kategori as $option) : ?>
                                <option value=<?php echo $option['id_kategori'] ?>><?= $option['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
                <form action="" method="post" id="form-statistik" class="">
                    <label class="my-1 me-2" for="objek">Objek</label>
                    <div class="input-group ">
                        <select class="form-select" id="select_objek" name="objek" aria-label="Default select example">
                            <option value="" selected disabled>Pilih Kategori Terlebih Dahulu...</option>
                        </select>
                    </div>
                </form>
                <form action="" method="post" id="form-statistik2" class="d-none">
                    <label class="my-1 me-2" for="objek">Objek 2 (Optional)</label>
                    <div class="input-group ">
                        <select class="form-select" id="select_objek2" name="objek" aria-label="Default select example">
                            <option value="" selected disabled>Pilih Objek (Optional)...</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 ">
        <div class="card border-0 shadow mb-4 h-100 ">
            <div class="card-body d-flex h-100 align-items-center justify-content-center flex-column ">
                <h1 class="nilai text-center fw-bolder">-</h1>
                <p class="deskripsi-analisis text-muted fw-bold text-tahun">Statistik</p>
            </div>
        </div>
    </div>
</div>
<!-- Loading Animation -->
<div class="card-loading card border-0 shadow mb-4 d-none">
    <div class="card-body card-body-chart">
        <div class="loading d-flex justify-content-center">
            <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
            <p>Loading...</p>
        </div>
    </div>
</div>
<div class="tabs-content d-none">
    <!-- Tab Nav -->
    <div class="row">
        <div class="col-md-6">
            <ul class="nav nav-pills nav-fill " id="tabs-text" role="tablist">
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link active" id="tabs-text-1-tab" data-bs-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Bar Chart</a>
                </li>
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link" id="tabs-text-2-tab" data-bs-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="true">Line Chart</a>
                </li>
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link" id="tabs-text-3-tab" data-bs-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="true">Datasets</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- End of Tab Nav -->
    <div class="card border-0 rounded-0 rounded-bottom mx-1 card-chart">
        <div class="card-body p-3">
            <div class="tab-content" id="tabcontent1">
                <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                    <div class="row ">
                        <div class="col d-flex justify-content-end">
                            <p class="text-muted text-center text-zoom me-4" style="font-size: .85rem;"></p>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex gap-1 justify-content-end filter-dates">
                                <select name="" id="" class="filter-date start-date form-select  w-25">
                                    <option value="">Start Date</option>
                                </select>
                                <select name="" id="" class="filter-date end-date form-select  w-25">
                                    <option value="">End Date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="isi-chart"></div>
                    <div class="row">
                        <div class="btn-action d-flex justify-content-center">
                            <button class="chart-action zoom-action mt-3">Reset Zoom</button>
                            <button class="chart-action color-action mt-3">Change Color</button>
                            <button class="chart-action label-action mt-3">Hide Labels</button>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                    <div class="row ">
                        <div class="col d-flex justify-content-end">
                            <p class="text-muted text-center text-zoom me-4" style="font-size: .85rem;"></p>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex gap-1 justify-content-end filter-dates">
                                <select name="" id="" class="filter-date start-date2 form-select  w-25">
                                    <option value="">Start Date</option>
                                </select>
                                <select name="" id="" class="filter-date end-date2 form-select  w-25">
                                    <option value="">End Date</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="isi-chart2"></div>
                    <div class="row">
                        <div class="btn-action d-flex justify-content-center">
                            <button class="chart-action zoom-action2 mt-3">Reset Zoom</button>
                            <button class="chart-action color-action2 mt-3">Change Color</button>
                            <button class="chart-action fill-action mt-3">Fill Chart</button>
                            <button class="chart-action label-action2 mt-3">Hide Labels</button>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                    <div class="isi-tabel"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="deskripsi-chart d-none">Desc here...</div>
</div>
<div class="tabs-content2 d-none">
    <!-- Tab Nav -->
    <div class="row">
        <div class="col-md-6">
            <ul class="nav nav-pills nav-fill " id="tabs-text" role="tablist">
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link active" id="tabs-text-4-tab" data-bs-toggle="tab" href="#tabs-text-4" role="tab" aria-controls="tabs-text-4" aria-selected="true">Bar Chart</a>
                </li>
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link" id="tabs-text-5-tab" data-bs-toggle="tab" href="#tabs-text-5" role="tab" aria-controls="tabs-text-5" aria-selected="true">Line Chart</a>
                </li>
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link" id="tabs-text-6-tab" data-bs-toggle="tab" href="#tabs-text-6" role="tab" aria-controls="tabs-text-6" aria-selected="true">Datasets</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- End of Tab Nav -->
    <div class="card card-chart border-0 rounded-0 rounded-bottom mx-1">
        <div class="card-body p-3">
            <div class="tab-content" id="tabcontent4">
                <div class="tab-pane fade show active" id="tabs-text-4" role="tabpanel" aria-labelledby="tabs-text-4-tab">
                    <div class="row ">
                        <div class="col d-flex justify-content-end">
                            <p class="text-muted text-center text-zoom me-4" style="font-size: .85rem;"></p>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex gap-1 justify-content-end filter-dates">
                                <select name="" id="" class="filter-date start-date3 form-select  w-25">
                                    <option value="">Start Date</option>
                                </select>
                                <select name="" id="" class="filter-date end-date3 form-select  w-25">
                                    <option value="">End Date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="isi-chart3"></div>
                    <div class="row">
                        <div class="btn-action d-flex justify-content-center">
                            <button class="chart-action zoom-action3 mt-3">Reset Zoom</button>
                            <button class="chart-action color-action3 mt-3">Change Color</button>
                            <button class="chart-action label-action3 mt-3">Hide Labels</button>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tabs-text-5" role="tabpanel" aria-labelledby="tabs-text-5-tab">
                    <div class="row ">
                        <div class="col d-flex justify-content-end">
                            <p class="text-muted text-center text-zoom me-4" style="font-size: .85rem;"></p>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex gap-1 justify-content-end filter-dates">
                                <select name="" id="" class="filter-date start-date4 form-select  w-25">
                                    <option value="">Start Date</option>
                                </select>
                                <select name="" id="" class="filter-date end-date4 form-select  w-25">
                                    <option value="">End Date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="isi-chart4"></div>
                    <div class="row">
                        <div class="btn-action d-flex justify-content-center">
                            <button class="chart-action zoom-action4 mt-3">Reset Zoom</button>
                            <button class="chart-action color-action4 mt-3">Change Color</button>
                            <button class="chart-action fill-action4 mt-3">Fill Chart</button>
                            <button class="chart-action label-action4 mt-3">Hide Labels</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-text-6" role="tabpanel" aria-labelledby="tabs-text-6-tab">
                    <div class="isi-tabel2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="deskripsi-chart2 d-none">Desc here...</div>
</div>
<!-- For Geografi -->
<div class="tabs-content3 d-none">
    <!-- Tab Nav -->
    <div class="row">
        <div class="col-md-6">
            <ul class="nav nav-pills nav-fill " id="tabs-text" role="tablist">
                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link active" id="tabs-text-7-tab" data-bs-toggle="tab" href="#tabs-text-7" role="tab" aria-controls="tabs-text-7" aria-selected="true">Pie Chart</a>
                </li>

                <li class="nav-item">
                    <a class="col bg-primary text-white rounded-0 rounded-top py-1 nav-link" id="tabs-text-8-tab" data-bs-toggle="tab" href="#tabs-text-8" role="tab" aria-controls="tabs-text-8" aria-selected="true">Datasets</a>
                </li>
            </ul>

        </div>
    </div>
    <!-- End of Tab Nav -->
    <div class="card card-chart border-0 rounded-0 rounded-bottom mx-1">
        <div class="card-body p-3">
            <div class="tab-content" id="tabcontent7">
                <div class="tab-pane fade show active" id="tabs-text-7" role="tabpanel" aria-labelledby="tabs-text-7-tab">
                    <div class="row ">
                        <div class="col d-flex justify-content-end">
                            <p class="text-muted text-center text-zoom me-4" style="font-size: .85rem;"></p>
                        </div>
                    </div>
                    <div class="isi-chart5"></div>
                    <div class="row">
                        <div class="btn-action d-flex justify-content-center">
                            <!-- <button class="chart-action zoom-action3 mt-3">Reset Zoom</button> -->
                            <button class="chart-action color-action5 mt-3">Change Color</button>
                            <button class="chart-action label-action5 mt-3">Hide Labels</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-text-8" role="tabpanel" aria-labelledby="tabs-text-8-tab">
                    <div class="isi-tabel3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="deskripsi-chart d-none">Desc here...</div> -->
</div>

<!-- Modal -->
<div class="view-modal"></div>

<!-- Chart -->
<script src="<?= base_url('public') ?>/assets/js/diagram/index.js"></script>
<script src="<?= base_url('public') ?>/assets/js/diagram/bar-chart.js"></script>
<script src="<?= base_url('public') ?>/assets/js/diagram/line-chart.js"></script>
<script src="<?= base_url('public') ?>/assets/js/diagram/pie-chart.js"></script>

<script>
    function getURL() {
        return '<?= base_url('/statistik'); ?>'
    }

    // Untuk GET query dari tombol dashboard
    const kategori = <?= isset($_GET['kategori']) ? $_GET['kategori'] : "null"; ?>;
    if (kategori) {
        $('#select_kategori').val(kategori)
        refreshKategori(kategori)
    }
    const objek = <?= isset($_GET['objek']) ? $_GET['objek'] : "null"; ?>;
    if (objek) {
        $('#select_objek').val(objek)
        refreshObjek(objek)
    }

    function getData(id, objek2 = false, geo = false) {
        $.ajax({
            url: `${getURL()}/getDataById/${id}`,
            dataType: "json",
            beforeSend: function() {
                $(".card-loading").removeClass("d-none");
                if (!objek2) {
                    $(".isi-tabel").html("");
                } else if (geo) {
                    $(".isi-tabel3").html('')
                } else {
                    $(".isi-tabel2").html("");
                }
            },
            success: function(response) {
                $(".card-loading").addClass("d-none");
                // Get objek kategori dari dropdown
                const id_objek = $('#select_objek').find(":selected").val();
                let kategori = ''
                response.objek.forEach(e => {
                    if (id_objek === e.id_objek) {
                        kategori = e.kategori;
                    }
                });

                // Render isi table
                let isi = '';
                response.aggObj.forEach((e, index) => {
                    isi += ` <tr>
                                    <th width="5%" scope="row" class="text-center">${index+1}</th>
                                    <td>${e.nama_lokasi}</td>
                                    <td>${e.tahun}</td>
                                    <td>${e.attribut=='null' ? '-' : e.attribut}</td>
                                    <td>${e.value}</td>
                                    <td width="10%" class="text-center">
                                        <button id="${e.id_aggregateObject}" class="btnAction btn btn-success btn-sm btnEdit"><i class="fas fa-edit text-white iconEdit"></i></button>
                                        <button id="${e.id_aggregateObject}" class="btn btn-danger btn-sm btnHapus"><i class="fas fa-trash-alt iconHapus"></i></button>
                                    </td>
                                </tr>`
                });
                const content = `<div class="d-flex justify-content-between w-100 flex-wrap">
                                        <button type="button" class="btn btn-info mb-2 tombolTambah"> <i class="fa fa-plus"></i> Tambah Data</button>
                                        <button class="btn btn-info mb-2 loading" type="button" disabled style="display: none;">
                                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-0 rounded-start">No</th>
                                                    <th class="border-0">Lokasi</th>
                                                    <th class="border-0">Tahun</th>
                                                    <th class="border-0">Attribut</th>
                                                    <th class="border-0">Value</th>
                                                    <th class="border-0 text-center">Action</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            ${isi}
                                        </tbody>
                                    </table>
                                    </div>`
                if (!objek2) {
                    $(".isi-tabel").html(content);
                } else if (geo) {
                    $(".isi-tabel3").html(content)
                } else {
                    $(".isi-tabel2").html(content);
                }
                $('.table').DataTable();

            },
        });
    }

    function refreshKategori(id_kategori) {
        // Hide Objek 2
        $('#form-statistik2').addClass('d-none')
        // Ubah isi card analitik
        $('.deskripsi-analisis').html('Statistik')
        $('.nilai').html('-')
        // Remove deskripsi
        $(".deskripsi-chart").addClass("d-none")
        $(".deskripsi-chart2").addClass("d-none")
        // Hide Tabs-Content
        $(".tabs-content").addClass("d-none");
        $(".tabs-content2").addClass("d-none");
        $(".tabs-content3").addClass("d-none");
        // Kosongkan isi tabel
        $(".isi-tabel").html("")
        $(".isi-tabel2").html("")
        let option = ''
        <?php foreach ($objek as $option) : ?>
            if (id_kategori == '<?= $option['id_kategori']; ?>') {
                option += ' <option value=<?= $option['id_objek'] ?>><?= $option['objek']; ?></option>';
                $('#select_objek').html(`<option value="" selected disabled>Pilih Objek...</option>` + option);
            }
        <?php endforeach; ?>
    }

    function refreshObjek(id_objek) {
        $('#myChart').remove(); // this is my <canvas> element
        $('#myChart2').remove(); // this is my <canvas> element       
        $('#myChart5').remove(); // this is my <canvas> element       
        // Add loading animation
        $(".card-loading").removeClass("d-none");
        // Hide Tabs Content
        $(".tabs-content").addClass("d-none");
        // Add canvas di bawah judul
        $('.isi-chart').last().append('<canvas id="myChart" ><canvas>');
        $('.isi-chart2').last().append('<canvas id="myChart2" ><canvas>');
        $('.isi-chart5').last().append('<canvas id="myChart5" ><canvas>');
        // Make Chart
        $.ajax({
            url: `${getURL()}/getDataByIdd/${id_objek}`,
            dataType: "json",
            success: function(res) {
                const judul_objek = $("#select_objek").find(":selected").html().toUpperCase();
                $(".card-loading").addClass("d-none");
                $(".deskripsi-chart").removeClass("d-none");
                // Panggil fungsi chart
                if ($('#select_kategori').find(":selected").html() === 'Geografi') {
                    // Show Tabs Content
                    $(".tabs-content3").removeClass("d-none");
                    const pieChart = new PieChart(res.objek, 'myChart5', judul_objek);
                    actionGeo(pieChart)
                    getData(id_objek, true, true);
                } else {
                    // Render Objek 2
                    $('#form-statistik2').removeClass('d-none')
                    const id_kategori = $('#select_kategori').find(":selected").val();
                    let option = ''
                    <?php foreach ($objek as $option) : ?>
                        if (id_kategori === '<?= $option['id_kategori']; ?>') {
                            option += ' <option value=<?= $option['id_objek'] ?>><?= $option['objek']; ?></option>';
                            $('#select_objek2').html(`<option value="" selected disabled>Pilih Objek...</option>` + option);
                        }
                    <?php endforeach; ?>
                    // Show Tabs Content
                    $(".tabs-content").removeClass("d-none");
                    const chart = new BarChart(res.objek, 'myChart', judul_objek);
                    const chart2 = new LineChart(res.objek, 'myChart2', judul_objek);
                    // Action, Di File public/assets/js/diagram/index.js
                    action(chart, chart2)
                    analisis(chart, 'deskripsi-chart')
                    getData(id_objek);
                }
            },
        });
    }

    $(document).ready(function() {
        $('#select_kategori').on('change', function(e) {
            const id_kategori = $(this).find(":selected").val();
            refreshKategori(id_kategori)
        });

        $('#select_objek').on('change', function(e) {
            const id_objek = $(this).find(":selected").val();
            refreshObjek(id_objek)

        });
        $('#select_objek2').on('change', function(e) {
            $('#myChart3').remove(); // this is my <canvas> element
            $('#myChart4').remove(); // this is my <canvas> element
            const id_objek = $(this).find(":selected").val();
            // Add loading animation
            $(".card-loading").removeClass("d-none");
            // Hide Tabs Content
            $(".tabs-content2").addClass("d-none");
            // Ambil data-kategori dari attribut button
            const kategori = $(this).attr('data-kategori')
            // Add canvas di bawah judul
            $('.isi-chart3').last().append('<canvas id="myChart3" ><canvas>');
            $('.isi-chart4').last().append('<canvas id="myChart4" ><canvas>');

            // Make Chart
            $.ajax({
                url: `${getURL()}/getDataByIdd/${id_objek}`,
                dataType: "json",
                success: function(res) {
                    const judul_objek = $("#select_objek2").find(":selected").html().toUpperCase();
                    $(".card-loading").addClass("d-none");
                    $(".deskripsi-chart2").removeClass("d-none");
                    // Show Tabs Content
                    $(".tabs-content2").removeClass("d-none");
                    // Panggil fungsi chart
                    const chart3 = new BarChart(res.objek, 'myChart3', judul_objek);
                    const chart4 = new LineChart(res.objek, 'myChart4', judul_objek);
                    // Action, Di File public/assets/js/diagram/index.js
                    action2(chart3, chart4)
                    analisis(chart3, 'deskripsi-chart2')
                },
            });
            getData(id_objek, true);
        });


        // Responsive for chart
        function myFunction(x) {
            if (x.matches) { // If media query matches
                $('.filter-dates').removeClass('justify-content-end')
                $('.filter-dates').addClass('justify-content-center')
            } else {

                $('.filter-dates').addClass('justify-content-end')
                $('.filter-dates').removeClass('justify-content-center')
            }
        }

        var x = window.matchMedia("(max-width: 576px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes

        // MULTIPLE INPUT
        // membatasi jumlah inputan
        const maxGroup = 11;

        //melakukan proses multiple input 
        $(document).on("click", ".addMore", function() {
            if ($('body').find('.fieldGroup').length < maxGroup) {
                const fieldHTML = '<div class="form-group fieldGroup my-3">' + $(".fieldGroupCopy").html() + '</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });
        //remove fields group
        $("body").on("click", ".remove", function() {
            $(this).parents(".fieldGroup").remove();
        });
        // END MULTIPLE INPUT


        // Tambah
        $(document).on("click", ".tombolTambah", function() {
            $.ajax({
                url: `${getURL()}/tambah`,
                dataType: "json",
                // id_objek untuk di oper pada form tambah
                data: {
                    id_objek: $('#select_objek').find(":selected").val()
                },
                beforeSend: function() {
                    $(".tombolTambah").hide();
                    $(".loading").css("display", "block");
                },
                complete: function() {
                    $(".tombolTambah").show();
                    $(".loading").css("display", "none");
                },
                success: function(response) {
                    $(".view-modal").html(response);
                    $(".modal").modal("show");
                },
            });
        });
        $(document).on("submit", "#form-tambah", function(e) {
            e.preventDefault();

            $.ajax({
                url: `${getURL()}/save`,
                type: "post",
                dataType: "json",
                data: $(this).serialize(),
                beforeSend: function() {
                    $(".btnSimpan").hide();
                    $(".btnLoading").css("display", "block");
                },
                complete: function() {
                    $(".btnSimpan").show();
                    $(".btnLoading").css("display", "none");
                },
                success: function(res) {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Data Telah Tersimpan.",
                        showConfirmButton: true,
                        timer: 0,
                    });
                    $(".modal").modal("hide");
                    getData($('#select_objek').find(":selected").val());
                },
                error: function(jqXHR, exception) {
                    showErrorSystem(jqXHR, exception);
                },
            });
        });

        // Edit
        $(document).on("click", ".btnEdit", function() {
            $.ajax({
                url: `${getURL()}/edit`,
                dataType: "json",
                data: {
                    id: $(this).attr("id"),
                },
                beforeSend: function() {
                    $(".iconEdit").removeClass("fas fa-edit");
                    $(".btnEdit").attr("disabled", "TRUE");
                    $(".iconEdit").addClass("spinner-border spinner-border-sm");
                },
                complete: function() {
                    $(".iconEdit").removeClass("spinner-border spinner-border-sm");
                    $(".btnEdit").removeAttr("disabled");
                    $(".iconEdit").addClass("fas fa-edit");
                },
                success: function(response) {
                    $(".view-modal").html(response);
                    $(".modal").modal("show");
                },
            });
        });
        $(document).on("submit", "#form-edit", function(e) {
            e.preventDefault();

            $.ajax({
                url: `${getURL()}/update`,
                type: "post",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $(".btnUpdate").hide();
                    $(".btnLoading").css("display", "block");
                },
                complete: function() {
                    $(".btnUpdate").show();
                    $(".btnLoading").css("display", "none");
                },
                success: function(res) {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Data Telah Terupdate.",
                        showConfirmButton: true,
                        timer: 0,
                    });
                    $(".modal").modal("hide");
                    getData($('#select_objek').find(":selected").val());
                },
                error: function(jqXHR, exception) {
                    showErrorSystem(jqXHR, exception);
                },
            });
        });

        // Hapus
        $(document).on("click", ".btnHapus", function() {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus!",
                cancelButtonText: "Batal",

            }).then((result) => {
                if (result.isConfirmed) {
                    const id = $(this).attr("id");
                    $.ajax({
                        type: "POST",
                        url: `${getURL()}/delete`,
                        data: {
                            id: id,
                        },
                        beforeSend: function() {
                            $(".iconHapus").removeClass("fas fa-trash-alt");
                            $(".iconHapus").addClass(
                                "spinner-border spinner-border-sm"
                            );
                        },
                        complete: function() {
                            $(".iconHapus").removeClass(
                                "spinner-border spinner-border-sm"
                            );
                            $(".iconHapus").addClass("fas fa-trash-alt");
                        },
                        success: function() {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: "Data Berhasil Dihapus.",
                                showConfirmButton: true,
                                timer: 0,
                            });
                            getData($('#select_objek').find(":selected").val());

                        },
                        error: function(response) {
                            console.log(response.responseText);
                        },
                    });
                }
            });
        });
    });

    // Pesan error system
    function showErrorSystem(jqXHR, exception) {
        var msg = "";
        if (jqXHR.status === 0) {
            msg = "Not connect.\n Verify Network.";
        } else if (jqXHR.status == 404) {
            msg = "Requested page not found. [404]";
        } else if (jqXHR.status == 500) {
            msg = "Internal Server Error [500].";
        } else if (exception === "parsererror") {
            msg = "Requested JSON parse failed.";
        } else if (exception === "timeout") {
            msg = "Time out error.";
        } else if (exception === "abort") {
            msg = "Ajax request aborted.";
        } else {
            msg = "Uncaught Error.\n" + jqXHR.responseText;
        }
        alert(msg);
    }
</script>

<?= $this->endSection() ?>