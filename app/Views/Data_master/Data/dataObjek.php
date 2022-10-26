<table class="table table-centered table-nowrap mb-0 rounded">
    <thead class="thead-light">
        <tr>
            <th class="border-0 rounded-start">No</th>
            <th class="border-0">Objek</th>
            <th class="border-0">Kategori</th>
            <th class="border-0 text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!$objek) : ?>
            <tr>
                <th colspan="3" class="text-center">Tidak ada data yang tersedia pada tabel ini</th>
            </tr>
        <?php endif; ?>
        <?php $no = 1 ?>
        <?php foreach ($objek as $row) : ?>
            <tr>
                <th width="5%" scope="row" class="text-center"><?= $no++; ?></th>
                <td><?= $row['objek']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td width="10%" class="text-center">
                    <button id="<?= $row['id_objek']; ?>" class="btnAction btn btn-success btn-sm btnEdit"><i class="fas fa-edit text-white iconEdit"></i></button>
                    <button id="<?= $row['id_objek']; ?>" class="btn btn-danger btn-sm btnHapus"><i class="fas fa-trash-alt iconHapus"></i></button>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('.table').DataTable();
    })
</script>