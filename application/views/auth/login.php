<div class="content">
<div class="container">
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger mt-4" role="alert">
                <?= $this->session->flashdata('error') ?>
            </div>
        <?php endif; ?>
                <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success mt-4" role="alert">
                <?= $this->session->flashdata('success') ?>
            </div>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 text-center">Login</h2>
                <form action="<?= base_url('login/login') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <p>Belum punya akun? <a href="<?= base_url('register') ?>">Register disini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>