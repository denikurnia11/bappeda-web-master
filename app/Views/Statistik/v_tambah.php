<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <p class="h5"> Tambah Data</p>
                    <small class="fs-6 fw-light lead text-muted">
                        <?php foreach ($objek as $option) : ?>
                            <?php if ($option['id_objek'] === $id_objek) : ?>
                                <?= $option['objek']; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </small>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form method="post" action="" id="form-tambah">
                    <div class="form-group fieldGroup">
                        <div class="input-group">
                            <select name="objek[]" class="form-control select2" aria-label="Default select example" readonly required style="display: none;">
                                <?php foreach ($objek as $option) : ?>
                                    <?php if ($option['id_objek'] === $id_objek) : ?>
                                        <option selected value=<?php echo $option['id_objek'] ?>><?= $option['objek']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <select name="lokasi[]" class="form-control select2" aria-label="Default select example">
                                <option value="404">Pilih lokasi...</option>
                                <?php foreach ($lokasi as $option) : ?>
                                    <?php if ($option['id_lokasi'] != 404) : ?>
                                        <option value=<?php echo $option['id_lokasi'] ?>><?= $option['nama_lokasi']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <select name="bulan[]" class="form-control select2 d-none" aria-label="Default select example">
                                <option value="404">Pilih Bulan...</option>
                                <?php foreach ($bulan as $option) : ?>
                                    <?php if ($option['id_bulan'] != 404) : ?>
                                        <option value=<?php echo $option['id_bulan'] ?>><?= $option['bulan']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <select required name="tahun[]" class="form-control select2" aria-label="Default select example">
                                <option value="404">Pilih tahun...</option>
                                <?php foreach ($tahun as $option) : ?>
                                    <?php if ($option['id_tahun'] != 404) : ?>
                                        <option value=<?php echo $option['id_tahun'] ?>><?= $option['tahun']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <select name="attribut[]" class="form-control select2" aria-label="Default select example">
                                <option value="404">Pilih attribut...</option>
                                <?php foreach ($attribut as $option) : ?>
                                    <?php if ($option['id_attribut'] != 404) : ?>
                                        <option value=<?php echo $option['id_attribut'] ?>><?= $option['attribut']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <input type="text" class="form-control" id="value" placeholder="Masukkan value..." name="value[]" required autocomplete="off">
                            <div class="input-group-addon ms-3">
                                <a class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btnSimpan mt-2">Tambah</button>
                    <button class="btn btn-info mt-2 btnLoading" type="button" disabled style="display: none;">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>

                </form>
                <div class="form-group fieldGroupCopy" style="display: none;">
                    <div class="input-group">
                        <select name="objek[]" class="form-control select2" aria-label="Default select example" readonly required style="display: none;">
                            <?php foreach ($objek as $option) : ?>
                                <?php if ($option['id_objek'] === $id_objek) : ?>
                                    <option selected value=<?php echo $option['id_objek'] ?>><?= $option['objek']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <select name="lokasi[]" class="form-control select2" aria-label="Default select example">
                            <option value="404">Pilih lokasi...</option>
                            <?php foreach ($lokasi as $option) : ?>
                                <?php if ($option['id_lokasi'] != 404) : ?>
                                    <option value=<?php echo $option['id_lokasi'] ?>><?= $option['nama_lokasi']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <select name="bulan[]" class="form-control select2 d-none" aria-label="Default select example">
                            <option value="404">Pilih Bulan...</option>
                            <?php foreach ($bulan as $option) : ?>
                                <?php if ($option['id_bulan'] != 404) : ?>
                                    <option value=<?php echo $option['id_bulan'] ?>><?= $option['bulan']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <select required name="tahun[]" class="form-control select2" aria-label="Default select example">
                            <option value="404">Pilih tahun...</option>
                            <?php foreach ($tahun as $option) : ?>
                                <?php if ($option['id_tahun'] != 404) : ?>
                                    <option value=<?php echo $option['id_tahun'] ?>><?= $option['tahun']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <select name="attribut[]" class="form-control select2" aria-label="Default select example">
                            <option value="404">Pilih attribut...</option>
                            <?php foreach ($attribut as $option) : ?>
                                <?php if ($option['id_attribut'] != 404) : ?>
                                    <option value=<?php echo $option['id_attribut'] ?>><?= $option['attribut']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="form-control" id="value" placeholder="Masukkan value..." name="value[]" required autocomplete="off">
                        <div class="input-group-addon">
                            <a href="javascript:void(0)" class="btn btn-danger remove ms-3"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>