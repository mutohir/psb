<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>
<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/jadwal'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Jadwal</h3><hr>
    <form action="" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
     <table class="table table-bordered table-striped">
            <tr>
                <td><label for="">Nama Kegiatan</label></td>
                <td><input type="text" class="form-control" name="nama_kegiatan" value="<?php echo $jadwal->nama_kegiatan; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Tanggal Mulai Pendaftaran</label></td>
                <td><input type="hidden" name="id_jadwal" value="<?php echo $jadwal->id_jadwal ?>">
                <input type="date" class="form-control" name="tgl_awal" value="<?php echo $jadwal->tgl_awal; ?>">
                </td>
            </tr>
             <tr>
                <td><label for="">Tanggal Akhir Pendaftaran</label></td>
                <td><input type="date" class="form-control" name="tgl_akhir" value="<?php echo $jadwal->tgl_akhir; ?>">
                </td>
            </tr>
            </table>
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