<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
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
<!-- ============================================================== -->
<!-- signup form -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form -->
    <!-- ============================================================== -->
    <form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Form Pendaftaran Akun</h3>
                <p>Silakan isi data pada form pendaftaran ini.</p>
            </div>
            <div class="card-body">
                <?php $this->load->view('template/notifikasi'); ?>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="no_pendaftaran" required="" placeholder="No Pendaftaran Mahassiwa Baru" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nama_lengkap" required="" placeholder="Nama Lengkap" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="no_handphone" required="" placeholder="No Handphone" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Password Akun Anda" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="file" name="bukti_daftar" required="" placeholder="Bukti Daftar" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="btn_daftar">Daftar Akun</button>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Sudah punya akun? <a href="<?= base_url('login') ?>" class="text-secondary">Login di sini.</a></p>
            </div>
        </div>
    </form>
</body>

</html>