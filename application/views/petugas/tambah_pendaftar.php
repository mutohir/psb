<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<!-- <span class="pull-right"><a href="<?php echo base_url('petugas/C_petugas/') ?>"><span class="fa fa-arrow-left"> Kembali</span></a></span> -->
<!-- <a href="<?php echo base_url('petugas/C_petugas/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right" style="margin-top: 24px;"><span class="fa fa-arrow-left"></span> Kembali</a> -->
<a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/data_pendaftar'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Tambah Akun Pendaftar</h3>
<hr>
    <form action="<?php echo base_url(); ?>petugas/C_petugas/add_pendaftar" method="POST" role="form">
    <b class="text-danger"> <?php echo $exist; ?></b>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="text" class="form-control" name="nama" placeholder="Nama Pendaftar" autofocus></td>
            </tr>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="hidden" name="user_id">
                <input type="text" class="form-control" name="username" placeholder="Username Pendaftar"></td>
            </tr>
            <tr>
                <td><label for="">Password</label><span class="text-danger"> &#42;</span></td>
                <td><input type="password" class="form-control" name="password" placeholder="Password Pendaftar"></td>
            </tr>
            <tr>
                <td><label for="">Email</label><span class="text-danger"> &#42;</span></td>
                <td><input type="email" class="form-control" name="email" placeholder="Email Pendaftar"></td>
            </tr>
            <tr>
                <td><input type="hidden" class="form-control" name="level" value="pendaftar" readonly></td>
            </tr>
            </table>
        </div>
    <div class="form-group pull-right">
        <button class="btn btn-success" type="submit" name="add" value="tambah"><span class="fa fa-save"></span> Simpan</button>
        <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>