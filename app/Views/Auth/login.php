<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login | Kuliner Palembang</title>

    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            margin: 0;
            background: url('<?= base_url("Assets/Frontend/ampera.jpg") ?>') center/cover no-repeat;
            position: relative;
        }

        /* overlay gelap */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            top: 0;
            left: 0;
        }

        .login-container {
            position: relative;
            z-index: 2;
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 380px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);
            padding: 30px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .login-title {
            font-weight: 600;
            text-align: center;
            margin-bottom: 5px;
        }

        .login-subtitle {
            text-align: center;
            font-size: 13px;
            color: #ddd;
            margin-bottom: 20px;
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
            border-radius: 30px;
            background: transparent;
            border: none;
            color: white;
        }

        .btn-login {
            border-radius: 30px;
            background: #00aa6c;
            border: none;
            font-weight: 500;
        }

        .btn-login:hover {
            background: #008f5a;
        }

        .btn-outline-light {
            border-radius: 30px;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn-outline-light:hover {
            background: #fff;
            color: #000;
        }

        .brand-palembang {
            text-align: center;
            margin-bottom: 15px;
        }

        .brand-palembang h4 {
            margin: 0;
            font-weight: 600;
        }

        .brand-palembang small {
            color: #ccc;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #ccc;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <!-- Branding -->
            <div class="brand-palembang">
                <h4>🍽️ Kuliner Palembang</h4>
                <small>Jelajahi rasa khas Sungai Musi</small>
            </div>

            <div class="login-title">Selamat Datang</div>
            <div class="login-subtitle">Silakan login untuk melanjutkan</div>

            <!-- Error -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger text-center py-2">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- FORM LOGIN -->
            <form action="<?= base_url('login/process') ?>" method="post">

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-login btn-block">
                    Login
                </button>

            </form>

            <!-- REGISTER BUTTON -->
            <div class="text-center mt-3">
                <span style="font-size: 13px; color:#ccc;">Belum punya akun?</span><br>
                <a href="<?= base_url('register') ?>" class="btn btn-outline-light btn-sm mt-2 px-4">
                    <i class="fas fa-user-plus mr-1"></i> Daftar Sekarang
                </a>
            </div>

            <!-- Footer -->
            <div class="footer-text">
                © <?= date('Y') ?> Kuliner Palembang
            </div>

        </div>

    </div>

</body>

</html>