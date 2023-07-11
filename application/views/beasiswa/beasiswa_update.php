<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Beasiswa </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('beasiswa') ?>" class="breadcrumb-link">Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Perbaharui Data Beasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $beasiswa->id ?>">
                            <div class="form-group row">
                                <label for="nama_beasiswa" class="col-md-2">Nama Beasiswa</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_beasiswa" value="<?= $beasiswa->nama_beasiswa ?>" placeholder="Nama Beasiswa" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_mulai" class="col-md-2">Tanggal Mulai</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_mulai" value="<?= $beasiswa->tanggal_mulai ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_selesai" class="col-md-2">Tanggal Selesai</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_selesai" value="<?= $beasiswa->tanggal_selesai ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-md-2">Nama Jenis Beasiswa</label>
                                <div class="col-md-10">
                                    <select name="jenis_id" required class="form-control">
                                        <option value="">Pilih Jenis Beasiswa</option>
                                        <?php
                                        foreach ($jenis as $a) {
                                            $selected = ($a->id == $beasiswa->jenis_id) ? "selected" : "";
                                            echo "<option value='$a->id' $selected>$a->nama_jenis</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <a href="<?= base_url('beasiswa') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>