<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card border shadow">
            <div class="card-header">
                <h5 class="mb-0">Form Forgot Password</h5>
            </div>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <!-- <p><?=lang('Auth.enterEmailForInstructions')?></p> -->
                    <p>Silahkan masukan email yang sudah terdaftar sebelumnya untuk melanjutkan.</p>

                    <form action="<?= base_url('forgot') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-floating">
                            <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <label for="email"><?=lang('Auth.emailAddress')?></label>
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.sendInstructions')?></button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
