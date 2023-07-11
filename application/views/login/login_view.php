<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/circular-std/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <h1>SIMDAWA-APP</h1>
                <span class="splash-description">Silakan Login Terlebih Dahulu</span>
            </div>
            <div class="card-body">
                <?php $this->load->view('template/notifikasi'); ?>
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username atau No Pendaftaran" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password">
                    </div>
                    <button type="submit" name="btn_login" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0 ">
                <div class="card-footer">
                    <a href="<?= base_url('pendaftaran/daftar'); ?>" class="btn btn-sm btn-block btn-info">Daftar Akun</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end login page -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?= base_url("assets/vendor/jquery/jquery-3.3.1.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.js") ?>"></script>
</body>

</html>