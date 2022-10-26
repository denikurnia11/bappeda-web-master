<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <p class="h5">Edit Data</p>
                    <small class="fs-6 fw-light lead text-muted">
                        <?php foreach ($objek as $option) : ?>
                            <?php if ($option['id_objek'] === $aggObj['id_objek']) : ?>
                                <?= $option['objek']; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="form-edit">
                <input type="hidden" name="id" value="<?= $aggObj['id_aggregateObject']; ?>">
                <div class="modal-body">

                    <div class="">
                        <select name="objek" class="form-control select2" aria-label="Default select example" readonly required style="display: none;">
                            <?php foreach ($objek as $option) : ?>
                                <?php if ($option['id_objek'] === $aggObj['id_objek']) : ?>
                                    <option selected value=<?php echo $option['id_objek'] ?>><?= $option['objek']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <select name="lokasi" class="form-control select2" aria-label="Default select example" required>
                            <option value="">Pilih lokasi...</option>
                            <?php foreach ($lokasi as $option) : ?>
                                <option <?= ($option['id_lokasi'] === $aggObj['id_lokasi']) ? 'selected' : '' ?> value=<?php echo $option['id_lokasi'] ?>><?= $option['nama_lokasi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3 d-none">
                        <label for="bulan" class="form-label">Bulan</label>
                        <select name="bulan" class="form-control select2 " aria-label="Default select example" required>
                            <option value="">Pilih bulan...</option>
                            <?php foreach ($bulan as $option) : ?>
                                <option <?= ($option['id_bulan'] === $aggObj['id_bulan']) ? 'selected' : '' ?> value=<?php echo $option['id_bulan'] ?>><?= $option['bulan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <select name="tahun" class="form-control select2" aria-label="Default select example" required>
                            <option value="">Pilih tahun...</option>
                            <?php foreach ($tahun as $option) : ?>
                                <option <?= ($option['id_tahun'] === $aggObj['id_tahun']) ? 'selected' : '' ?> value=<?php echo $option['id_tahun'] ?>><?= $option['tahun']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="attribut" class="form-label">Attribut</label>
                        <select name="attribut" class="form-control select2" aria-label="Default select example" required>
                            <option value="">Pilih attribut...</option>
                            <?php foreach ($attribut as $option) : ?>
                                <option <?= ($option['id_attribut'] === $aggObj['id_attribut']) ? 'selected' : '' ?> value=<?php echo $option['id_attribut'] ?>><?= $option['attribut']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="value" class="form-label">Value</label>
                        <input type="text" class="form-control" id="value" placeholder="Masukkan value..." name="value" required autocomplete="off" value="<?= $aggObj['value']; ?>">
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