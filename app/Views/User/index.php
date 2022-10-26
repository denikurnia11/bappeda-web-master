<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : "null";
?>
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4"><?= $title; ?></h1>
            <p class="mb-0"><?= $desc; ?></p>
        </div>
        <div>
            <button type="button" class="btn btn-info mb-2 tombolTambah"> <i class="fa fa-plus"></i> Tambah Data</button>
            <button class="btn btn-info mb-2 loading" type="button" disabled style="display: none;">
                <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                Loading...
            </button>
        </div>
    </div>
</div>

<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <!-- Loading Animation -->
        <div class="loading d-flex justify-content-center card-loading">
            <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
            <p>Loading...</p>
        </div>

        <!-- Isi tabel -->
        <div class="isi-tabel"></div>


        <!-- Modal -->
        <div class="view-modal"></div>
    </div>
</div>


<script>
    function getURL() {
        let url = window.location.href;
        // Cek Mobile Akses
        const mobile = '<?= $mobile; ?>'
        if (mobile == 'true') {
            url = url.split('?')[0]
        }
        return url;
    }

    function getData() {
        $.ajax({
            url: `${getURL()}/getData`,
            dataType: "json",

            beforeSend: function() {
                $(".card-loading").removeClass("d-none");
                $(".isi-tabel").html("");
            },
            success: function(response) {
                $(".card-loading").addClass("d-none");
                // Render isi table
                let isi = '';
                response.user.forEach((e, index) => {
                    isi += ` <tr>
                                    <th width="5%" scope="row" class="text-center">${index+1}</th>
                                    <td>${e.username}</td>
                                    <td>${e.password}</td>                                   
                                    <td width="10%" class="text-center">
                                        <button id="${e.id_user}" class="btnAction btn btn-success btn-sm btnEdit"><i class="fas fa-edit text-white iconEdit"></i></button>
                                        <button id="${e.id_user}" class="btn btn-danger btn-sm btnHapus"><i class="fas fa-trash-alt iconHapus"></i></button>
                                    </td>
                                </tr>`
                });
                $(".isi-tabel")
                    .html(`<div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0 rounded">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="border-0 rounded-start">No</th>
                                            <th class="border-0">Username</th>
                                            <th class="border-0">Password (SHA1)</th>
                                            <th class="border-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${isi}
                                    </tbody>
                                </table>
                            </div>`);
                $('.table').DataTable();

            },
        });
    }

    $(document).ready(function() {
        getData();

        // Tambah
        $(document).on("click", ".tombolTambah", function() {
            $.ajax({
                url: `${getURL()}/tambah`,
                dataType: "json",
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
                    if (res.err) {
                        getPesanError(res.err);
                    } else {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Data Telah Tersimpan.",
                            showConfirmButton: true,
                            timer: 0,
                        });
                        $(".modal").modal("hide");
                        getData();

                    }
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
                    if (res.err) {
                        getPesanError(res.err);
                    } else {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Data Telah Terupdate.",
                            showConfirmButton: true,
                            timer: 0,
                        });
                        $(".modal").modal("hide");
                        getData();

                    }
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
                            getData();

                        },
                        error: function(response) {
                            console.log(response.responseText);
                        },
                    });
                }
            });
        });
    });

    // Pesan error untuk validasi input
    function getPesanError(res) {
        // Error Input Tahun
        if (res.username) {
            $('#username').addClass('is-invalid')
            $('.errorUsername').html(res.username)
        } else {
            $('#username').removeClass('is-invalid')
            $('.errorUsername').html('')
        }
    }
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