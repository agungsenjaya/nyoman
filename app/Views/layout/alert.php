<!-- === Modal Cek Sukses === -->
<div class="modal fade" id="modalCekSuk" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <i class="fi fi-check-circle display-4 text-primary"></i>
      <br>
      <br>
        <p>Pencarian kode booking telah ditemukan <br> silahkan check details.</p>
      </div>
    </div>
  </div>
</div>
<!-- === Modal Cek Failed === -->
<div class="modal fade" id="modalCekFail" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <i class="fi fi-x display-4 text-primary"></i>
      <br>
      <br>
        <p>Pencarian kode booking tidak ditemukan harap periksa kembali kode yang anda masukan.</p>
      </div>
    </div>
  </div>
</div>
<!-- === Toast Tersedia === -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="toastTersedia" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header bg-primary text-white">
    <i class="fi-bell me-2"></i>
    <span class="fw-bold me-auto">Notifications</span>
    <button type="button" class="btn-close btn-close-white text-white ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body text-primary">Tanggal booking tersedia, <span class="avai"></span></div>
  </div>
</div>
<!-- === Modal Penuh === -->
<div class="modal fade" id="modalPenuh" tabindex="-1" aria-labelledby="modalPenuhLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <i class="fi fi-x display-4 text-primary"></i>
      <br>
      <br>
      <p>Maaf untuk service pada tanggal <span class="avai"></span> tidak tersedia/full, silahkan coba untuk melihat tanggal lainnya, Terima kasih.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke Siap</button>
      </div>
    </div>
  </div>
</div>
<!-- === Modal Tersedia === -->
<div class="modal fade" id="modalTersedia" tabindex="-1" aria-labelledby="modalTersediaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <i class="fi fi-check-circle display-4 text-primary"></i>
      <br>
      <br>
      <p>Selamat untuk service pada tanggal <span class="avai"></span> telah tersedia, silahkan pilih kategori service di bawah, Pastikan anda sudah login / mempunyai akun.</p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url();?>/user/service/repair" class="btn btn-secondary">Body Repair</a>
        <a href="<?php echo base_url();?>/user/service/repainting" class="btn btn-primary">Repainting</a>
      </div>
    </div>
  </div>
</div>
<!-- === Modal Loading === -->
<div class="modal" id="modalLoading" tabindex="-1" aria-labelledby="modalLoadingLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-transparent border-0 d-flex justify-content-center">
    <div class="mx-auto">
    <div class="spinner-border text-white" style="width: 3rem; height: 3rem;" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    </div>
    </div>
  </div>
</div>
  <!-- === Modal Logout === -->
<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogout" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan keluar dari akun ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <a href="<?php echo base_url('logout'); ?>" class="btn btn-primary btn-sm">Logout Now</a>
      </div>
    </div>
  </div>
</div>