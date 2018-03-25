<div class="row">
<?php include('templates/etalase.php') ?>
<div class="col-md-9">
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
<a style="margin-top: 15px;" href="<?php echo base_url('pendaftar/C_pendaftar/edit_profil/'); ?><?php echo $profil->user_id; ?>" data-toggle="tooltip" title="Edit" class="pull-right"><button class="btn btn-success fa fa-edit pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Profil Pengguna</h3><hr>
<!-- <a href="#"><button class=" btn btn-md btn-primary"><span class="fa fa-file"></span> Tambah Berkas</button></a><hr> -->
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-bordered table-striped">
                <tr>
                    <td><label for="">Nama Anda</label></td>
                    <td><?php echo $profil->nama; ?></td>
                </tr>
                <tr>
                    <td><label for="">Username</label></td>
                    <td><?php echo $profil->username; ?></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td><?php echo $profil->email; ?></td>
                </tr>
<!--                 <tr>
                    <td><label for="">Password</label></td>
                    <td><?php echo $profil->password; ?></td>
                </tr> -->
                <tr>
                    <td><label for="">Hak Akses</label></td>
                    <td><?php echo $profil->level; ?></td>
                </tr>
                 
   </table>
   </div>
</div>
</div>
    </div><!-- End Row -->
</div>
<div class="clearfix"></div>