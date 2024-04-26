<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title><?= $judul; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">Mini Aplikasi Klinik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link <?= $this->uri->segment(1) === 'dokter' ? 'active' : '' ?>" href="<?= base_url('dokter'); ?>">Dokter</a>
                <a class="nav-item nav-link <?= $this->uri->segment(1) === 'kunjungan' ? 'active' : '' ?>" href="<?= base_url('kunjungan'); ?>">Kunjungan</a>
                <a class="nav-item nav-link <?= $this->uri->segment(1) === 'pasien' ? 'active' : '' ?>" href="<?= base_url('pasien'); ?>">Pasien</a>
                <a class="nav-item nav-link <?= $this->uri->segment(1) === 'poli' ? 'active' : '' ?>" href="<?= base_url('poli'); ?>">Poli</a>
            </div>
            <?php if($this->session->userdata('logged_in')): ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <span class="navbar-text mr-3">
                            Halo, <?= $this->session->userdata('username') ?>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Logout</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>