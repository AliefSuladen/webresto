<?= $this->extend('template/temp-backend') ?>
<?= $this->section('content') ?>

<style>
    .card-modern {
        border-radius: 16px;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .header-title {
        font-weight: 600;
        color: #2c3e50;
    }

    .form-control {
        border-radius: 12px;
        border: 1px solid #e0e0e0;
    }

    .form-control:focus {
        border-color: #00b894;
        box-shadow: none;
    }

    .btn-modern {
        border-radius: 25px;
        padding: 6px 18px;
        font-size: 14px;
    }

    .img-preview {
        width: 100%;
        max-height: 220px;
        object-fit: cover;
        border-radius: 12px;
        margin-top: 10px;
    }

    .label-section {
        font-size: 13px;
        color: #888;
        margin-bottom: 5px;
    }
</style>

<div class="col-md-8">

    <div class="card card-modern">

        <!-- HEADER -->
        <div class="card-header bg-white border-0">
            <h4 class="header-title mb-0">✏️ Edit Restoran</h4>
        </div>

        <!-- FORM -->
        <form action="<?= base_url('restoran/update/' . $restoran['id']) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="card-body">

                <!-- NAMA -->
                <div class="form-group">
                    <label>Nama Restoran</label>
                    <input type="text" name="nama"
                        value="<?= $restoran['nama'] ?>"
                        class="form-control"
                        required>
                </div>

                <!-- ALAMAT -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2" required><?= $restoran['alamat'] ?></textarea>
                </div>

                <!-- DESKRIPSI -->
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3"><?= $restoran['deskripsi'] ?></textarea>
                </div>

                <!-- GAMBAR LAMA -->
                <div class="form-group">
                    <label class="label-section">Gambar Saat Ini</label>

                    <?php if ($restoran['gambar']): ?>
                        <img src="<?= base_url('uploads/restoran/' . $restoran['gambar']) ?>"
                            class="img-preview">
                    <?php else: ?>
                        <p class="text-muted">Belum ada gambar</p>
                    <?php endif; ?>
                </div>

                <!-- GANTI GAMBAR -->
                <div class="form-group">
                    <label class="label-section">Ganti Gambar (Opsional)</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" onchange="previewImg(event)">

                    <!-- PREVIEW BARU -->
                    <img id="preview" class="img-preview" style="display:none;">
                </div>

            </div>

            <!-- FOOTER -->
            <div class="card-footer bg-white border-0 d-flex justify-content-between">

                <a href="<?= base_url('restoran') ?>" class="btn btn-secondary btn-modern">
                    ← Kembali
                </a>

                <button class="btn btn-primary btn-modern">
                    <i class="fas fa-save"></i> Update
                </button>

            </div>

        </form>
    </div>

</div>

<script>
    function previewImg(event) {
        const input = event.target;
        const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<?= $this->endSection() ?>