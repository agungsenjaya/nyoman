<?php $no = 1; ?>
<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<div class="min-vh-100 bg-dark">
<section class="pt-4">
<div class="container">
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">Account</a></li>
            <li class="breadcrumb-item active" aria-current="page">Riwayat Service</li>
          </ol>
        </nav>
</div>
</section>
<div class="container">
<div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
            <!-- Account nav-->
            <div class="card card-body card-light border-0 shadow-sm pb-1 me-lg-1">
              <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
              <!-- <img class="rounded-circle" src="img/avatars/01.jpg" width="48" alt="Robert Fox"> -->
              <i class="fi-user h2 text-white"></i>
                <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                  <h2 class="fs-lg text-light mb-0"><?php echo user()->username ?></h2>
                  <!-- <span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span> -->
                  <ul class="list-unstyled fs-sm mt-3 mb-0">
                    <li><a class="nav-link-light fw-normal"><i class="fi-phone opacity-60 me-2"></i><?php echo user()->phone ?></a></li>
                    <li><a class="nav-link-light fw-normal"><i class="fi-mail opacity-60 me-2"></i><?php echo user()->email ?></a></li>
                  </ul>
                </div>
              </div>
              <a class="btn btn-primary btn-lg w-100 mb-3" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalLogout"><i class="fi-logout me-2"></i>Logout</a>
              <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
              <div class="collapse d-md-block mt-3" id="account-nav">
                <div class="card-nav">
                <a class="card-nav-link" href="<?php echo base_url('user') ?>"><i class="fi-user me-2"></i>Dashboard</a>
                <a class="card-nav-link active" href="<?php echo base_url('user/service'); ?>"><i class="fi-bell-on me-2"></i>Riwayat Service</a>
                <a class="card-nav-link" href="<?php echo base_url('user/profile'); ?>"><i class="fi-lock me-2"></i>Personal &amp; Security</a>
                </div>
              </div>
            </div>
          </aside>
          <!-- Content-->
          <div class="col-lg-8 col-md-7 mb-5">
            <h1 class="h2 text-light">Riwayat Service</h1>
            <div class="">
            
            <div class="table-responsive">
            <table class="table table-dark border " id="table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Code Booking</th>
                <th>Service</th>
                <th>Booking</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->data as $dat){ ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><a href="javascript:void(0)" class="copy me-2" data-clipboard-text="<?php echo $dat->code ?>"> <i class="fi-folders"></i> </a><?php echo $dat->code ?></td>
                <td><?php echo $dat->kategori ?></td>
                <td><?php echo date('d M Y', strtotime($dat->date)) ?></td>
                <td><?php if ($dat->status == 'Finish') {
                  echo '<i class="fi fi-check text-primary me-2 small"></i>';
                } ?>
                <?php echo $dat->status ?></td>
                <td>
                <a href="<?php echo base_url('/user/service/details/') .'/'. $dat->id ?>" class="btn btn-xs btn-primary">Details</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        
    </table>

          </div>
          </div>
          </div>
        </div>
</div>
</div>
<?= $this->endsection() ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js" async></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#table').DataTable();
} );
$(document).ready(function () {
    new Clipboard('.copy');
});
$('.copy').on('click',function(){
  alert('Berhasil di copy');
})
</script>
<?= $this->endsection() ?>