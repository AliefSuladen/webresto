<?= $this->extend('template/temp-backend') ?>
<?= $this->section('content') ?>

<style>
    .card-modern {
        border-radius: 16px;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .table-modern th {
        background: #f8f9fa;
        font-weight: 600;
    }

    .img-thumb {
        width: 80px;
        height: 60px;
        object-fit: cover;
        border-radius: 10px;
    }

    .btn-modern {
        border-radius: 20px;
        padding: 5px 12px;
        font-size: 13px;
    }

    .btn-modern:hover {
        transform: scale(1.05);
    }

    .header-title {
        font-weight: 600;
        color: #2c3e50;
    }
</style>

<div class="col-12">

    <div class="card card-modern">

        <!-- HEADER -->
        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
            <h4 class="header-title mb-0">🍽️ Data Restoran</h4>

            <a href="<?= base_url('restoran/create') ?>" class="btn btn-success btn-modern">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">

            <div class="table-responsive">
                <table id="table" class="table table-hover table-modern align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no = 1;
                        foreach ($restoran as $r): ?>
                            <tr>

                                <td><?= $no++ ?></td>

                                <!-- GAMBAR -->
                                <td>
                                    <?php if ($r['gambar']): ?>
                                        <img src="<?= base_url('uploads/restoran/' . $r['gambar']) ?>" class="img-thumb">
                                    <?php else: ?>
                                        <img src="https://source.unsplash.com/100x80/?food" class="img-thumb">
                                    <?php endif; ?>
                                </td>

                                <!-- NAMA -->
                                <td>
                                    <strong><?= $r['nama'] ?></strong>
                                </td>

                                <!-- ALAMAT -->
                                <td>
                                    <span class="text-muted"><?= $r['alamat'] ?></span>
                                </td>

                                <!-- AKSI -->
                                <td class="text-center">

                                    <a href="<?= base_url('restoran/edit/' . $r['id']) ?>"
                                        class="btn btn-warning btn-modern btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('restoran/delete/' . $r['id']) ?>"
                                        class="btn btn-danger btn-modern btn-sm"
                                        onclick="return confirm('Yakin hapus?')">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(function() {
        $("#table").DataTable({
            responsive: true,
            autoWidth: false,
            pageLength: 5,
            language: {
                search: "🔍 Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                zeroRecords: "Tidak ditemukan",
                info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                paginate: {
                    previous: "←",
                    next: "→"
                }
            }
        });
    });
</script>
<?= $this->endSection() ?>