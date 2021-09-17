<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">

		<div class="card border shadow">
			<div class="card-header">
                <h5 class="mb-0"><i class="me-2 fi-user text-primary"></i> Form Login</h5>
            </div>
				<div class="card-body">

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= base_url('login') ?>" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
						<div class="form-floating mb-3">
							<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<label for="login"><?=lang('Auth.email')?></label>
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

						<div class="form-floating mb-3">
							<input type="password" name="password" class="form-control  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<label for="password"><?=lang('Auth.password')?></label>
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

<?php if ($config->allowRemembering): ?>
						<div class="form-check">
								<input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							<label class="form-check-label">
							</label>
						</div>
<?php endif; ?>

						<br>

						<button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
					</form>

<br>
<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= base_url('register') ?>">Register akun baru</a></p>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
					<p><a href="<?= base_url('forgot') ?>">Lupa password</a></p>
<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>
