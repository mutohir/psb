  <div class="row">
    
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Hoorray!</strong> <?php echo $_SESSION['success']; ?>.
    </div>
    <?php elseif (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
    </div>
    <?php else: ?>
    <?php endif; ?>
<div class="well well-lg text-danger">
<marquee scrollamount="10"><strong>Perhatian!</strong> Biodata yang sudah dikirm tidak bisa dirubah, silahkan cek dengan benar sebelum submit.</marquee>
</div>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Daftar Online</h3><hr>
<!-- <?php echo validation_errors(); ?> -->
<div class="panel panel-default">
    <div class="panel-body">
    <form action="<?php echo base_url(); ?>pendaftar/C_pendaftar/inputbiodata" method="POST" role="form" enctype="multipart/form-data">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Data Santri</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Data Ayah</a>
                        </li>
                        <li role="presentation">
                            <a href="#ibu" aria-controls="tab" role="tab" data-toggle="tab">Data Ibu</a>
                        </li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                        <br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><label for="">No. Pendaftaran</label></td>
                                        <td>
                                        <input type="hidden" name="id_santri">
                                        <input type="hidden" name="id_wali">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
             <!--                            <input type="hidden" name="nama" alue="<?php echo $data->nama; ?>">
                                        <input type="hidden" name="username" alue="<?php echo $data->username; ?>">
                                        <input type="hidden" name="level" alue="<?php echo $data->level; ?>">
                                        <input type="hidden" name="password" alue="<?php echo $data->password; ?>">
                                        <input type="hidden" name="email" alue="<?php echo $data->user_id; ?>"> -->
                                        <input type="text" class="form-control" name="no_pendaftaran" placeholder="Nomor Induk" value="<?php echo $kodeunik ?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="text" class="form-control" name="nama_santri" placeholder="Nama Lengkap" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Alamat</label><span class="text-danger"> &#42;</span></td>
                                        <td><textarea class="form-control" name="alamat_santri" cols="50" rows="5" placeholder="Alamat Anda (sesuai akte kelahiran)" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">TTL</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="text" class="form-control" name="tmp_lahir"  placeholder="Tempat Lahir" style="width: 50%; float: left;" required><input type="date" class="form-control" name="tgl_lahir" style="width: 50%;" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Gender</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="radio" name="gender" value="Laki-laki">Laki-laki
                                        <input type="radio" name="gender" value="Perempuan">Perempuan
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="">Status</label><span class="text-danger"> &#42;</span></td>
                                    <td><input type="radio" name="status" value="Pelajar">Pelajar
                                    <input type="radio" name="status" value="Wiraswasta">Wiraswasta
                                </td>
                                <tr>
                                    <tr  style="display: none;">
                                        <td><label for="">Status Daftar</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="radio" name="status_daftar" value="Diterima"> Diterima
                                        <input type="radio" name="status_daftar" value="Menunggu" checked> Ditolak
                                    </td>
                                </tr>
                                <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                                <td><input type="text" class="form-control" name="pekerjaan"  placeholder="Pekerjaan" required></td>
                            </tr>
                            <tr>
                                <td><label for="">No. Hp</label><span class="text-danger"> &#42;</span></td>
                                <td><input type="tel" class="form-control" name="telp_santri"  placeholder="Nomor Handphone" required=""><em><span class="help-block text-muted">*) Disarankan nomor Whatsapp</span></em></td>
                            </tr>
                          <!--   <tr>
                                <td><label for="">Foto</label></td>
                                <td><input type="file" class="form-control" name="userfile" size="20"></td>
                            </tr> -->
                        </tr>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab">
            <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="text" class="form-control" name="nama_ayah" placeholder="Nama Lengkap Ayah" required></td>
                        </tr>
                        <tr>
                            <td><label for="">Alamat</label><span class="text-danger"> &#42;</span></td>
                            <td><textarea class="form-control" name="alamat_ayah" cols="50" rows="5" placeholder="Alamat Ayah (sesuai di KTP)" required></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="text" class="form-control" name="pekerjaan_ayah"  placeholder="Pekerjaan Ayah" required=""></td>
                        </tr>
                        <tr>
                            <td><label for="">No. Hp</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="tel" class="form-control" name="telp_ayah"  placeholder="Nomor Handphone Ayah" ><em><span class="help-block text-muted"></span></em></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="ibu">
            <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="text" class="form-control" name="nama_ibu" placeholder="Nama Lengkap Ibu" required></td>
                        </tr>
                        <tr>
                            <td><label for="">Alamat</label><span class="text-danger"> </span></td>
                            <td><textarea class="form-control" name="alamat_ibu" cols="50" rows="5" placeholder="Alamat Ibu (sesuai data di KTP)"></textarea><em><span class="help-block text-muted">*) Jika sama boleh dikosongkan</span></em></td>
                        </tr>
                        <tr>
                            <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="text" class="form-control" name="pekerjaan_ibu"  placeholder="Pekerjaan Ibu" required=""></td>
                        </tr>
                        <tr>
                            <td><label for="">No. Hp</label></td>
                            <td><input type="tel" class="form-control" name="telp_ibu"  placeholder="Nomor Handphone" ><em><span class="help-block text-muted">*) Jika Tidak ada, dikosongkan</span></em></td>
                        </tr>
                    </table>
                </div>
            </div>
            <b>Keterangan <br><span class="text-danger"> &#42;</span> : wajib diisi</b>
                <div class="form-group pull-right">
                    <button class="btn btn-success" type="submit" name="add" value="tambah"><span class="fa fa-save"></span> Simpan</button>
                    <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
                </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>