<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Penerimaan</h3><hr>
    <form action="" method="POST" role="form">
    <div class="table-responsive">
        <table class="table table-bordered">

            <tr>
                <td><label for="">No. Pendaftaran</label></td>
                <td><input type="hidden" name="id_santri" value="<?php echo $queries->id_santri ?>"><input type="text" class="form-control" name="username" value="<?php echo $queries->no_pendaftaran; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Nama Santri</label></td>
                <td><input type="text" class="form-control" name="email" value="<?php echo $queries->nama_santri; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Alamat Pendaftar</label></td>
                <td><input type="text" class="form-control" name="password" value="<?php echo $queries->alamat_santri; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Status</label></td>
                <td><input type="text" class="form-control" name="level" value="<?php echo $queries->status_daftar; ?>" readonly></td>
            </tr>
        </table>
    </div>
    <div>
        <button class="btn btn-primary" type="submit" name="edit"><span class="fa fa-send"></span> Simpan</button>
        <a href="<?php echo base_url('admin/C_admin/penerimaan') ?>" class="pull-right"><span class="fa fa-arrow-left"> Kembali</span></a>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>