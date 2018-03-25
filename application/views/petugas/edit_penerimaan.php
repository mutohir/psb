    <div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>
<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/penerimaan'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Data Santri</h3><hr>
    <form action="" method="POST" role="form" enctype="multipart/form-data">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
        <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px; display: none;"> Data Santri</h4>
            <tr>
                <td><label for="">No. pendaftaran</label></td>
                <td><input type="hidden" name="id_santri" value="<?php echo $santri->id_santri; ?>"><input type="hidden" name="id_wali" value="<?php echo $santri->id_wali; ?>"><input type="hidden" name="user_id" value="<?php echo $santri->user_id; ?>"><input type="text" class="form-control" name="no_pendaftaran" value="<?php echo $santri->no_pendaftaran; ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="nama_santri" value="<?php echo $santri->nama_santri; ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">Gender</label><span class="text-danger"> &#42;</span></td>           
                <td><input class="form-control" type="text" name="gender" value="<?php echo $santri->gender;?>" readonly>
                </td>
            </tr>
            <tr>
                <td><label for="">Status Daftar</label><span class="text-danger"> &#42;</span></td>           
                <td><input type="radio" name="status_daftar" value="Diterima" <?php echo ($santri->status_daftar=='Diterima')?'checked':'' ?>> Diterima
                <input type="radio" name="status_daftar" value="Menunggu" <?php echo ($santri->status_daftar=='Menunggu')?'checked':'' ?>> Menunggu
                <input type="hidden" class="form-control" name="pekerjaan"  value="<?php echo $santri->pekerjaan; ?>"><input type="hidden" class="form-control" name="telp_santri" value="<?php echo $santri->telp_santri; ?>">
                <textarea style="display: none;" class="form-control" name="alamat_santri" cols="50" rows="5" placeholder="Alamat Anda (sesuai akte kelahiran)" value="<?php echo $santri->alamat_santri; ?>"><?php echo $santri->alamat_santri; ?></textarea>
                <input type="hidden" name="status" value="Pelajar" <?php echo ($santri->status=='Pelajar')?'checked':'' ?>>
                <input type="hidden" name="status" value="Wiraswasta" <?php echo ($santri->status=='Wiraswasta')?'checked':'' ?>>
                <input type="hidden" class="form-control" name="tmp_lahir"  value="<?php echo $santri->tmp_lahir; ?>" style="width: 50%; float: left;" required><input type="hidden" class="form-control" name="tgl_lahir" style="width: 50%;" value="<?php echo $santri->tgl_lahir; ?>">
                </td>
            </tr>
        </table>
    </div> 
    <div>
        <button class="btn btn-success pull-right" type="submit" name="edit"><span class="fa fa-save"></span> Simpan</button>
        <!-- <a href="<?php echo base_url('petugas/C_petugas/') ?>" class=""><span class="fa fa-arrow-left"> Kembali</span></a> -->
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>