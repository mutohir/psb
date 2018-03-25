<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>
<div class="col-sm-9">
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/data_pendaftar'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Akun Pendaftar</h3><hr>
<!-- <a href="#"><button class=" btn btn-md btn-primary"><span class="fa fa-file"></span> Tambah Berkas</button></a><hr> -->
<div class="table-responsive">
        <table class="table table-bordered">
               <tr>
                    <td><label for="">Username</label></td>
                    <td><?php echo $petugas->username; ?></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td><?php echo $petugas->email; ?></td>
                </tr>
                <tr>
                    <td><label for="">Password</label></td>
                    <td><?php echo $petugas->password; ?></td>
                </tr>
                <tr>
                    <td><label for="">Level</label></td>
                    <td><?php echo $petugas->level; ?></td>
                </tr>
   </table>
</div>
</div>
    </div><!-- End Row -->
</div>
<div class="clearfix"></div>