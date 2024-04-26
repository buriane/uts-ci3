<div class="content">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Kunjungan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Keluhan: <?= $kunjungan['keluhan']; ?></h5>
                    <h5 class="card-title">Pasien: <?= $kunjungan['nama_pasien']; ?></h5>
                    <h5 class="card-title">Dokter: <?= $kunjungan['nama_dokter']; ?></h5>
                    <h5 class="card-title">Poli: <?= $kunjungan['nama_poli']; ?></h5>
                    <h6 class="card-subtitle mb-2 mt-2">Tanggal Kunjungan: <?= $kunjungan['tanggal_kunjungan']; ?></h6>
                    <p class="card-text text-muted">ID Kunjungan: <?= $kunjungan['id_kunjungan']; ?></p>
                    <a href="<?= base_url('kunjungan') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>