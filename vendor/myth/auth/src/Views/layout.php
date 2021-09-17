<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>BGM | Bengkel Generasi Mobil</title>

    <!-- Bootstrap core CSS -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/prism-line-numbers.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prism-toolbar.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prism.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/simplebar.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>">
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
    
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

<?= view('Myth\Auth\Views\_navbar') ?>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

<script src="<?php echo base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
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
        <!-- Main theme script-->
        <script src="<?php echo base_url() ?>/assets/js/app.min.js"></script>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
