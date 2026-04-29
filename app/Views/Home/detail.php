<?= $this->extend('template/temp-frontend') ?>
<?= $this->section('content') ?>

<style>
    /* HERO IMAGE */
    .hero-img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 15px;
    }

    /* CARD MODERN */
    .card-modern {
        border-radius: 15px;
        border: none;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    /* KOMENTAR */
    .comment-card {
        border-radius: 12px;
        padding: 12px;
        background: #f9fafb;
        transition: 0.2s;
    }

    .comment-card:hover {
        background: #eef2f7;
    }

    /* BUTTON */
    .btn-modern {
        border-radius: 25px;
    }

    /* RATING */
    .rating {
        font-size: 16px;
        font-weight: 500;
    }
</style>

<div class="container mt-5">

    <!-- HEADER -->
    <div class="mb-3">
        <h2 class="font-weight-bold"><?= $restoran['nama'] ?></h2>

        <p class="text-muted mb-1">
            <i class="fas fa-map-marker-alt text-danger"></i>
            <?= $restoran['alamat'] ?>
        </p>

        <!-- RATING -->
        <div class="rating">
            ⭐ <?= number_format($restoran['rata_rating'] ?? 0, 1) ?>
            <small class="text-muted">(<?= $restoran['total_review'] ?? 0 ?> review)</small>
        </div>


    </div>

    <div class="row">

        <!-- KIRI -->
        <div class="col-md-8">

            <!-- GAMBAR -->
            <?php if ($restoran['gambar']): ?>
                <img src="<?= base_url('uploads/restoran/' . $restoran['gambar']) ?>" class="hero-img mb-3">
            <?php else: ?>
                <img src="https://source.unsplash.com/800x400/?restaurant" class="hero-img mb-3">
            <?php endif; ?>

            <!-- DESKRIPSI -->
            <div class="card card-modern mb-4">
                <div class="card-body">
                    <h5 class="mb-2">Deskripsi</h5>
                    <p class="text-muted"><?= $restoran['deskripsi'] ?></p>
                </div>
            </div>

            <!-- KOMENTAR -->
            <div class="card card-modern mb-4">
                <div class="card-body">

                    <h5 class="mb-3">💬 Ulasan Pengguna</h5>

                    <?php if (!empty($komentar)): ?>
                        <?php foreach ($komentar as $k): ?>
                            <div class="comment-card mb-2">

                                <div class="d-flex justify-content-between">
                                    <small class="text-muted">
                                        <?= date('d M Y H:i', strtotime($k['created_at'])) ?>
                                    </small>
                                    <span>⭐ <?= $k['rating'] ?? '-' ?></span>
                                </div>

                                <p class="mb-0 mt-1"><?= $k['komentar'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">Belum ada ulasan</p>
                    <?php endif; ?>

                </div>
            </div>

            <!-- FORM KOMENTAR -->
            <div class="card card-modern">
                <div class="card-body">

                    <?php if (session()->get('role') == 'user'): ?>

                        <h6 class="mb-3">✍️ Tulis Ulasan</h6>

                        <form action="<?= base_url('komentar/store') ?>" method="post">
                            <?= csrf_field() ?>

                            <input type="hidden" name="restoran_id" value="<?= $restoran['id'] ?>">

                            <div class="form-group">
                                <textarea name="komentar" class="form-control"
                                    placeholder="Bagikan pengalamanmu..." required></textarea>
                            </div>

                            <div class="form-group">
                                <select name="rating" class="form-control">
                                    <option value="5">⭐⭐⭐⭐⭐ (Sangat Bagus)</option>
                                    <option value="4">⭐⭐⭐⭐ (Bagus)</option>
                                    <option value="3">⭐⭐⭐ (Biasa)</option>
                                    <option value="2">⭐⭐ (Kurang)</option>
                                    <option value="1">⭐ (Buruk)</option>
                                </select>
                            </div>

                            <button class="btn btn-success btn-modern">
                                <i class="fas fa-paper-plane"></i> Kirim Ulasan
                            </button>

                        </form>

                    <?php else: ?>

                        <div class="alert alert-info">
                            <a href="<?= base_url('login') ?>">Login</a> untuk menulis ulasan
                        </div>

                    <?php endif; ?>

                    <div class="mb-3">
                        <a href="<?= base_url('/') ?>"
                            style="text-decoration:none; font-size:14px; color:#666;">
                            <i class="fas fa-arrow-left"></i> Kembali ke daftar restoran
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <!-- KANAN -->
        <div class="col-md-4">

            <!-- MAP -->
            <div class="card card-modern mb-3">
                <div class="card-body">
                    <h6 class="mb-3">📍 Lokasi</h6>

                    <iframe
                        width="100%"
                        height="250"
                        style="border:0; border-radius:10px;"
                        loading="lazy"
                        src="https://www.google.com/maps?q=<?= urlencode($restoran['alamat']) ?>&output=embed">
                    </iframe>
                </div>
            </div>

            <!-- INFO TAMBAHAN -->
            <div class="card card-modern text-center">
                <div class="card-body">
                    <i class="fas fa-star text-warning mb-2"></i>
                    <h6>Rating</h6>
                    <p><?= number_format($restoran['rata_rating'] ?? 0, 1) ?></p>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>