<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register | Kuliner Palembang</title>

    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            margin: 0;
            background: url('<?= base_url("Assets/Frontend/ampera.jpg") ?>') center/cover no-repeat;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .container-regis {
            position: relative;
            z-index: 2;
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
        }

        .card-regis {
            width: 400px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);
            padding: 30px;
            color: white;
        }

        .form-control {
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }

        .form-control::placeholder {
            color: #ddd;
        }

        .input-group-text {
            background: transparent;
            border: none;
            color: white;
        }

        .btn-regis {
            border-radius: 30px;
            background: #00aa6c;
            border: none;
        }

        .text-error {
            font-size: 12px;
            color: #ffb3b3;
        }
    </style>
</head>

<body>

    <div class="container-regis">
        <div class="card-regis">

            <h4 class="text-center mb-2">📝 Daftar Akun</h4>

            <?php if (session()->getFlashdata('errors')): ?>
                <?php foreach (session()->getFlashdata('errors') as $err): ?>
                    <div class="text-error"><?= $err ?></div>
                <?php endforeach; ?>
            <?php endif; ?>

            <form action="<?= base_url('register-process') ?>" method="post">

                <div class="input-group mb-3">
                    <input type="text" name="name" value="<?= old('name') ?>" class="form-control" placeholder="Nama">
                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" value="<?= old('email') ?>" class="form-control" placeholder="Email">
                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-envelope"></i></span></div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="confirm" class="form-control" placeholder="Konfirmasi Password">
                    <div class="input-group-append"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                </div>

                <button type="submit" class="btn btn-regis btn-block">Daftar</button>

            </form>

            <div class="text-center mt-3">
                <a href="<?= base_url('login') ?>" class="btn btn-outline-light btn-sm rounded-pill">
                    Login
                </a>
            </div>

        </div>
    </div>

</body>

</html>