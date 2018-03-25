<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/biaya'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Tambah Rincian Biaya Pondok</h3>
<hr>
    <form action="<?php echo base_url(); ?>admin/C_admin/add_biaya" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <td><label for="">Nama Kategori</label></td>
                <td>
                    <select name="kategori_biaya" id="inputKategori_biaya" class="form-control" required="required">
                        <option value="Tahunan">Tahunan</option>
                        <option value="Bulanan">Bulanan</option>
                        <option value="Kebutuhan Santri Baru">Kebutuhan Santri Baru</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Alokasi</label></td>
                <td><input type="hidden" name="id_biaya">
                <input type="text" class="form-control" name="alokasi" placeholder="Alokasi biaya" required>
                </td>
            </tr>
             <tr>
                <td><label for="">Jumlah</label></td>
                <td><input type="text" class="form-control" name="jumlah" placeholder="Jumlah Biaya" required="">
                </td>
            </tr>
            <tr>
                <td><label for="">Total</label></td>
                <td><input type="text" class="form-control" name="total" placeholder="Total Jumlah">
                </td>
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