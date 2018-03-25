<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-md-9">
            <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Profil Admin</h3><hr>
            <form action="<?php echo base_url('admin/C_admin/do_upload') ?>" method="POST" role="form" enctype="multipart/form-data">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td><label for="">Foto Profil</label></td>
                            <td><input type="file" class="form-control" name="foto_profil" size="20"></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit" name="edit"><span class="fa fa-send"></span> Simpan</button>
                    <a href="<?php echo base_url('admin/C_admin/') ?>" class="pull-right"><span class="fa fa-arrow-left"> Kembali</span></a>
                </div>
            </form>
        </div>
        </div><!-- End Row -->
    </div>
    <div class="clearfix"></div>