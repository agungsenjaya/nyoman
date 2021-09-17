<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card border shadow">
            <div class="card-header">
                <h5 class="mb-0">Form Reset Password</h5>
            </div>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <p><?=lang('Auth.enterCodeEmailPassword')?></p>

                    <form action="<?= base_url('reset-password') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control <?php if(session('errors.token')) : ?>is-invalid<?php endif ?>"
                                   name="token" placeholder="<?=lang('Auth.token')?>" value="<?= old('token', $token ?? '') ?>">
                            <label for="token"><?=lang('Auth.token')?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.token') ?>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                   name="password">
                            <label for="password"><?=lang('Auth.newPassword')?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                   name="pass_confirm">
                            <label for="pass_confirm"><?=lang('Auth.newPasswordRepeat')?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.resetPassword')?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
