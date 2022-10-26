<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit Data Objek</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="form-edit">
                <input type="hidden" name="id" value="<?= $objek['id_objek']; ?>">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="objek" class="form-label">Objek</label>
                        <input type="text" class="form-control" id="objek" placeholder="Masukkan objek..." name="objek" required autocomplete="off" value="<?= $objek['objek']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" class="form-control select2" aria-label="Default select example" required>
                            <option value="">Pilih kategori...</option>
                            <?php foreach ($kategori as $option) : ?>
                                <option <?= $objek['id_kategori'] === $option['id_kategori'] ? 'selected' : ''; ?> value=<?php echo $option['id_kategori'] ?>><?= $option['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btnUpdate">Edit</button>
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