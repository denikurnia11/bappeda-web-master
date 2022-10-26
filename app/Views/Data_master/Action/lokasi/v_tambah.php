<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Tambah Data Lokasi</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="form-tambah">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                        <input type="text" class="form-control" id="nama_lokasi" placeholder="Masukkan nama lokasi..." name="nama_lokasi" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_lokasi" class="form-label">Jenis Lokasi</label>
                        <select class="form-select" id="jenis_lokasi" aria-label="Default select example" name="jenis_lokasi" required>
                            <option selected value="">Pilih jenis lokasi</option>
                            <option value="kecamatan">Kecamatan</option>
                            <option value="kabupaten">Kabupaten</option>
                            <option value="provinsi">Provinsi</option>
                            <option value="negara">Negara</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btnSimpan">Tambah</button>
                    <button class="btn btn-info mb-2 btnLoading" type="button" disabled style="display: none;">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>

                    <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>