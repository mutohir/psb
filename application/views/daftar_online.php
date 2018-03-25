<style type="text/css" media="screen">
    body {
    font-family: 'Titillium Web', sans-serif;
    padding-top: 50px;
    padding-bottom: 20px;
  }
  .navbar-default{
  background: green; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(-90deg, #02AAB0, #00CDAC); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(-90deg, #02AAB0, #00CDAC); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(-90deg, #02AAB0, #00CDAC); /* For Firefox 3.6 to 15 */
  background: linear-gradient(-90deg, #02AAB0, #00CDAC); /* Standard syntax */
  background: linear-gradient(-90deg, #02AAB0, #00CDAC);
  color: #fff;
  }
#navbar > ul > li > a{
  color: #fff;
}
#navbar > ul > li.dropdown.open > a{
  background: #56B4D3;
}
  legend{
  background: green; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(-90deg, #02AAB0, #00CDAC); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(-90deg, #02AAB0, #00CDAC); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(-90deg, #02AAB0, #00CDAC); /* For Firefox 3.6 to 15 */
  background: linear-gradient(-90deg, #02AAB0, #00CDAC); /* Standard syntax */
  background: linear-gradient(-90deg, #02AAB0, #00CDAC);
  color: #fff;
  padding:5px;
  text-align: center;
  }
  #navbar > ul > li:hover, #navbar > ul > li.active > a{
    background-color: #38ef7d;
    color: #fff;
  }
  #navbar > ul > li a:hover, #navbar > ul > li.dropdown.open > ul > li a:hover{
  background-color: #38ef7d;
  color: #fff;  
  }
  @media screen and (min-width: 768px) and (max-width: 991px){
    .navbar-header a img{
    display: none;
    }
  }
  </style>

    <div class="separator">&nbsp;&nbsp;</div>
	<div class="container">
	<?php echo form_open('Home/daftar_online', 'class="form-horizontal"'); ?>
<fieldset>

<!-- Form Name -->
<div class="row">
	<div class="col-md-4">
		<legend>DATA SANTRI</legend>
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nm_lengkap" type="text" placeholder="Nama Lengkap" class="form-control input-md" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempat">Tempat Lahir</label>  
  <div class="col-md-4">
  <input id="tempat_lahir" name="tmp_lahir" type="text" placeholder="Tempat Lahir" class="form-control input-md" required>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tanggal">Tanggal Lahir</label>  
  <div class="col-md-4">
  <input id="tanggal" name="tgl_lahir" type="date" placeholder="Tanggal Lahir" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="No HP/WA/BBM">Kontak</label>  
  <div class="col-md-4">
  <input id="kontak" name="hp" type="telphone" placeholder="No HP/WA" class="form-control input-md" required>
  <span class="help-block text-muted">*) Direkomendasikan nomor hp yang digunakan untuk Whatsapp</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenis kelamin">Jenis Kelamin</label>
  <div class="col-md-2">
    <select id="jenis-kelamin" name="jk" class="form-control" required>
      <option></option>
      <option value="p">Pria</option>
      <option value="w">Wanita</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Pekerjaan</label>  
  <div class="col-md-4">
  <input id="kampus" name="pekerjaan" type="text" placeholder="Pekerjaan" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Nama Kampus</label>  
  <div class="col-md-4">
  <input id="kampus" name="kampus" type="text" placeholder="Kampus" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Asal Pondok</label>  
  <div class="col-md-4">
  <input id="kampus" name="asal_pondok" type="text" placeholder="Asal Pondok" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Asal Sekolah</label>  
  <div class="col-md-4">
  <input id="kampus" name="asal_sekolah" type="text" placeholder="Asal Sekolah" class="form-control input-md" required>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Alamat KTP">Alamat</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" required></textarea>
    <span class="help-block text-muted">*) Format : Jalan, Desa, RT/RW, Kec., Kab., Prov., Kode Pos</span>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="foto">Foto</label>
  <div class="col-md-4">
    <input id="foto" name="foto" class="input-file" type="file">
    <span class="help-block">*) Lewati jika belum ada.</span>
  </div>
</div><br>
<div class="row">
	<div class="col-md-4 text-center">
		<legend>DATA WALI SANTRI</legend>
	</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Ayah</label>  
  <div class="col-md-4">
  <input id="nama" name="nm_lengkap" type="text" placeholder="Nama Ayah" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Pekerjaan</label>  
  <div class="col-md-4">
  <input id="kampus" name="pk_ayah" type="text" placeholder="Pekerjaan Ibu" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Pendidikan Terakhir</label>  
  <div class="col-md-4">
  <input id="kampus" name="pddk_ayah" type="text" placeholder="Pendidikan Ibu" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Ibu</label>  
  <div class="col-md-4">
  <input id="nama" name="pk_ibu" type="text" placeholder="Nama Ibu" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Pekerjaan</label>  
  <div class="col-md-4">
  <input id="kampus" name="pekerjaan" type="text" placeholder="Pekerjaan Ibu" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pekerjaan">Pendidikan Terakhir</label>  
  <div class="col-md-4">
  <input id="kampus" name="pddk_ibu" type="text" placeholder="Pendidikan Ibu" class="form-control input-md" required>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="No HP/WA/BBM">Kontak</label>  
  <div class="col-md-4">
  <input id="kontak" name="hp" type="telphone" placeholder="No HP/WA" class="form-control input-md" required>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Alamat KTP">Alamat Ayah/Ibu</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"required></textarea>
    <span class="help-block text-muted">*) Format : Jalan, Desa, RT/RW, Kec., Kab., Prov., Kode Pos</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kirim"></label>
  <div class="col-md-4">
    <button id="kirim" type="reset" name="batal" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
    <button id="kirim" type="submit" name="kirim" class="btn btn-success"><i class="fa fa-send"></i> Kirim</button>
  </div>
</div>
</fieldset>
<?php echo form_close(); ?>
    </div>
<hr>