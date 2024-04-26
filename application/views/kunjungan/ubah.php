<div class="content">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kunjungan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_kunjungan" value="<?= $kunjungan['id_kunjungan']; ?>">
                        <div class="form-group">
                            <label for="id_pasien">ID Pasien</label>
                            <select class="form-control" id="id_pasien" name="id_pasien">
                                <option value="">Pilih ID pasien</option>
                                <?php foreach ($pasien as $p) : ?>
                                    <?php if ($p['id_pasien'] == $kunjungan['id_pasien']) : ?>
                                        <option value="<?= $p['id_pasien'] ?>" selected><?= $p['id_pasien'] ?> - <?= $p['nama'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $p['id_pasien'] ?>"><?= $p['id_pasien'] ?> - <?= $p['nama'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_pasien'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_poli">ID Poli</label>
                            <select class="form-control" id="id_poli" name="id_poli">
                                <option value="">Pilih ID poli</option>
                                <?php foreach ($poli as $p) : ?>
                                    <?php if ($p['id_poli'] == $kunjungan['id_poli']) : ?>
                                        <option value="<?= $p['id_poli'] ?>" selected><?= $p['id_poli'] ?> - <?= $p['nama_poli'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $p['id_poli'] ?>"><?= $p['id_poli'] ?> - <?= $p['nama_poli'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_poli'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_dokter">ID Dokter</label>
                            <select class="form-control" id="id_dokter" name="id_dokter">
                                <option value="">Pilih ID dokter</option>
                                <?php foreach ($dokter as $d) : ?>
                                    <?php if ($d['id_dokter'] == $kunjungan['id_dokter']) : ?>
                                        <option value="<?= $d['id_dokter'] ?>" selected><?= $d['id_dokter'] ?> - <?= $d['nama_dokter'] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $d['id_dokter'] ?>"><?= $d['id_dokter'] ?> - <?= $d['nama_dokter'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_dokter'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                            <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" value="<?= $kunjungan['tanggal_kunjungan']; ?>" >
                            <small class="form-text text-danger"><?= form_error('tanggal_kunjungan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keluhan">Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?= $kunjungan['keluhan']; ?>" >
                            <small class="form-text text-danger"><?= form_error('keluhan'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        <a href="<?= base_url('kunjungan') ?>" class="btn btn-secondary float-right mr-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>