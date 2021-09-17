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

         <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #09080d;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 0.6;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #fff;;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #9691a4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Page loading spinner-->
        <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading..</span>
        </div>
        </div>
        <?= view('layout/alert') ?>
        <?= view('layout/header') ?>
        <div class="">
          <?= $this->renderSection('content') ?>
        </div>
        <?= view('layout/footer') ?>
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