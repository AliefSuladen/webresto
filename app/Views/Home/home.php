<?= $this->extend('template/temp-frontend') ?>
<?= $this->section('content') ?>

<style>
    /* HERO */
    .hero {
        height: 400px;
        background: url('<?= base_url("Assets/Frontend/ampera.jpg") ?>') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        position: relative;
    }

    .hero::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero div {
        position: relative;
        z-index: 2;
    }

    /* SEARCH */
    .search-box {
        display: flex;
        justify-content: center;
    }

    .search-box input {
        border-radius: 30px 0 0 30px;
        border: none;
        padding: 10px 15px;
        width: 250px;
    }

    .search-box button {
        border-radius: 0 30px 30px 0;
    }

    /* CARD */
    .card-resto {
        border-radius: 15px;
        overflow: hidden;
        border: none;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .card-resto:hover {
        transform: translateY(-5px);
    }

    /* IMAGE */
    .card-resto img {
        height: 200px;
        object-fit: cover;
    }

    /* RATING */
    .rating {
        font-size: 14px;
        font-weight: 500;
    }

    .review-text {
        font-size: 12px;
        color: #777;
    }

    /* BUTTON */
    .btn-detail {
        border-radius: 20px;
    }
</style>

<!-- HERO -->
<div class="hero">
    <div>
        <h1 class="font-weight-bold">Temukan Restoran Terbaik di Palembang</h1>
        <p>Cari tempat makan favoritmu 🍜</p>

        <form action="<?= base_url('/') ?>" method="get" class="search-box mt-3">
            <input type="text" name="keyword" value="<?= $_GET['keyword'] ?? '' ?>" placeholder="Cari restoran...">
            <button class="btn btn-success px-4">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>

<!-- LIST RESTORAN -->
<div class="container mt-5">
    <h4 class="mb-4">Rekomendasi Untukmu</h4>

    <div class="row">

        <?php if (!empty($restoran)): ?>
            <?php foreach ($restoran as $r): ?>
                <div class="col-md-4 mb-4">
                    <div class="card card-resto">

                        <!-- GAMBAR -->
                        <?php if ($r['gambar']): ?>
                            <img src="<?= base_url('uploads/restoran/' . $r['gambar']) ?>" class="card-img-top">
                        <?php else: ?>
                            <img src="https://source.unsplash.com/400x300/?restaurant,food" class="card-img-top">
                        <?php endif; ?>

                        <div class="card-body">

                            <h5 class="font-weight-bold mb-1"><?= $r['nama'] ?></h5>
                            <p class="text-muted mb-2"><?= $r['alamat'] ?></p>

                            <!-- RATING -->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="rating">
                                    ⭐ <?= number_format($r['rata_rating'] ?? 0, 1) ?>
                                </div>
                                <div class="review-text">
                                    <?= $r['total_review'] ?? 0 ?> review
                                </div>
                            </div>

                            <!-- BUTTON -->
                            <a href="<?= base_url('detail/' . $r['id']) ?>"
                                class="btn btn-success btn-sm btn-detail w-100">
                                Lihat Detail
                            </a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>Belum ada data restoran</p>
            </div>
        <?php endif; ?>

    </div>
</div>

<?= $this->endSection() ?>