<?= $this->extend('template/temp-backend') ?>
<?= $this->section('content') ?>

<div class="col-12">

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Data Restoran</h3>

            <a href="<?= base_url('restoran/create') ?>" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>

        <div class="card-body">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    foreach ($restoran as $r): ?>
                        <tr>
                            <td><?= $no++ ?></td>

                            <td>
                                <?php if ($r['gambar']): ?>
                                    <img src="<?= base_url('uploads/restoran/' . $r['gambar']) ?>" width="80">
                                <?php endif; ?>
                            </td>

                            <td><?= $r['nama'] ?></td>
                            <td><?= $r['alamat'] ?></td>

                            <td>
                                <a href="<?= base_url('restoran/edit/' . $r['id']) ?>" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= base_url('restoran/delete/' . $r['id']) ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(function() {
        $("#table").DataTable();
    });
</script>
<?= $this->endSection() ?>