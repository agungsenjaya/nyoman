<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<section class="space-xl bg-secondary">
<div class="container">
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">How to</li>
          </ol>
        </nav>
<h2 class="mb-0">Cara Service</h2>
<p>Berikut cara service di bengkel generasi motor</p>
</div>
</section>
<section class="space-m">
<div class="container">
<div class="row">
<div class="col-md-4 mb-3">
<div class="card bg-secondary">
<div class="card-body">
<h5 class="">1. Member Account</h5>
<p>Untuk melakukan service pastikan anda sudah mempunyai akun terlebih dahulu</p>
</div>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="card bg-secondary">
<div class="card-body">
<h5 class="">2. Memilih Service</h5>
<p>Setelah login silahkan untuk memilih service, Body repair / Body repainting.</p>
</div>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="card bg-secondary">
<div class="card-body">
<h5 class="">3. Pengecekan Tanggal</h5>
<p>Kami memberikan pelayanan bengkel maksimal 10 customer per-hari nya.</p>
</div>
</div>
</div>
</div>
<br>
<hr>
<br>
<div class="col-md-6">
<blockquote class="blockquote">
  <p>Kami selalu memberikan kepuasan kepada konsumen serta memperbaiki layanan service ke arah yang lebih baik.</p>
  <footer class="blockquote-footer">
    Bengkel generasi motor.
  </footer>
</blockquote>
</div>
</div>
</section>
<?= $this->endsection() ?>