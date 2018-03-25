<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/jadwal'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Tambah Jadwal Pendaftaran</h3>
<hr>
    <form action="<?php echo base_url(); ?>petugas/C_petugas/add_jadwal" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <td><label for="">Nama Kegiatan</label></td>
                <td><input type="hidden" name="id_jadwal">
                <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" required>
                </td>
            </tr>
             <tr>
                <td><label for="">Tanggal Mulai</label></td>
                <td><input type="date" class="form-control" name="tgl_awal" required>
                </td>
            </tr>
            <tr>
                <td><label for="">Tanggal Selesai</label></td>
                <td><input type="date" class="form-control" name="tgl_akhir" required></td>
            </tr>
            </table>
        </div>
    <div class="form-group pull-right">
        <button class="btn btn-success" type="submit" name="add" value="tambah"><span class="fa fa-send"></span> Simpan</button>
        <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>