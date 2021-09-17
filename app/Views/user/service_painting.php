<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<section class="bg-top-center space-xl bg-dark min-vh-100 bg-repeat-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/hero-bg.png); background-size: 1920px 630px;">
<div class="container">
<div class="row">
<div class="col-md-6">
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-light">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service Body Repainting</li>
          </ol>
        </nav>
<h2 class="text-white">Service Body Repainting</h2>
<img class="d-block mt-4" src="<?php echo base_url(); ?>/assets/img/hero-img.png" width="100%" alt="Car">
<p class="text-white">Perbaiki body kendaraan anda yang rusak Silahkan untuk <br> mengecek dahulu tanggal service.</p>
<section class="d-flex flex-wrap flex-column flex-sm-row mb-md-3 justify-content-start">
          <div class="icon-box card flex-row align-items-center flex-shrink-0 card-light py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle me-2"><i class="fi-check-circle"></i></div>
          <h3 class="icon-box-title text-white fs-sm ps-1 pe-2 mb-0">Nambah Cat</h3></div>
          <div class="icon-box card flex-row align-items-center flex-shrink-0 card-light py-2 ps-2 pe-4 mb-2 mb-sm-3 me-sm-3 me-xxl-4">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle me-2"><i class="fi-check-circle"></i></div>
          <h3 class="icon-box-title text-white fs-sm ps-1 pe-2 mb-0">Full Repainting</h3></div>
      </section>

</div>
<div class="col-md-6">

<div class="card border-0 shadow-sm">
<div class="card-body">
<div class="tgl">
<p>Sebelum melakukan service body repair silahkan cek ketersediaan tanggal terlabih dahulu pada form di bawah.</p>
<form class="form-group rounded-pill border-primary">
    <!-- <hr class="d-md-none my-2"> -->
    <div class="input-group border-end-md"><span class="input-group-text text-muted rounded-pill ps-3"><i class="fi-calendar"></i></span>
      <input class="date border-0 form-control" placeholder="Cek tanggal booking service">
    </div>
      <button class="btn btn-serv btn-primary rounded-pill w-md-auto ms-sm-3" disabled type="button">
      <i class="fi fi-arrow-right d-sm-none d-block"></i><span class="d-none d-sm-block">Cek Service</span>
      </button>
  </form>
</div>
<div class="form d-none">
<!-- Horizontal card layout -->
<div class="card border-0 bg-primary text-white">
  <div class="card-body">
    <h5 class="card-title text-white"><i class="fi fi-check-circle me-3"></i><span class="avai">-</span></h5>
    <p class="card-text fs-sm">Tanggal booking tersedia, silahkan lengkapi form dibawah.</p>
    <!-- <a href="#" class="btn btn-sm btn-primary">Go somewhere</a> -->
  </div>
</div>  
<form action="<?php echo base_url('user/service/store')?>" method="POST">
<?= csrf_field(); ?>
<input type="hidden" value="Booking" name="status">
<input type="hidden" value="Painting" name="kategori">
<input type="hidden" value="<?php echo user()->id; ?>" name="user_id">
<div class=" mb-3">
<!-- <input type="hidden" class="form-control" placeholder="Cek tanggal booking service" value="2013-01-08"> -->
<div class="d-none">
<label class="form-label fs-xs">Tanggal Service</label>
<input type="date" name="date" class="form-control" placeholder="Cek tanggal booking service" required>
</div>
</div>
<div class=" mb-3">
  <label class="form-label fs-xs">Jenis Kendaraan</label>
  <select name="type" id="" class="form-select" required>
  <option value="">-- Select your type --</option>
  <option value="Mini Bus">Mini Bus</option>
  <option value="Bus">Bus</option>
  <option value="Truk">Truk</option>
  </select>
</div>
<div class=" mb-3">
  <label class="form-label fs-xs">Type Pengecatan</label>
  <select name="tingkat" id="" class="form-select" required>
  <option value="">-- Select your type --</option>
  <option value="Nambah Cat">Nambah Cat</option>
  <option value="Full Body Painting">Full Body Painting</option>
  </select>
</div>
<div class=" mb-3">
<label class="form-label fs-xs" for="">Plat Nomor Kendaraan</label>
<input type="text" class="form-control" placeholder="Example(F87XX)" name="nomor" required>
</div>
<div class="mb-3">
<label class="form-label fs-xs" for="">Keterangan Pengecatan</label>
<textarea name="keterangan" class="form-control" id="" cols="30" rows="10" placeholder="Masukan Keterangan Pengecatan" required></textarea>
</div>
<div>
<button class="btn btn-primary" type="submit">Insert Now</button>
</div>
</form>
</div>
</div>
</div>

</div>
</div>
</div>
</section>
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
var mod = new bootstrap.Modal(document.getElementById('modalLoading'), {
    keyboard: false,
    backdrop: 'static'
  });
var moddd = new bootstrap.Modal(document.getElementById('modalPenuh'), {
    keyboard: false,
    backdrop: 'static'
  });
var tos = document.getElementById('toastTersedia')
var toast = bootstrap.Toast.getInstance(tos);
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
      $('.tgl').addClass('d-none');
      $('.form').removeClass('d-none');
      $('input[name=date]').val(b);
      toast.show();
    }
  }else{
    mod.hide();
    $('.tgl').addClass('d-none');
    $('.form').removeClass('d-none');
    $('input[name=date]').val(b);
    toast.show();
  }
});
</script>
<?= $this->endsection() ?>