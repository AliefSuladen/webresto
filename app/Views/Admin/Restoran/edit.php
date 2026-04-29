<?= $this->extend('template/temp-backend') ?>

<?= $this->section('content') ?>

<div class="col-md-8">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Restoran</h3>
        </div>

        <form action="<?= base_url('restoran/update/' . $restoran['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="card-body">

                <div class="form-group">
                    <label>Nama Restoran</label>
                    <input type="text" name="nama" value="<?= $restoran['nama'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"><?= $restoran['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"><?= $restoran['deskripsi'] ?></textarea>
                </div>

                <div class="form-group">
                    <label>Gambar Lama</label><br>
                    <?php if ($restoran['gambar']): ?>
                        <img src="<?= base_url('uploads/restoran/' . $restoran['gambar']) ?>" width="120">
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label>Ganti Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-primary">Update</button>
                <a href="<?= base_url('restoran') ?>" class="btn btn-secondary">Kembali</a>
            </div>

        </form>
    </div>

</div>

<?= $this->endSection() ?>