<div class="content">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Dokter
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_dokter" value="<?= $dokter['id_dokter']; ?>">
                        <div class="form-group">
                            <label for="nama_dokter">Nama Dokter</label>
                            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= $dokter['nama_dokter'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama_dokter'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        <a href="<?= base_url('dokter') ?>" class="btn btn-secondary float-right mr-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>