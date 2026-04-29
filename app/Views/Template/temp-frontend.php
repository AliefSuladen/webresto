<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?? 'Kuliner Palembang' ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=fallback">
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
    }

    .hero {
      height: 420px;
      background: url('<?= base_url("Assets/Frontend/ampera.jpg") ?>') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .search-box {
      background: white;
      padding: 10px;
      border-radius: 50px;
      display: flex;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .search-box input {
      border: none;
      flex: 1;
      outline: none;
      padding: 10px;
    }

    .search-box button {
      border-radius: 50px;
    }

    .card-resto {
      border-radius: 15px;
      overflow: hidden;
      transition: 0.3s;
    }

    .card-resto:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .rating {
      color: #00aa6c;
      font-weight: bold;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center">

          <img src="<?= base_url('Assets/Frontend/logo.png') ?>"
            alt="Logo"
            style="height:35px; margin-right:10px;">

          <span class="font-weight-bold text-dark">
            KulinerPalembang
          </span>

        </a>
        <div class="ml-auto">
          <a href="<?= base_url('login') ?>" class="btn btn-outline-success btn-sm rounded-pill">
            Masuk
          </a>
        </div>
      </div>
    </nav>

    <div style="margin-top:70px;">
      <?= $this->renderSection('content') ?>
    </div>

    <footer class="main-footer text-center">
      <strong>&copy; <?= date('Y') ?> Kuliner Palembang</strong>
    </footer>

  </div>

  <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/AdminLTE/dist/js/adminlte.min.js"></script>
</body>

</html>