<div class="content">
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data kunjungan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('kunjungan/tambah') ?>" class="btn btn-primary">Tambah Data Kunjungan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Kunjungan</h3>
        </div>
    </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID Kunjungan</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Nama Poli</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Tanggal Kunjungan</th>
            <th scope="col">Keluhan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kunjungan as $k) :?>
            <tr>
            <th scope="row"><?= $k['id_kunjungan']; ?></th>
            <td><?= $k['nama']; ?></td>
            <td><?= $k['nama_poli']; ?></td>
            <td><?= $k['nama_dokter']; ?></td>
            <td><?= $k['tanggal_kunjungan']; ?></td>
            <td><?= $k['keluhan']; ?></td>
            <td>
                <a href="<?= base_url('kunjungan/detail/' . $k['id_kunjungan']); ?>" class="badge badge-warning">detail</a>
                <a href="<?= base_url('kunjungan/ubah/' . $k['id_kunjungan']); ?>" class="badge badge-success">ubah</a>
                <a href="<?= base_url('kunjungan/hapus/' . $k['id_kunjungan']); ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin?');">hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</div>
</div>