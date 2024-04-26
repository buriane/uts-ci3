<div class="content">
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data poli <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('poli/tambah') ?>" class="btn btn-primary">Tambah Data Poli</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Poli</h3>
        </div>
    </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID Poli</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($poli as $p) :?>
            <tr>
            <th scope="row"><?= $p['id_poli']; ?></th>
            <td><?= $p['nama_poli']; ?></td>
            <td>
                <a href="<?= base_url('poli/detail/' . $p['id_poli']); ?>" class="badge badge-warning">detail</a>
                <a href="<?= base_url('poli/ubah/' . $p['id_poli']); ?>" class="badge badge-success">ubah</a>
                <a href="<?= base_url('poli/hapus/' . $p['id_poli']); ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin?');">hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
</div>
</div>