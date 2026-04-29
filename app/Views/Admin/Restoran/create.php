<?= $this->extend('template/temp-backend') ?>

<?= $this->section('content') ?>

<div class="col-md-8">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Restoran</h3>
        </div>

        <form action="<?= base_url('restoran/store') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="card-body">

                <div class="form-group">
                    <label>Nama Restoran</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-success">Simpan</button>
                <a href="<?= base_url('restoran') ?>" class="btn btn-secondary">Kembali</a>
            </div>

        </form>
    </div>

</div>

<?= $this->endSection() ?>