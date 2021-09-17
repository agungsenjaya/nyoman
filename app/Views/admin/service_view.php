<?= $this->extend('app') ?>
<?= $this->section('content') ?>
<section>
<div class="d-flex justify-content-between">
<div>
<h4 class="mb-0">Details Service</h4>
<p>Berikut details service</p>
</div>
<div>
<!-- <div class="btn btn-primary"><i class="fi fi-calendar me-2"></i><?php echo date('d M Y') ?></div> -->
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/service'); ?>">Service</a></li>
      <li class="breadcrumb-item active" aria-current="page">Details</li>
    </ol>
  </nav>
</div>
</div>
<hr>
<br>
<div class="row">
<div class="col-md-6">
<section class="card card-body border-0 shadow-sm">
    <h2 class="h4 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Service Information</h2>
    <!-- Basic list group -->
<ul class="list-group list-group-flush">
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
<br>
<br>
<a href="javascript::void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProses">Update Service</a>
</section>
</div>
<div class="col-md-6 mt-sm-0 mt-4">
<section class="card card-body border-0 shadow-sm">
<h2 class="h4 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Status Proccess</h2>
<?php if(count($dataa)){ ?>
<?php if($dataa[0]->user_id == 1) { ?>
<ul class="list-group list-group-flush">
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
  <ul class="list-group list-group-flush">
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
</section>
<!-- === Modal Proses === -->
<div class="modal fade" id="modalProses" tabindex="-1" aria-labelledby="modalProsesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Update Service</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="" action="<?php echo base_url('admin/service/proses'); ?>" autocomplete="off" method="POST">
        <?= csrf_field(); ?>
        <input type="hidden" name="user_id" value="<?php echo user()->id ?>">
        <input type="hidden" name="service_id" value="<?php echo $data[0]->id ?>">
          <div class="mb-3">
            <label class="form-label">Seleksi Proses</label>
            <select name="status" class="form-select" required>
              <option value="">--Select Type--</option>
              <option value="Proses">Proses</option>
              <option value="Finish">Finish</option>
              <option value="Cancel">Cancel</option>
            </select>
          </div>
          <div class="mb-3 fn d-none">
          <label class="form-label">Total Pembayaran</label>
          <div class="input-group">
            <span class="input-group-text fs-lg py-1">Rp</span>
            <input name="price" class="form-control" id="currency" placeholder="000.000">
          </div>
          </div>
          <div class="mb-3 fn d-none">
            <label class="form-label">Keterangan Service</label>
            <textarea name="keterangan" cols="30" rows="13" class="form-control" placeholder="Masukan ketrangan"></textarea>
          </div>
    </div>
    <div class="modal-footer">
    <button class="btn btn-primary d-block w-100" type="submit">Update Service</button>
    </form>
    </div>
    </div>
  </div>
</div>
<?= $this->endsection() ?>
<?= $this->section('css') ?>
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.1.0/imask.min.js" integrity="sha512-201IYuQ6RPr47FIs+sGreRBawUyClKluxHg2C5Q5c888sr9Ew5WBj1Cgo/UY7Lcs1Fk+FKX+K5TTbWV1rU+FgQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var qu = `Tuliskan keterangan details service yang telah dilakukan oleh tim bengkel.

Details Biaya :
- Item 1 - Rp300.000
- Item 2 - Rp300.000
- Item 3 - Rp300.000

Service kendaraan anda telah selesai, terima kasih telah melakukan service di bengkel generasi motor.`;
$('select[name=status]').on('change',function(){
  let a = $(this).val();
  if (a) {
    if (a =='Finish' ) {
      $('.fn').removeClass('d-none');
      $('textarea[name=keterangan]').val(qu);
    }else{
      $('.fn').addClass('d-none');
      $('input[name=price], textarea[name=keterangan]').val('');
    }
  }else{
    $('.fn').addClass('d-none');
    $('input[name=price], textarea[name=keterangan]').val('');  
  };
});
var currencyMask = IMask(
  document.getElementById('currency'),
  {
    mask: 'num',
    blocks: {
      num: {
        // nested masks are available!
        mask: Number,
        thousandsSeparator: '.'
      }
    }
  });
</script>
<?= $this->endsection() ?>