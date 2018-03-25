<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>
<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/biaya'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Biaya</h3><hr>
    <form action="" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
     <table class="table table-bordered table-striped">
            <tr>
                <td><label for="">Nama Kategori</label></td>
                <td>
                    <select name="kategori_biaya" id="inputKategori_biaya" class="form-control" required="required">
                        <!-- <option value="<?php echo $biaya->kategori_biaya; ?>"><?php echo $biaya->kategori_biaya; ?></option> -->
                        <option <?php if( $biaya->kategori_biaya=='Tahunan'){echo "selected"; } ?> value='Tahunan'>Tahunan</option>
                        <option <?php if( $biaya->kategori_biaya=='Bulanan'){echo "selected"; } ?> value='Bulanan'>Bulanan</option>
                        <option <?php if( $biaya->kategori_biaya=='Kebutuhan Santri Baru'){echo "selected"; } ?> value='Kebutuhan Santri Baru'>Kebutuhan Santri Baru</option>
                        </select>
                <!-- <input type="text" class="form-control" name="kategori_biaya" value="<?php echo $biaya->kategori_biaya; ?>"></td> -->
            </tr>
            <tr>
                <td><label for="">Alokasi</label></td>
                <td><input type="hidden" name="id_biaya" value="<?php echo $biaya->id_biaya ?>">
                <input type="text" class="form-control" name="alokasi" value="<?php echo $biaya->alokasi; ?>">
                </td>
            </tr>
             <tr>
                <td><label for="">Jumlah</label></td>
                <td><input type="text" class="form-control" name="jumlah" value="<?php echo $biaya->jumlah; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="">Total</label></td>
                <td><input type="text" class="form-control" name="total" value="<?php echo $biaya->total; ?>">
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