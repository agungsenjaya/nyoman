<?= $this->extend('index') ?>
<?= $this->section('content') ?>
<section class="bg-top-center min-vh-100 space-xl bg-repeat-0" style="background-image: url(<?php echo base_url(); ?>/assets/img/hero-bg.png); background-size: 1920px 630px;">
<div class="container">
<div class="col-md-6 offset-md-3">
<div class="text-center">
<h2 class="mb-0">Cek Nomor Antrian</h2>
<p>Silahkan masukan nomor antrian untuk mengecek</p>
</div>
<br>
<img class="d-block mt-4" src="<?php echo base_url(); ?>/assets/img/hero-img.png" width="100%" alt="Car">
<form class="form-group rounded-pill border-primary">
    <!-- <hr class="d-md-none my-2"> -->
    <div class="input-group border-end-md"><span class="input-group-text text-muted rounded-pill ps-3"><i class="fi-flame"></i></span>
      <input class="border-0 form-control" placeholder="Masukan code booking anda">
    </div>
      <button class="btn btn-serv btn-primary rounded-pill w-md-auto ms-sm-3" disabled type="button">
      <span class="">Track Service</span>
      </button>
  </form>
<br>
<div id="found">

</div>

</div>
</div>
</section>
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script>
var mod = new bootstrap.Modal(document.getElementById('modalLoading'), {
    keyboard: false,
    backdrop: 'static'
  });
var modd = new bootstrap.Modal(document.getElementById('modalCekSuk'), {
    keyboard: false,
    backdrop: 'static'
  });
var moddd = new bootstrap.Modal(document.getElementById('modalCekFail'), {
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
// === Query Input Cek Booking ===
let a;
$('input').keyup(function (e) { 
    a = $(this).val();
    if (a) {
        $('.btn-serv').removeAttr('disabled');
    }else{
        $('.btn-serv').attr('disabled','true');
    }
});
$('.btn-serv').on('click',function(){
  mod.show();
  $('.found').remove();
  var ok = dat.find(el => el.code == a);
  if (ok) {
    mod.hide();
    modd.show();
    $('#found').append(`<div class="card border-primary found">
<div class="card-body">
<h6 class="mb-0">Hasil pencarian</h6>
<ul class="list-group list-group-flush">
  <li class="list-group-item">
  <span class="fs-xs">Code Booking</span>
  <p class="mb-0">${ok.code}</p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Tanggal Service</span>
  <p class="mb-0">${ok.date}</p>
  </li>
  <li class="list-group-item">
  <span class="fs-xs">Status</span>
  <p class="mb-0">${ok.status}</p>
  </li>
  </ul>
</div>
</div>`);
  }else{
    mod.hide();
    moddd.show();
    $('#found').append(`<div class="card border-primary found">
<div class="card-body">
<h6 class="mb-0">Hasil pencarian</h6>
  <br>
  <p>Kami tidak menemukan service, periksa kembali kode booking yang anda masukan.</p>
</div>
</div>`);
  }
});
</script>
<?= $this->endsection() ?>