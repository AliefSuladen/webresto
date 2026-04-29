<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Kuliner Palembang</title>

  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#">
            <i class="fas fa-bars"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="nav-link">👋 <?= session()->get('name') ?></span>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-bold">Admin Panel</span>
      </a>

      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"><?= session()->get('name') ?></a>
            <small class="text-muted">Administrator</small>
          </div>
        </div>

        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column">

            <li class="nav-item">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url('restoran') ?>" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
                <p>Restoran</p>
              </a>
            </li>


          </ul>
        </nav>

      </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper p-3">
      <?= $this->renderSection('content') ?>
    </div>

    <footer class="main-footer text-sm text-center">
      © <?= date('Y') ?> Kuliner Palembang
    </footer>

  </div>

  <!-- Scripts -->
  <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/AdminLTE/dist/js/adminlte.min.js"></script>

  <?= $this->renderSection('script') ?>

</body>

</html>