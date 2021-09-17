<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<div class="min-vh-100 bg-dark">
<section class="pt-4">
<div class="container">
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">Account</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <a class="card-nav-link active" href="<?php echo base_url('user') ?>"><i class="fi-user me-2"></i>Dashboard</a>
                <a class="card-nav-link" href="<?php echo base_url('user/service'); ?>"><i class="fi-bell-on me-2"></i>Riwayat Service</a>
                <a class="card-nav-link" href="<?php echo base_url('user/profile'); ?>"><i class="fi-lock me-2"></i>Personal &amp; Security</a>
                </div>
              </div>
            </div>
          </aside>
          <!-- Content-->
          <div class="col-lg-8 col-md-7 mb-5">
            <h1 class="h2 text-light">Service Active</h1>
            <div class="row pt-2">
              <div class="col-lg-9 col-md-12 col-sm-8 mb-2 mb-m-4">

                <!-- Accordion light -->
                <?php if ($this->data) {?>
              <div class="accordion accordion-light" id="accordionExample">
              <?php foreach($this->data as $dat) { ?>
              <!-- Accordion light item -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $dat->id ?>" aria-expanded="false" aria-controls="collapse<?php echo $dat->id ?>"><?php echo $dat->code ?></button>
                </h2>
                <div class="accordion-collapse collapse" aria-labelledby="" data-bs-parent="#accordionExample" id="collapse<?php echo $dat->id ?>">
                  <div class="accordion-body text-light">

                  <!-- Basic list group -->
                  <ul class="list-group list-service list-group-flush">
                    <li class="list-group-item">
                    <span class="fs-xs">Tanggal Booking</span>
                    <p class="mb-0"><?php echo date('d M Y', strtotime($dat->date)) ?></p>
                    </li>
                    <li class="list-group-item">
                    <span class="fs-xs">Status</span>
                    <p class="mb-0"><?php echo $dat->status ?></p>
                    <!-- <div class="mb-2">
                    <div class="badge rounded-pill bg-primary px-4 py-2">Booking</div>
                    </div> -->
                    </li>
                    <li class="list-group-item">
                    <a href="<?php echo base_url('/user/service/details/') .'/'. $dat->id ?>" class="btn btn-primary mt-3">Detail Service</a>
                    </li>
                  </ul>
                  
                  </div>
                </div>
              </div>
              <?php } ?>
              </div>
              <?php }else { ?>
              <p class="text-white">Tidak ada service booking yang sedang berjalan.</p>
              <?php } ?>

              </div>
              <div class="col-lg-3 col-md-12 col-sm-4 mb-4">
              <!-- <i class="fi-flame me-3 text-danger"></i>BGM -->
              <div class="card card-body card-light card-hover border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="https://finder.createx.studio/img/car-finder/icons/sedan.svg" width="160" alt="Sedan"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-list.html">Car Service</a></div>
                <div class="pt-4 pb-2 py-lg-5">
                  <h6 class="text-light mb-2 text-capitalize">Mempunyai kendala informasi?</h6>
                  <p class="fs-sm text-light opacity-70 mb-0">Silahkan hubungi tim service kami melalui halaman <a href="<?php echo base_url('contact'); ?>">kontak</a> yang tersedia, Terima kasih.</p>
                </div>
              </div>
            </div>
            <!-- Action buttons-->
            <!-- <div class="row">
              <div class="col-lg-9">
                <div class="d-flex align-items-center justify-content-between pb-1">
                  <button class="btn btn-primary" type="button">Save changes</button>
                  <button class="btn btn-link btn-light btn-sm px-0" type="button"><i class="fi-trash me-2"></i>Delete account</button>
                </div>
              </div>
            </div> -->
          </div>
        </div>
</div>
</div>
<?= $this->endsection() ?>