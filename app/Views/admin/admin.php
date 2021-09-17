<?= $this->extend('app') ?>
<?= $this->section('content') ?>
<section>
<div class="d-flex justify-content-between">
<div>
<h4 class="mb-0">Dashboard Admin</h4>
<p>Halo, selamat datang <?php echo user()->username ?></p>
</div>
<div>
<div class="btn btn-primary"><i class="fi fi-calendar me-2"></i><?php echo date('d M Y') ?></div>
</div>
</div>
<hr>
<br>
<div class="row">
<a href="javascript:void(0)" class="col-md-3 text-dark">
<div class="card card-body bg-secondary border-0 h-100">
    <div class="fs-2 fw-bold text-primary lh-base mb-2"><i class="fi fi-link me-3"></i><?php echo casie(count($antrii)) ?></div>
    <h3 class="h5 mb-2">Antrian Hari Ini</h3>
    <p class="fs-sm mb-0">Berikut total antrian hari ini di bengkel generasi motor</p>
</div>
</a>
<a href="javascript:void(0)" class="col-md-3 text-dark">
<div class="card card-body bg-secondary border-0 h-100">
<div class="fs-2 fw-bold text-primary lh-base mb-2"><i class="fi fi-link me-3"></i><?php echo casie(count($servicee)) ?></div>
    <h3 class="h5 mb-2">Total Service</h3>
    <p class="fs-sm mb-0">Berikut total jumlah service di bengkel generasi motor</p>
</div>
</a>
<a href="javascript:void(0)" class="col-md-3 text-dark">
<div class="card card-body bg-secondary border-0 h-100">
<div class="fs-2 fw-bold text-primary lh-base mb-2"><i class="fi fi-link me-3"></i><?php echo casie(count($userr)) ?></div>
    <h3 class="h5 mb-2">Total Users</h3>
    <p class="fs-sm mb-0">Berikut total users di bengkel generasi motor</p>
</div>
</a>
<a href="javascript:void(0)" class="col-md-3 text-dark">
<div class="card card-body bg-secondary border-0 h-100">
<div class="fs-2 fw-bold text-primary lh-base mb-2"><i class="fi fi-link me-3"></i><?php echo casie(count($rog)) ?></div>
    <h3 class="h5 mb-2">Success Payment</h3>
    <p class="fs-sm mb-0">Berikut total pembayaran sukses di bengkel generasi motor</p>
</div>
</a>
</div>
<br>
<br>
<div class="d-flex justify-content-between">
<div>
<h4 class="mb-0">Total Pendapatan</h4>
<p>Bengkel Generasi Motor</p>
</div>
<div>
</div>
</div>
<hr>
<br>
<div class="row">
<div class="col-md-4">
<div class="card border-0 bg-secondary">
<div class="card-body">
<span class="fs-xs">Total Payment</span>
<h2 class="text-primary">Rp<span><?php echo number_format($total, 0, ',', '.') ?></span></h2>
</div>
</div>
</div>
</div>
</section>
<?= $this->endsection() ?>
<?= $this->section('css') ?>
<style>
a {
    text-decoration: none;
}
</style>
<?= $this->endsection() ?>