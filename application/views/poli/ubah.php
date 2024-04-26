<div class="content">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Poli
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_poli" value="<?= $poli['id_poli']; ?>">
                        <div class="form-group">
                            <label for="nama_poli">Nama Poli</label>
                            <input type="text" class="form-control" id="nama_poli" name="nama_poli" value="<?= $poli['nama_poli'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama_poli'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        <a href="<?= base_url('poli') ?>" class="btn btn-secondary float-right mr-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>