<?= $this->extend('template/temp-frontend') ?>
<?= $this->section('content') ?>

<!-- HERO -->
<div class="hero">
    <div>
        <h1 class="font-weight-bold">Temukan Restoran Terbaik di Palembang</h1>
        <p>Cari tempat makan favoritmu 🍜</p>

        <form class="search-box mt-3">
            <input type="text" placeholder="Cari restoran atau makanan...">
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

        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="col-md-4 mb-4">
                <div class="card card-resto">
                    <img src="https://source.unsplash.com/400x300/?restaurant,food" class="card-img-top">

                    <div class="card-body">
                        <h5 class="font-weight-bold">RM Pempek <?= $i ?></h5>
                        <p class="text-muted mb-1">Palembang</p>

                        <div class="d-flex justify-content-between">
                            <span class="rating">⭐ 4.5</span>
                            <small>100 review</small>
                        </div>

                        <a href="#" class="btn btn-sm btn-outline-success mt-2 w-100">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</div>

<?= $this->endSection() ?>