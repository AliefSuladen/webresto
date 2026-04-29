<?= $this->extend('template/temp-backend') ?>


<?= $this->section('content') ?>

<h3>Dashboard Admin</h3>

<div class="row">

    <div class="col-md-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>0</h3>
                <p>Total Restoran</p>
            </div>
            <div class="icon">
                <i class="fas fa-store"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>0</h3>
                <p>Total User</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>