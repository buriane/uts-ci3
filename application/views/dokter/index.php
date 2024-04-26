<div class="content">
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data dokter <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-primary">Tambah Data Dokter</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Dokter</h3>
        </div>
    </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID Dokter</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dokter as $d) :?>
            <tr>
            <th scope="row"><?= $d['id_dokter']; ?></th>
            <td><?= $d['nama_dokter']; ?></td>
            <td>
                <a href="<?= base_url('dokter/detail/' . $d['id_dokter']); ?>" class="badge badge-warning">detail</a>
                <a href="<?= base_url('dokter/ubah/' . $d['id_dokter']); ?>" class="badge badge-success">ubah</a>
                <a href="<?= base_url('dokter/hapus/' . $d['id_dokter']); ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin?');">hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</div>
</div>