<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Data Santri</h3><hr>
    <form action="" method="POST" role="form" enctype="multipart/form-data">
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
        <table class="table table-bordered">
        <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px;"> Data Santri</h4>
            <tr>
                <td><label for="">No. pendaftaran</label></td>
                <td><input type="hidden" name="id_santri" value="<?php echo $santri->id_santri; ?>"><input type="hidden" name="id_wali" value="<?php echo $santri->id_wali; ?>"><input type="hidden" name="user_id" value="<?php echo $santri->user_id; ?>"><input type="text" class="form-control" name="no_pendaftaran" value="<?php echo $santri->no_pendaftaran; ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="nama_santri" value="<?php echo $santri->nama_santri; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label><span class="text-danger"> &#42;</span></td>
                <td><textarea class="form-control" name="alamat_santri" cols="50" rows="5" placeholder="Alamat Anda (sesuai akte kelahiran)"><?php echo $santri->alamat_santri; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="">TTL</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="tmp_lahir"  value="<?php echo $santri->tmp_lahir; ?>" style="width: 50%; float: left;" required><input type="date" class="form-control" name="tgl_lahir" style="width: 50%;" value="<?php echo $santri->tgl_lahir; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Gender</label><span class="text-danger"> &#42;</span></td>           
                <td><input type="radio" name="gender" value="Laki-laki" <?php echo ($santri->gender=='Laki-laki')?'checked':'' ?>> Laki-laki
                <input type="radio" name="gender" value="Perempuan" <?php echo ($santri->gender=='Perempuan')?'checked':'' ?>> Perempuan
                </td>
            </tr><!-- 
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="email" class="form-control" name="email" value="<?php echo $santri->email; ?>"></span></em></td>
            </tr> -->
            <tr>
                <td><label for="">Status</label><span class="text-danger"> &#42;</span></td>           
                <td><input type="radio" name="status" value="Pelajar" <?php echo ($santri->status=='Pelajar')?'checked':'' ?>> Pelajar
                <input type="radio" name="status" value="Wiraswasta" <?php echo ($santri->status=='Wiraswasta')?'checked':'' ?>> Wiraswasta
                </td>
            <tr>
                <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="pekerjaan"  value="<?php echo $santri->pekerjaan; ?>"></td>
            </tr>
            <tr>
                <td><label for="">No. Hp</label><span class="text-danger"> &#42;</span></td>
                <td><input type="tel" class="form-control" name="telp_santri" value="<?php echo $santri->telp_santri; ?>"><em><span class="help-block text-muted">*) Disarankan nomor Whatsapp</span></em>
                <input type="hidden" name="status_daftar" value="Diterima" <?php echo ($santri->status_daftar=='Diterima')?'checked':'' ?>>
                </td>
            </tr>
        </table>
    </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab">
                <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px;"> Data Wali (Ayah)</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="nama_ayah" value="<?php echo $santri->nama_ayah; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label><span class="text-danger"> &#42;</span></td>
                <td><textarea class="form-control" name="alamat_ayah" cols="50" rows="5" placeholder="Alamat Ayah (sesuai di KTP)" required><?php echo $santri->alamat_ayah; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="pekerjaan_ayah"  value="<?php echo $santri->pekerjaan_ayah; ?>"></td>
            </tr>
            <tr>
                <td><label for="">No. Hp</label></td>
                <td><input type="tel" class="form-control" name="telp_ayah"  value="<?php echo $santri->telp_ayah; ?>"></td>
            </tr>
        </table>
    </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="ibu">
                <h4 style="text-transform: uppercase; font-weight: bold; padding-top: 10px;"> Data Wali (Ibu)</h4>
        <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td><label for="">Nama Lengkap</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="nama_ibu" value="<?php echo $santri->nama_ibu; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label><span class="text-danger"> &#42;</span></td>
                <td><textarea class="form-control" name="alamat_ibu" cols="50" rows="5" placeholder="Alamat Ayah (sesuai di KTP)" required><?php echo $santri->alamat_ibu; ?></textarea></td>
            </tr>
            <tr>
                <td><label for="">Pekerjaan</label><span class="text-danger"> &#42;</span></td>
                <td><input type="text" class="form-control" name="pekerjaan_ibu"  value="<?php echo $santri->pekerjaan_ibu; ?>"></td>
            </tr>
            <tr>        
                <td><label for="">No. Hp</label></td>
                <td><input type="tel" class="form-control" name="telp_ibu"  value="<?php echo $santri->telp_ibu; ?>"></td>
            </tr>
        </table>
    </div>
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-success pull-right" type="submit" name="edit"><span class="fa fa-save"></span> Simpan</button>
        <!-- <a href="<?php echo base_url('admin/C_admin/') ?>" class=""><span class="fa fa-arrow-left"> Kembali</span></a> -->
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>