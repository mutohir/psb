<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/panduan'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Ubah Panduan Pendaftaran</h3>
<hr>
    <form action="" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
             <tr>
                <td><label for="">Judul Panduan</label></td>
                <td><input type="text" class="form-control" name="judul_panduan" value="<?php echo $panduan->judul_panduan; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="">Isi Panduan</label></td>
                <td><textarea name="isi_panduan" id="summernote" cols="130" rows="10"><?php echo $panduan->isi_panduan; ?></textarea></td>
            </tr>
            </table>
        </div>
    <div class="form-group pull-right">
        <button class="btn btn-success" type="submit" name="edit"><span class="fa fa-send"></span> Simpan</button>
        <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>