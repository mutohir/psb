<h1>Ubah Berkas</h1><hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<?php echo form_open("pendaftar/berkas/ubah/", array('enctype'=>'multipart/form-data')); ?>
  <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <?php foreach ($berkas as $data): ?>
                        <tr>
                            <td><label for="">Nama</label></td>
                            <td><input type="text" class="form-control" name="input_deskripsi" value="<?php echo $data->deskripsi; ?>">
                            </td>
                        </tr>
                        <tr>
                          <td><label for="">Berkas</label></td>
                          <td><input class="form-control" type="file" name="input_gambar"><img src="<?php echo base_url('uploads/'.$data->nama_file); ?>" width="200" class="img-responsive"></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
                </div>
  <button class="btn btn-success" type="submit" name="ubah">Simpan</button>
  <a href="<?php echo base_url('pendaftaran/Berkas'); ?>"><button class="btn btn-danger" type="button">Batal</button></a>
<?php echo form_close(); ?>