<div class="content">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Pasien
            </div>
            <div class="card-body">
                <h5 class="card-title">Nama Pasien: <?= $pasien['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">ID Pasien: <?= $pasien['id_pasien']; ?></h6>
                <p class="card-text">Tanggal Lahir: <?= $pasien['tanggal_lahir']; ?></p>
                <p class="card-text">Alamat: <?= $pasien['alamat']; ?></p>
                <a href="<?= base_url('pasien') ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</div>
</div>