<div class="content">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Poli
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_poli">Nama Poli</label>
                            <input type="text" class="form-control" id="nama_poli" name="nama_poli">
                            <small class="form-text text-danger"><?= form_error('nama_poli'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        <a href="<?= base_url('poli') ?>" class="btn btn-secondary float-right mr-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>