<div class="container">
<div class="clearfix"><div class="clearfix"></div></div>
  <h4>Selamat Datang <b><?php echo $username; ?></b> !</h4>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-xs-9 col-md-9">
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Profil Admin</h3><hr>
<?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Hoorray!</strong> <?php echo $_SESSION['success']; ?>
        </div>
    <?php elseif (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
        </div>
    <?php else: ?>
    <?php endif; ?>
    <form action="" method="POST" role="form">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td><label for="">Password Lama</label></td>
                <td><?php echo $pass->password; ?></td>
            </tr>
            <tr>
                <td><label for="">Password Baru</label></td>
                <td><input type="password" class="form-control" name="password"></td>
            </tr>
        </table>
    </div>
    <div>
        <button class="btn btn-primary" type="submit" name="edit" onclick="return confirm('Anda yakin ingin mengubah password?'><span class="fa fa-send")></span> Simpan</button>
        <a href="<?php echo base_url('petugas/C_petugas/') ?>" class="pull-right"><span class="fa fa-arrow-left"> Kembali</span></a>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>