<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Tambah Data Tahun</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="form-tambah">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" id="tahun" min="1900" max="2099" step="1" class="form-control" placeholder="Masukkan tahun..." name="tahun" required autocomplete="off">
                        <div class="invalid-feedback errorTahun"></div>
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