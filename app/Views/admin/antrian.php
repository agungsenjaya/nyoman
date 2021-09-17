<?php $no = 1; ?>
<?= $this->extend('app') ?>
<?= $this->section('content') ?>
<section>
<div class="d-flex justify-content-between">
<div>
<h4 class="mb-0">Halaman Antrian</h4>
<p>Berikut antrian yang tersedia hari ini</p>
</div>
<div>
<div class="btn btn-primary"><i class="fi fi-calendar me-2"></i><?php echo date('d M Y') ?></div>
</div>
</div>
<hr>
<br>
<div class="row">
<a href="javascript:void(0)" class="col-md-3 text-dark">
<div class="card card-body bg-secondary border-0 h-100">
    <div class="fs-2 fw-bold text-primary lh-base mb-2"><i class="fi fi-link me-3"></i><?php echo casie(count($data)) ?></div>
    <h3 class="h5 mb-2">Antrian Hari Ini</h3>
    <p class="fs-sm mb-0">Berikut total antrian hari ini di bengkel generasi motor</p>
</div>
</a>
</div>
<br>
<div class="table-responsive">
            <table class="table border " id="table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Code Booking</th>
                <th>Email</th>
                <th>Tanggal Booking</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $dat){ ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dat->code ?></td>
                <td><?php echo $dat->email ?></td>
                <td><?php echo date('d M Y', strtotime($dat->date)) ?></td>
                <td><?php if ($dat->status == 'Finish') {
                  echo '<i class="fi fi-check text-primary me-2 small"></i>';
                } ?>
                <?php echo $dat->status ?></td>
                <td>
                <a href="<?php echo base_url('/admin/antrian/view/') .'/'. $dat->id ?>" class="btn btn-xs btn-primary">Details</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        
    </table>

          </div>
</section>
<?= $this->endsection() ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<style>
a {
    text-decoration: none;
}
</style>
<?= $this->endsection() ?>
<?= $this->section('js') ?>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#table').DataTable();
} );
</script>
<?= $this->endsection() ?>