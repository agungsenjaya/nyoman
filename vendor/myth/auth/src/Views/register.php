<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

        <div class="card border shadow">
            <div class="card-header">
                <h5 class="mb-0"><i class="me-2 fi-user-plus text-primary"></i> Form Register</h5>
            </div>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?php echo base_url('register') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <!-- <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small> -->
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Nama Lengkap" value="<?= old('username') ?>">
                            <label for="username">Nama Lengkap</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control <?php if(session('errors.phone')) : ?>is-invalid<?php endif ?>" name="phone" placeholder="Phone Number" value="<?= old('Auth.phone') ?>">
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="mb-3">
                            <textarea name="alamat" placeholder="Alamat lengkap" class="form-control <?php if(session('errors.alamat')) : ?>is-invalid<?php endif ?>" id="" cols="30" rows="10" value="<?= old('Auth.alamat') ?>"></textarea>
                        </div>

                        <input type="hidden" class="form-control" name="role" value="User">
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                            <label for="password"><?=lang('Auth.password')?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                    </form>
                    <br>
                    <p>Apakah anda sudah mempunyai akun ? <a href="<?= base_url('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
