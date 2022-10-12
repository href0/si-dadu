<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $sub_page . ' ' . $page ?></h3>
                </div>
                <form action="<?= base_url('user/edit/') . $user['id'] ?>" id="form" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="<?= $user['username'] ?>" name="username" class="form-control<?= form_error('username') ? ' is-invalid' : '' ?>" id="username" placeholder="Masukkan username" autofocus>
                            <?php if (form_error('username')) : ?>
                                <div class="invalid-feedback"><?= form_error('username') ?></div>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control<?= form_error('password') ? ' is-invalid' : '' ?>" id="password" placeholder="Masukkan password">
                            <?php if (form_error('password')) : ?>
                                <div class="invalid-feedback"><?= form_error('password') ?></div>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="re-password">Ulangi Password</label>
                            <input type="password" name="retype_password" class="form-control<?= form_error('retype_password') ? ' is-invalid' : '' ?>" id="re-password" placeholder="Ulangi password">
                            <?php if (form_error('retype_password')) : ?>
                                <div class="invalid-feedback"><?= form_error('retype_password') ?></div>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" value="<?= $user['nama'] ?>" name="nama" class="form-control<?= form_error('nama') ? ' is-invalid' : '' ?>" id="nama" placeholder="Masukkan nama lengkap">
                            <?php if (form_error('nama')) : ?>
                                <div class="invalid-feedback"><?= form_error('nama') ?></div>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="<?= $user['email'] ?>" name="email" class="form-control<?= form_error('email') ? ' is-invalid' : '' ?>" id="email" placeholder="Masukkan email">
                            <?php if (form_error('email')) : ?>
                                <div class="invalid-feedback"><?= form_error('email') ?></div>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>