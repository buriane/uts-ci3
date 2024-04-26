<div class="content">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 text-center">Register</h2>
                <form action="<?= base_url('register/register') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary text-center">Register</button>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <p>Sudah punya akun? <a href="<?= base_url('login') ?>">Login disini</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>