<div class="content">
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data pasien <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('pasien/tambah') ?>" class="btn btn-primary">Tambah Data Pasien</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Pasien</h3>
        </div>
    </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID Pasien</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $p) :?>
            <tr>
            <th scope="row"><?= $p['id_pasien']; ?></th>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['tanggal_lahir']; ?></td>
            <td><?= $p['alamat']; ?></td>
            <td>
                <a href="<?= base_url('pasien/detail/' . $p['id_pasien']); ?>" class="badge badge-warning">detail</a>
                <a href="<?= base_url('pasien/ubah/' . $p['id_pasien']); ?>" class="badge badge-success">ubah</a>
                <a href="<?= base_url('pasien/hapus/' . $p['id_pasien']); ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin?');">hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</div>
</div>