<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BGM | Bengkel Generasi Motor</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="apple-touch-icon" sizes="180x180" href="">
        <link rel="icon" type="image/png" sizes="32x32" href="">
        <link rel="icon" type="image/png" sizes="16x16" href="">
        <link rel="manifest" href="">
        <link rel="mask-icon" color="#5bbad5" href="">
        <meta name="msapplication-TileColor" content="#766df4">
        <meta name="theme-color" content="#ffffff">
        <!-- Vendor -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prism-line-numbers.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prism-toolbar.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prism.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/simplebar.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/flatpickr.min.css');?>">
        <?= $this->renderSection('css') ?>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?= view('layout/alert') ?>
        <div class="">
        <div class="row g-0">
        <div class="col-md-2 min-vh-100 bg-dark">
        <div class="p-3">
        <div class="card text-center card-light">
        <div class="card-body">
        <i class="fi fi-flame h1 text-primary"></i>
        <h4 class="text-white mb-0">BGM <span class="text-primary">ADMIN</span></h4>
        <div>
        <span class="fs-xs">Bengkel Generasi Motor</span>
        </div>
        </div>
        </div>
        <br>
        <hr>
        <!-- Flush list group -->
        <div class="list-group list-group-flush list-admin">
            <a href="<?php echo base_url('admin') ?>" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fi fi-dashboard me-3"></i>Dashboard
            </a>
            <a href="<?php echo base_url('admin/antrian') ?>" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fi fi-bell-on me-3"></i>Antrian
            </a>
            <a href="<?php echo base_url('admin/service') ?>" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fi fi-gearbox me-3"></i>Service
            </a>
            <a href="<?php echo base_url('admin/user') ?>" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fi fi-users me-3"></i>Users
            </a>
            <a href="<?php echo base_url('/') ?>" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fi fi-eye-on me-3"></i>Preview Website
            </a>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalLogout" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fi fi-logout me-3"></i>Logout
            </a>
        </div>
        </div>
        </div>
        <div class="col-md-10">
        <div class="p-5">
          <?= $this->renderSection('content') ?>
        </div>
        </div>
        </div>
        </div>
        <script src="" async defer></script>
         <!-- Vendor scripts: js libraries and plugins-->
        <script src="<?php echo base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php echo base_url() ?>/assets/js/simplebar.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/smooth-scroll.polyfills.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-core.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-markup.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-clike.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-javascript.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-pug.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-toolbar.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-copy-to-clipboard.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/prism-line-numbers.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/flatpickr.min.js"></script>
        <!-- Main theme script-->
        <script src="<?php echo base_url() ?>/assets/js/app.min.js"></script>
        <?= $this->renderSection('js'); ?>
        <script>
        $(".date").flatpickr({
            // 
        });
        </script>
    </body>
</html>