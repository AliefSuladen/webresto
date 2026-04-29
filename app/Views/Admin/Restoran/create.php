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
        max-height: 200px;
        object-fit: cover;
        border-radius: 12px;
        margin-top: 10px;
        display: none;
    }
</style>

<div class="col-md-8">

    <div class="card card-modern">

        <!-- HEADER -->
        <div class="card-header bg-white border-0">
            <h4 class="header-title mb-0">➕ Tambah Restoran</h4>
        </div>

        <!-- FORM -->
        <form action="<?= base_url('restoran/store') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="card-body">

                <!-- NAMA -->
                <div class="form-group">
                    <label>Nama Restoran</label>
                    <input type="text" name="nama" class="form-control" placeholder="Contoh: Pempek Vico" required>
                </div>

                <!-- ALAMAT -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="2"
                        placeholder="Contoh: Jl. Sudirman Palembang" required></textarea>
                </div>

                <!-- DESKRIPSI -->
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3"
                        placeholder="Ceritakan tentang restoran ini..."></textarea>
                </div>

                <!-- GAMBAR -->
                <div class="form-group">
                    <label>Upload Gambar</label>
                    <input type="file" name="gambar" class="form-control" accept="image/*" onchange="previewImg(event)">

                    <!-- PREVIEW -->
                    <img id="preview" class="img-preview">
                </div>

            </div>

            <!-- FOOTER -->
            <div class="card-footer bg-white border-0 d-flex justify-content-between">

                <a href="<?= base_url('restoran') ?>" class="btn btn-secondary btn-modern">
                    ← Kembali
                </a>

                <button class="btn btn-success btn-modern">
                    <i class="fas fa-save"></i> Simpan
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