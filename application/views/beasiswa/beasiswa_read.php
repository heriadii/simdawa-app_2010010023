<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Beasiswa </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('beasiswa') ?>" class="breadcrumb-link">Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Beasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php
                $this->load->view('template/notifikasi')
                ?>
                <div class="card">
                    <div class="card-header">
                        Data Beasiswa
                        <?php if ($this->session->userdata('peran') != 'USER') : ?>
                            <a href="<?= base_url('beasiswa/tambah') ?>" class="btn btn-sm btn-success float-right"><i class="fas fa-plus">Tambah Data</i></a>
                            <a href="<?= base_url('beasiswa/cetak') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-print">Cetak Data</i></a>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Beasiswa</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Nama Jenis Beasiswa</th>
                                    <th>Keterangan</th>
                                    <?php if ($this->session->userdata('peran') != 'USER') : ?>
                                        <th>Aksi</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($beasiswa as $a) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $a->nama_beasiswa ?></td>
                                        <td><?= $a->tanggal_mulai ?></td>
                                        <td><?= $a->tanggal_selesai ?></td>
                                        <td><?= $a->nama_jenis ?></td>
                                        <td><?= $a->keterangan ?></td>
                                        <?php if ($this->session->userdata('peran') != 'USER') : ?>
                                            <td>
                                                <a href="<?= base_url('beasiswa/ubah/' . $a->id) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                                <a href="<?= base_url('beasiswa/hapus/' . $a->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>