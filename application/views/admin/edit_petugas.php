<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/data_petugas/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Petugas</h3><hr>
    <form action="" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <tr>
                <td><label for="">Nama</label></td>
                <td><input type="hidden" name="user_id" value="<?php echo $petugas->user_id ?>"><input type="text" class="form-control" name="nama" value="<?php echo $petugas->nama; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Username</label></td>
                <td><input type="hidden" name="user_id" value="<?php echo $petugas->user_id ?>"><input type="text" class="form-control" name="username" value="<?php echo $petugas->username; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" class="form-control" name="email" value="<?php echo $petugas->email; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Password</label></td>
                <td><input type="text" class="form-control" name="password" value="<?php echo $petugas->password; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Level</label></td>
                <td><input type="text" class="form-control" name="level" value="<?php echo $petugas->level; ?>" readonly></td>
            </tr>
        </table>
    </div>
    <div>
       <button class="btn btn-success pull-right" type="submit" name="edit"><span class="fa fa-save"></span> Simpan</button>
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>