<?php $no = 1; ?>
<?= $this->extend('app') ?>
<?= $this->section('content') ?>
<section>
<div class="d-flex justify-content-between">
<div>
<h4 class="mb-0">Halaman User</h4>
<p>Berikut management user bengkel</p>
</div>
<div>
<div class="btn btn-primary"><i class="fi fi-calendar me-2"></i><?php echo date('d M Y') ?></div>
</div>
</div>
<hr>
<br>
<br>
<div class="table-responsive">
            <table class="table border " id="table" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Date Reg</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $dat){ ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td class="text-capitalize"><?php echo $dat->username ?></td>
                <td><?php echo $dat->email ?></td>
                <td><?php echo $dat->created_at ?></td>
                <td><?php echo $dat->role ?></td>
                <td>
                <a href="<?php echo base_url('/admin/user/view/') .'/'. $dat->id ?>" class="btn btn-xs btn-primary">Details</a>
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