<?= $this->extend('app') ?>
<?= $this->section('content') ?>
<section>
<div class="d-flex justify-content-between">
<div>
<h4 class="mb-0">Details User</h4>
<p>Berikut details user</p>
</div>
<div>
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/user'); ?>">User</a></li>
      <li class="breadcrumb-item active" aria-current="page">Details</li>
    </ol>
  </nav>
</div>
</div>
<hr>
<br>
<div class="row">
<div class="col-md-6">
<div class="card card-body border-0 shadow-sm">
    <h2 class="h4 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Service Information</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
        <span class="fs-xs">Nama Lengkap</span>
        <p class="mb-0 text-capitalize"><?php echo $data[0]->username ?> </p>
        </li>
        <li class="list-group-item">
        <span class="fs-xs">Email Address</span>
        <p class="mb-0"><?php echo $data[0]->email ?> </p>
        </li>
        <li class="list-group-item">
        <span class="fs-xs">Nomor Telepon</span>
        <p class="mb-0"><?php echo $data[0]->phone ?> </p>
        </li>
        <li class="list-group-item">
        <span class="fs-xs">Alamat Lengkap</span>
        <p class="mb-0"><?php echo $data[0]->alamat ?> </p>
        </li>
    </ul>
</div>
</div>
</div>
</section>
<?= $this->endsection() ?>