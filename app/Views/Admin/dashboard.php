<?= $this->extend('template/temp-backend') ?>
<?= $this->section('content') ?>

<style>
    /* HEADER */
    .page-title {
        font-weight: 600;
        color: #2c3e50;
    }

    /* CARD GRADIENT */
    .gradient-card {
        border-radius: 16px;
        padding: 20px;
        color: white;
        position: relative;
        overflow: hidden;
        transition: 0.3s;
    }

    .gradient-card:hover {
        transform: translateY(-5px);
    }

    /* WARNA LEBIH SOFT */
    .gradient-green {
        background: linear-gradient(135deg, #00b894, #55efc4);
    }

    .gradient-blue {
        background: linear-gradient(135deg, #0984e3, #74b9ff);
    }

    .gradient-orange {
        background: linear-gradient(135deg, #fd7e14, #ffb142);
    }

    /* ICON */
    .gradient-card .icon {
        position: absolute;
        right: 15px;
        bottom: 10px;
        font-size: 55px;
        opacity: 0.15;
    }

    /* CARD MODERN */
    .card-modern {
        border-radius: 16px;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    /* KOMENTAR */
    .comment-item {
        border-radius: 10px;
        padding: 12px;
        background: #f8f9fa;
        transition: 0.2s;
    }

    .comment-item:hover {
        background: #eef2f7;
    }

    /* PROGRESS */
    .progress {
        height: 6px;
        border-radius: 10px;
    }
</style>

<h3 class="page-title mb-4">Dashboard Admin</h3>

<div class="row">

    <!-- RESTORAN -->
    <div class="col-md-4">
        <div class="gradient-card gradient-green">
            <h3><?= $total_resto ?></h3>
            <p>Total Restoran</p>

            <div class="progress bg-white mt-2">
                <div class="progress-bar bg-light" style="width: 80%"></div>
            </div>

            <div class="icon">
                <i class="fas fa-store"></i>
            </div>
        </div>
    </div>

    <!-- USER -->
    <div class="col-md-4">
        <div class="gradient-card gradient-blue">
            <h3><?= $total_user ?></h3>
            <p>Total User</p>

            <div class="progress bg-white mt-2">
                <div class="progress-bar bg-light" style="width: 60%"></div>
            </div>

            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <!-- KOMENTAR -->
    <div class="col-md-4">
        <div class="gradient-card gradient-orange">
            <h3><?= $total_komen ?></h3>
            <p>Total Komentar</p>

            <div class="progress bg-white mt-2">
                <div class="progress-bar bg-light" style="width: 70%"></div>
            </div>

            <div class="icon">
                <i class="fas fa-comments"></i>
            </div>
        </div>
    </div>

</div>

<div class="row mt-4">

    <!-- KOMENTAR TERBARU -->
    <div class="col-md-8">
        <div class="card card-modern">
            <div class="card-header bg-white border-0">
                <h5 class="mb-0">Komentar Terbaru</h5>
            </div>

            <div class="card-body">

                <?php if (!empty($komentar_terbaru)): ?>
                    <?php foreach ($komentar_terbaru as $k): ?>
                        <div class="comment-item mb-2">
                            <small class="text-muted">
                                <?= date('d M Y H:i', strtotime($k['created_at'])) ?>
                            </small>
                            <p class="mb-0"><?= $k['komentar'] ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted">Belum ada komentar</p>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- SIDE INFO -->
    <div class="col-md-4">

        <div class="card card-modern mb-3">
            <div class="card-body text-center">
                <i class="fas fa-chart-line fa-2x text-success mb-2"></i>
                <h6 class="mb-1">Aktivitas</h6>
                <p class="mb-0 text-muted"><?= $total_komen ?> komentar masuk</p>
            </div>
        </div>

        <div class="card card-modern">
            <div class="card-body text-center">
                <i class="fas fa-utensils fa-2x text-primary mb-2"></i>
                <h6 class="mb-1">Restoran Aktif</h6>
                <p class="mb-0 text-muted"><?= $total_resto ?> tersedia</p>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection() ?>