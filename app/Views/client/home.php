<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<section class="bg-top-center bg-dark bg-repeat-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/hero-bg.png); background-size: 1920px 630px;">
        <div class="container pt-5">
          <div class="row pt-lg-4 pt-xl-5">
            <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
              <h1 class="display-4 text-light pb-2 mb-4 me-md-n5">Bengkel Generasi Motor</h1>
              <p class="fs-lg text-light opacity-70">Solusi terbaik untuk kendaraan yang baik, layanan service yang kami cover body repair dan repainting.</p>
            </div>
            <div class="col-lg-8 col-md-7 pt-md-5"><img class="d-block mt-4 ms-auto" src="<?php echo base_url(); ?>/assets/img/hero-img.png" width="800" alt="Car"></div>
          </div>
        </div>
        <div class="container mt-4 mt-sm-3 mt-lg-n3 pb-5 mb-md-4">
        <div class="col-md-8 offset-md-2">
          <!-- Tabs-->
          <p>* Peraturan saat datang ke bengkel selama Covid-19</p>
          <ul class="nav nav-tabs nav-tabs-light mb-4">
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fi fi-check-circle me-3"></i>Pakai Masker</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fi fi-check-circle me-3"></i>Mencuci Tangan</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fi fi-check-circle me-3"></i>Jaga Jarak</a></li>
          </ul>
          <!-- Form group-->
          <form class="form-group rounded-pill border-primary">
                <!-- <hr class="d-md-none my-2"> -->
                <div class="input-group border-end-md"><span class="input-group-text rounded-pill ps-3"><i class="fi-calendar"></i></span>
                  <input class="date border-0 form-control" placeholder="Cek tanggal booking service">
                </div>
                  <button class="btn btn-serv btn-primary rounded-pill w-md-auto ms-sm-3" disabled type="button">
                  <span class="">Cek Service</span>
                  </button>
              </form>
        </div>
        </div>
      </section>
      <div class="space-m">
      <div class="text-center">
      <!-- <h3>Mengapa kami</h3> -->
      <p class="">Kami selalu memberikan solusi untuk setiap masalah kendaraan anda.</p>
      </div>
      <section class="container d-flex flex-wrap flex-column flex-sm-row mb-md-3 justify-content-center">
          <div class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 shadow-sm rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle me-2"><i class="fi-check-circle"></i></div>
          <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Pelayanan cepat</h3></div>
          <div class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 shadow-sm rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle me-2"><i class="fi-check-circle"></i></div>
          <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Bergaransi</h3></div>
          <div class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 shadow-sm rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle me-2"><i class="fi-check-circle"></i></div>
          <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Profesional</h3></div>
          <div class="icon-box card flex-row align-items-center flex-shrink-0 card-hover border-0 shadow-sm rounded-pill py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle me-2"><i class="fi-check-circle"></i></div>
          <h3 class="icon-box-title fs-sm ps-1 pe-2 mb-0">Terjangkau</h3></div>
      </section>
      </div>
      <section class="space-m border-top">
      <div class="container">
      <div class="row">
      <div class="col-md-6">
      <img src="<?php echo base_url(); ?>/assets/img/home-1.png" alt="" width="100%">
      </div>
      <div class="col-md-6 align-self-center">
      <h2>Tentang Bengkel Generasi Motor</h2>
      <p class="">Bengkel Generasi Motor adalah bengkel perbaikan dan pengecatan body mobil yang berlokasi di Jalan raya Lodaya Karang tengah. Bengkel yang didirikan oleh Bapak I Wayan Sunarta pada tahun 2018 ini mempunyai 4 pegawai yang terbagi dalam masing-masing bagian pengerjaan</p>
      </div>
      </div>
      </div>
      </section>
      <div class="container">
      <hr>
      </div>
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
var mod = new bootstrap.Modal(document.getElementById('modalLoading'), {
    keyboard: false,
    backdrop: 'static'
  });
var modd = new bootstrap.Modal(document.getElementById('modalTersedia'), {
    keyboard: false,
    backdrop: 'static'
  });
var moddd = new bootstrap.Modal(document.getElementById('modalPenuh'), {
    keyboard: false,
    backdrop: 'static'
  });
// === Query Buat Load Api Booking ===
var url = 'https://bengkelgm.herokuapp.com/api/services';
let dat;
$.getJSON(url,function (data) {
  dat = data;
}).done(function() {
    console.log( "second success" );
  })
  .fail(function() {
    console.log( "error" );
  })
  .always(function() {
    console.log( "complete" );
  });
  // === Query Buat Check Tanggal ===
var a = moment().format('yyyyMMDD');
var b;
$('.date').change(function() {
  b = $(this).val();
  if (b) {
    var c = b.replaceAll('-','') - a;
    if (c >= 0) {
      $('.btn-serv').removeAttr('disabled');
    }else{
      $('.btn-serv').attr('disabled','true');
    }
  }
});
// === Query Buat Check Tanggal Ke Api Booking ===
$('.btn-serv').on('click',function(){
  mod.show();
  $('.avai').text(b);
  var search = b;
  var count = dat.reduce(function(n, dat) {
      return n + (dat.date === search);
  }, 0);
  if (count) {
    if (count >= 4) {
      mod.hide();
      moddd.show();
    }else{
      mod.hide();
      modd.show();
    }
  }else{
    mod.hide();
    modd.show();
  }
});
</script>
<?= $this->endsection() ?>