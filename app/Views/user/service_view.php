<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<!-- === Modal Cancel === -->
<div class="modal fade" id="modalCancel" tabindex="-1" aria-labelledby="modalCancelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah anda sudah yakin akan membatalkan service ? untuk melanjutkan silahkan klik tombol di bawah.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?php echo base_url('user/service/cancel/') . '/' . $data[0]->id; ?>" class="btn btn-primary">Cancel Service</a>
      </div>
    </div>
  </div>
  </div>
<div class="min-vh-100 bg-dark">
<section class="pt-5">
<div class="container">
<!-- <h2 class="text-white">Details Service</h2> -->
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">Account</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('user/service'); ?>">Service</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details <?php echo $data[0]->code ?></li>
          </ol>
        </nav>
</div>
</section>
<section class="pb-5">
<div class="container">
<div class="row">
<div class="col-md-6">
<section class="card card-light card-body border-0 shadow-sm">
    <h2 class="h4 text-light mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Service Information</h2>
    <!-- Basic list group -->
<ul class="list-group list-group-flush list-detail">
  <li class="list-group-item">
  <span class="fs-xs">Code Booking</span>
  <p class="mb-0"><?php echo $data[0]->code ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Tanggal Service</span>
  <p class="mb-0"><?php echo date('d M Y', strtotime($data[0]->date)) ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Status</span>
  <p class="mb-0"><?php echo $data[0]->status ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Jenis Kendaraan</span>
  <p class="mb-0"><?php echo $data[0]->type ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Jenis Service</span>
  <p class="mb-0"><?php echo $data[0]->kategori ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Tingkat Service</span>
  <p class="mb-0"><?php echo $data[0]->tingkat ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Keterangan Service</span>
  <p class="mb-0"><?php echo $data[0]->keterangan ?> </p>
  </li>
</ul>
<?php if ($data[0]->status == 'Booking') {?>
<br>
<br>
<a href="javascript::void(0)" data-bs-toggle="modal" data-bs-target="#modalCancel" class="btn btn-primary">Batalkan Service</a>
<?php } ?>
</section>
</div>
<div class="col-md-6 mt-sm-0 mt-4">
<section class="card card-light card-body border-0 shadow-sm">
<h2 class="h4 text-light mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Status Proccess</h2>
<?php if(count($dataa)){ ?>
  <?php if($dataa[0]->user_id == 1) { ?>
<ul class="list-group list-group-flush list-detail">
  <li class="list-group-item">
  <span class="fs-xs">Admin Name</span>
  <p class="mb-0"><?php echo $dataa[0]->username ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Tanggal Proses</span>
  <p class="mb-0"><?php echo $dataa[0]->created_at ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Keterangan Service</span>
  <p class="mb-0"><?php echo $dataa[0]->keterangan ?></p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Total Pembayaran Service</span>
  <?php if($dataa[0]->price){ ?>
  <p class="mb-0">Rp<?php echo $dataa[0]->price ?></p>
  <?php }else{?>
  <p class="mb-0">-</p>
  <?php } ?>
  </li>
</ul>
<?php }else{ ?>
  <ul class="list-group list-group-flush list-detail">
  <li class="list-group-item">
  <span class="fs-xs">Tanggal Cancel</span>
  <p class="mb-0"><?php echo $dataa[0]->created_at ?> </p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Keterangan</span>
  <p class="mb-0"><?php echo $dataa[0]->keterangan ?></p>
  </li>
  
</ul>
<?php } ?>
<?php }else{ ?>

<?php } ?>
</section>
</div>
</div>
</div>
</section>
</div>
<?= $this->endsection() ?>