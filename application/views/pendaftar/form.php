<div class="clearfix"></div>
<div class="alert alert-warning">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Perhatian !</strong> Silahkan Masukkan berkas Fotocopy: <br> 
  1. SKHUN <br>
  2. KK <br>
  3. KTP(Pendaftar) <br>
  4. KTP(Ortu) <br>
</div>
<h1>Tambah Gambar</h1><hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<?php echo form_open("pendaftar/berkas/upload", array('enctype'=>'multipart/form-data')); ?>
  <table class="table table-striped" cellpadding="8">
    <tr>
      <td>Berkas</td>
      <td><input class="form-control" type="file" name="userfile[]" multiple="multiple"></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><input type="hidden" name="user_id" value="<?php echo $user_id; ?>"><input class="form-control" type="text" name="keterangan" value="<?php echo set_value('keterangan'); ?>" placeholder="Keterangan berkas"></td>
    </tr>
  </table>
  <button class="btn btn-success" type="submit" name="submit">Simpan</button>
  <a href="<?php echo base_url('pendaftar/berkas'); ?>"><button class="btn btn-danger" type="button">Batal</button></a>
<?php echo form_close(); ?>