        <!-- Navbar with offcanvas menu on mobile -->
       <!-- Light navbar: Dark links against light background -->
       <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a href="<?php echo base_url(); ?>" class="navbar-brand me-2 me-xl-4">
      <!-- <img class="d-block" src="https://finder.createx.studio/img/car-finder/icons/crossover.svg" width="116" alt="Finder"> -->
      <i class="fi-flame me-3 text-danger"></i>BGM
    </a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <?php if(!logged_in()){?>
      <a href="<?php echo base_url('login');?>" class="btn btn-primary btn-sm ms-2 order-lg-3">
      <i class="fi-user me-2"></i>Login<span class='d-none d-sm-inline'> / Reg</span>
    </a>
    <?php }else{ ?>
      <?php if(user()->role == 'User'){?>
      <a href="<?php echo base_url('user');?>" class="btn btn-primary btn-sm ms-2 order-lg-3">
        <i class="fi-user me-2"></i>Akun Saya
      </a>
    <?php }else{ ?>
      <a href="<?php echo base_url('admin');?>" class="btn btn-primary btn-sm ms-2 order-lg-3">
        <i class="fi-user me-2"></i>Admin Account
      </a>
    <?php }} ?>
    
    <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('how') ?>" class="nav-link">Cara Service</a>
        </li>
        <li class="nav-item dropdown">
          <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mau Service</a>
          <ul class="dropdown-menu">
            <li>
              <?php if (logged_in() == true) { ?>
                <a href="<?php echo base_url();?>/user/service/repair" class="dropdown-item"><i class="me-2 fi-car"></i>
              Body Repair
              </a>
              <?php }else{ ?>
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalLogin" class="dropdown-item"><i class="me-2 fi-car"></i>
              Body Repair
              </a>
              <?php }?>
            </li>
            <li class="dropdown-divider"></li>
            <li>
            <?php if (logged_in() == true) { ?>
                <a href="<?php echo base_url();?>/user/service/painting" class="dropdown-item"><i class="me-2 fi-flame"></i>
              Repainting
              </a>
              <?php }else{ ?>
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalLogin" class="dropdown-item"><i class="me-2 fi-flame"></i>
              Repainting
              </a>
              <?php }?>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('service/check') ?>" class="nav-link" tabindex="-1" aria-disabled="true">Cek Nomor Antrian</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('contact') ?>" class="nav-link" tabindex="-1" aria-disabled="true">Hubungi Kami</a>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- === Modal Login === -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fi-bell me-2 text-primary"></i>Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="">Untuk melakukan service repainting ataupun body repair anda harus mempunyai akun terlebih dahulu, Terima Kasih.</p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url();?>/login" class="btn btn-secondary">Login</a>
        <a href="<?php echo base_url();?>/register" class="btn btn-primary">Register</a>
      </div>
    </div>
  </div>
</div>