<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-md-9">
            <!-- <span class="pull-right"><a href="<?php echo base_url('petugas/C_petugas/') ?>"><span class="fa fa-arrow-left"> Kembali</span></a></span> -->
            <!-- <a href="<?php echo base_url('petugas/C_petugas/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right" style="margin-top: 24px;"><span class="fa fa-arrow-left"></span> Kembali</a> -->
            <a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
            <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Tambah Data Santri</h3>
            <hr>
            <form action="<?php echo base_url(); ?>petugas/C_petugas/add_santri" method="POST" role="form" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-body">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px; text-align: center; text-align: center;"> Data Santri</h4>
                                    <tr>
                                        <td><label for="">No. Pendaftaran</label></td>
                                        <td><input type="hidden" name="id_santri"><input type="hidden" name="id_wali"><input type="hidden" name="user_id"><input type="text" class="form-control" name="no_pendaftaran" placeholder="Nomor Induk" value="<?php echo $kodeunik ?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="text" class="form-control" name="nama_santri" placeholder="Nama Lengkap" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Nama Akun</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="text" class="form-control" name="nama" placeholder="Nama Akun" required></td>
                                    </tr>
                                     <tr>
                                        <td><label for="">Username</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="text" class="form-control" name="username" placeholder="Username" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Level</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="text" class="form-control" name="level" value="pendaftar" readonly required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Password</label><span class="text-danger"> &#42;</span></td>
                                        <td><input type="password" class="form-control" name="password" placeholder="Password" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">Email</label></td>
                                        <td><input type="email" class="form-control" name="email" placeholder="Email Anda"><em><span class="help-block text-muted">*) Jika Ada</span></em></td>
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
                            <!-- <tr>
                                <td><label for="">Foto</label></td>
                                <td><input type="file" class="form-control" name="userfile" size="20"></td>
                            </tr> -->
                        </tr>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab">
                <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px; text-align: center;"> Data Wali (Ayah)</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
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
                            <td><input type="tel" class="form-control" name="telp_ayah"  placeholder="Nomor Handphone Ayah" required><em><span class="help-block text-muted">*) Jika Ada</span></em></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div role="tabpanel" class="tab-pane" id="ibu">
                <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px; text-align: center;"> Data Wali (Ibu)</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="text" class="form-control" name="nama_ibu" placeholder="Nama Lengkap Ibu" required></td>
                        </tr>
                        <tr>
                            <td><label for="">Alamat</label><span class="text-danger"></span></td>
                            <td><textarea class="form-control" name="alamat_ibu" cols="50" rows="5" placeholder="Alamat Ibu (sesuai data di KTP)"></textarea><em><span class="help-block text-muted">*) Jika sama boleh dikosongkan</span></em></td>
                        </tr>
                        <tr>
                            <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                            <td><input type="text" class="form-control" name="pekerjaan_ibu"  placeholder="Pekerjaan Ibu" required=""></td>
                        </tr>
                        <tr>
                            <td><label for="">No. Hp</label></td>
                            <td><input type="tel" class="form-control" name="telp_ibu"  placeholder="Nomor Handphone" ><em><span class="help-block text-muted">*) Jika sama boleh dikosongkan</span></em></td>
                        </tr>
                    </table>
                </div>
            </div>
                <div class="form-group pull-right">
                    <button class="btn btn-success" type="submit" name="add" value="tambah"><span class="fa fa-save"></span> Simpan</button>
                    <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
                </div>
        </div>
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>