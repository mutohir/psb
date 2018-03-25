<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<!-- <span class="pull-right"><a href="<?php echo base_url('admin/C_admin/') ?>"><span class="fa fa-arrow-left"> Kembali</span></a></span> -->
<!-- <a href="<?php echo base_url('admin/C_admin/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right" style="margin-top: 24px;"><span class="fa fa-arrow-left"></span> Kembali</a> -->
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/data_petugas'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Tambah Petugas</h3>
<hr>
    <form action="<?php echo base_url(); ?>admin/C_admin/add_petugas" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" class="form-control" name="nama" placeholder="Nama Petugas" autofocus></td>
            </tr>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="hidden" name="user_id">
                <input type="text" class="form-control" name="username" placeholder="Username Petugas"></td>
            </tr>
            <tr>
                <td><label for="">Password</label><span class="text-danger"> &#42;</span></td>
                <td><input type="password" class="form-control" name="password" placeholder="Password Petugas"></td>
            </tr>
            <tr>
                <td><label for="">Email</label><span class="text-danger"> &#42;</span></td>
                <td><input type="email" class="form-control" name="email" placeholder="Email Petugas"></td>
            </tr>
            <tr>
                <td><input type="hidden" class="form-control" name="level" value="petugas" readonly></td>
            </tr>
            </table>
        </div>
    <div class="form-group pull-right">
        <button class="btn btn-success" type="submit" name="add" value="tambah"><span class="fa fa-save"></span> Simpan</button>
        <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>