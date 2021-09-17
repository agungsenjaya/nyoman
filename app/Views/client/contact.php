<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<div class="">
<section class="bg-top-center min-vh-100 space-xl bg-repeat-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/hero-bg.png); background-size: 1920px 630px;">
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card border-0 shadow-sm">
<div class="p-5">
<div class="text-center">
<h2 class="mb-0">Contact Support</h2>
<p>Bengkel Generasi Motor</p>
</div>
<br>
<img class="d-block mt-4" src="<?php echo base_url(); ?>/assets/img/hero-img.png" width="100%" alt="Car">
<p>Jika anda mempunyai pertanyaan atau informasi lebih lanjut seputar body repair dan repainting mobil, silahkan hubungi contact support yang tersedia.</p>
<!-- <blockquote class="blockquote text-center">
  <p>Jika anda mempunyai pertanyaan atau informasi lebih lanjut seputar body repair dan repainting mobil, silahkan hubungi contact support yang tersedia dibawah ini.</p>
  <footer class="blockquote-footer">
    Bengkel Generasi Motor
  </footer>
</blockquote> -->
<!-- Flush list group -->
<div class="list-group list-group-flush">
  <a href="javascript:void(0)" class="list-group-item list-group-item-action"><i class="fi fi-phone me-3"></i>022 - 8723xx</a>
  <a href="javascript:void(0)" class="list-group-item list-group-item-action"><i class="fi fi-whatsapp me-3"></i>08723xxxx</a>
  <a href="javascript:void(0)" class="list-group-item list-group-item-action"><i class="fi fi-mail me-3"></i>info@bgm.com</a>
</div>
<br>
<div class="text-center">
<a href="<?php echo base_url('/') ?>" class="btn btn-primary">Kembali ke home</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<?= $this->endsection() ?>