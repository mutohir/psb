<div class="container">
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>
<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/jadwal_ngaji'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Edit Jadwal Ngaji</h3>
<hr>
    <form action="" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
                <?php foreach ($query as $ngaji): ?>
            <tr>
                <td><div class="form-group"><label for="">Kelas</label></td>
                <td><input type="hidden" name="id_ngaji">
                <select name="kelas" id="inputWaktu" class="form-control" required="required">
                        <option <?php if( $ngaji->kelas=='Satu'){echo "selected"; } ?> value='Satu'>Satu</option>
                        <option <?php if( $ngaji->kelas=='Dua'){echo "selected"; } ?> value='Dua'>Dua</option>
                        <option <?php if( $ngaji->kelas=='Tiga'){echo "selected"; } ?> value='Tiga'>Tiga</option>
                        <option <?php if( $ngaji->kelas=='Khos'){echo "selected"; } ?> value='Khos'>Khos</option>
                        <option <?php if( $ngaji->kelas=='Semua'){echo "selected"; } ?> value='Semua'>Semua</option>
                        </select>
                    </div>
                </td>
            </tr>
             <tr>
                <td><div class="form-group"><label for="">Hari/Waktu</label></td>
                <td>
                    <select name="waktu" id="inputWaktu" class="form-control" required="required">
                        <option <?php if( $ngaji->waktu=='Malam Minggu'){echo "selected"; } ?> value='Malam Minggu'>Malam Minggu</option>
                        <option <?php if( $ngaji->waktu=='Malam Senin'){echo "selected"; } ?> value='Malam Senin'>Malam Senin</option>
                        <option <?php if( $ngaji->waktu=='Malam Selasa'){echo "selected"; } ?> value='Malam Selasa'>Malam Selasa</option>
                        <option <?php if( $ngaji->waktu=='Malam Rabu'){echo "selected"; } ?> value='Malam Rabu'>Malam Rabu</option>
                        <option <?php if( $ngaji->waktu=='Malam Kamis'){echo "selected"; } ?> value='Malam Kamis'>Malam Kamis</option>
                        <option <?php if( $ngaji->waktu=='Malam Sabtu'){echo "selected"; } ?> value='Malam Sabtu<'>Malam Sabt<</option>
                        <option <?php if( $ngaji->waktu=='Shubuh'){echo "selected"; } ?> value='Shubuh<'>Shubuh</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group"><label for="">Kitab</label></td>
                <td>
                    <select name="kitab" id="inputWaktu" class="form-control" required="required">
                    <option <?php if( $ngaji->kitab=='Fathul Qorib'){echo "selected"; } ?> value='Fathul Qorib'>Fathul Qorib</option>
                    <option <?php if( $ngaji->kitab=='Talim Mutaalim'){echo "selected"; } ?> value='Talim Mutaalim'>Talim Mutaalim</option>
                    <option <?php if( $ngaji->kitab=='Safinatun Najah'){echo "selected"; } ?> value='Safinatun Najah'>Safinatun Najah</option>
                    <option <?php if( $ngaji->kitab=='Nahwu (jurumiyah)'){echo "selected"; } ?> value='Nahwu (jurumiyah)'>Nahwu (jurumiyah)</option>
                    <option <?php if( $ngaji->kitab=='Jawahirul Kalamiyah'){echo "selected"; } ?> value='Jawahirul Kalamiyah)'>Jawahirul Kalamiyah)</option>
                    <option <?php if( $ngaji->kitab=='Nahwu (Imriti)'){echo "selected"; } ?> value='Nahwu (Imriti)'>Nahwu (Imriti)</option>
                    <option <?php if( $ngaji->kitab=='Khulashoh Nurul Yaqin Jilid.1'){echo "selected"; } ?> value='Khulashoh Nurul Yaqin Jilid.1'>Khulashoh Nurul Yaqin Jilid.1</option>
                    <option <?php if( $ngaji->kitab=='Kotrul Ghoits'){echo "selected"; } ?> value='Kotrul Ghoits'>Kotrul Ghoits</option>
                    <option <?php if( $ngaji->kitab=='Khulashoh Nurul Yaqin Jilid.2'){echo "selected"; } ?> value='Khulashoh Nurul Yaqin Jilid.2'>Khulashoh Nurul Yaqin Jilid.2</option>
                    <option <?php if( $ngaji->kitab=='Risalatul Muawanah'){echo "selected"; } ?> value='Risalatul Muawanah'>Risalatul Muawanah</option>
                    <option <?php if( $ngaji->kitab=='Tanbihul Ghofilin'){echo "selected"; } ?> value='Tanbihul Ghofilin'>Tanbihul Ghofilin</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group"><label for="">Ustadz</label></td>
                <td>
                    <select name="ustad" id="inputWaktu" class="form-control" required="required">
                       <option <?php if( $ngaji->ustad=='Abah Ky. Nasrul Hadi'){echo "selected"; } ?> value='Abah Ky. Nasrul Hadi'>Abah Ky. Nasrul Hadi</option>
                       <option <?php if( $ngaji->ustad=='Ust. Syukron'){echo "selected"; } ?> value='Ust. Nahrowi'>Ust. Nahrowi</option>
                       <option <?php if( $ngaji->ustad=='Ust. Junaidi'){echo "selected"; } ?> value='Ust. Junaidi'>Ust. Junaidi</option>
                       <option <?php if( $ngaji->ustad=='Ust. Roal'){echo "selected"; } ?> value='AUst. Roal'>AUst. Roal</option>
                       <option <?php if( $ngaji->ustad=='Ust. Najib'){echo "selected"; } ?> value='Ust. Najib'>Ust. Najib</option>
                       <option <?php if( $ngaji->ustad=='Ust. Asep'){echo "selected"; } ?> value='Ust. Asep'>Ust. Asep</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group"><label for="">Tempat Ngaji</label></td>
                <td>
                    <select name="tempat" id="inputWaktu" class="form-control" required="required">
                        <option <?php if( $ngaji->tempat=='Aula'){echo "selected"; } ?> value='Aula'>Aula</option>
                        <option <?php if( $ngaji->tempat=='Mushola Timur'){echo "selected"; } ?> value='Mushola Timur'>Mushola Timur</option>
                        <option <?php if( $ngaji->tempat=='Mushola Selatan'){echo "selected"; } ?> value='Mushola Selatan'>Mushola Selatan</option>
                        <option <?php if( $ngaji->tempat=='Masjid Al Hanan'){echo "selected"; } ?> value='Masjid Al Hanan'>Masjid Al Hanan</option>
                    </select>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
            </table>
        </div>
    <div class="form-group pull-right">
        <button class="btn btn-success" type="submit" name="edit"><span class="fa fa-send"></span> Simpan</button>
        <button class="btn btn-warning" type="reset"><span class="fa fa-refresh"></span> Reset</button>
    </div>
    </div>
    </div>
</form>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>