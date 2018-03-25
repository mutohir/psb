<div class="container">
    <h2><?php echo $this->session->flashdata('success'); ?></h2>
<div class="clearfix"></div>
  <div class="row">
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<a style="margin-top: 15px;" href="<?php echo base_url('admin/C_admin/jadwal_ngaji'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Tambah Jadwal Pendaftaran</h3>
<hr>
    <form action="<?php echo base_url(); ?>admin/C_admin/add_jadwal_ngaji" method="POST" role="form">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <td><div class="form-group"><label for="">Kelas</label></td>
                <td><input type="hidden" name="id_ngaji">
                <select name="kelas" id="inputWaktu" class="form-control" required="required">
                        <option>------</option>
                        <option value="Satu">Satu</option>
                        <option value="Dua">Dua</option>
                        <option value="Tiga">Tiga</option>
                        <option value="Khos">Khos</option>
                        <option value="Semua">Semua</option>
                        </select>
                    </div>
                </td>
            </tr>
             <tr>
                <td><div class="form-group"><label for="">Hari/Waktu</label></td>
                <td>
                    <select name="waktu" id="inputWaktu" class="form-control" required="required">
                        <option value="">------</option>
                        <option value="Malam Minggu">Malam Minggu</option>
                        <option value="Malam Senin">Malam Senin</option>
                        <option value="Malam Selasa">Malam Selasa</option>
                        <option value="Malam Rabu">Malam Rabu</option>
                        <option value="Malam Kamis">Malam Kamis</option>
                        <option value="Malam Sabtu">Malam Sabtu</option>
                        <option value="Shubuh">Ba'da Shubuh</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group"><label for="">Kitab</label></td>
                <td>
                    <select name="kitab" id="inputWaktu" class="form-control" required="required">
                        <option>------</option>
                        <option value="Fathul Qorib">Fathul Qorib</option>
                        <option value="Talim Mutaalim">Talim Mutaalim</option>
                        <option value="Safinatun Najah">Safinatun Najah</option>
                        <option value="Nahwu (jurumiyah)">Nahwu (jurumiyah)</option>
                        <option value="Jawahirul Kalamiyah">Jawahirul Kalamiyah</option>
                        <option value="Khulashoh Nurul Yaqin Jilid.1">Khulashoh Nurul Yaqin Jilid.1</option>
                        <option value="Nahwu (Imriti)">Nahwu (Imriti)</option>
                        <option value="Kotrul Ghoits">Kotrul Ghoits</option>
                        <option value="Khulashoh Nurul Yaqin Jilid.2">Khulashoh Nurul Yaqin Jilid.2</option>
                        <option value="Risalatul Muawanah">Risalatul Muawanah</option>
                        <option value="Tanbihul Ghofilin">Tanbihul Ghofilin</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group"><label for="">Ustadz</label></td>
                <td>
                    <select name="ustad" id="inputWaktu" class="form-control" required="required">
                        <option>------</option>
                        <option value="Abah Ky. Nasrul Hadi">Abah Ky. Nasrul Hadi</option>
                        <option value="Ust. Nahrowi">Ust. Nahrowi</option>
                        <option value="Ust. Syukron">Ust. Syukron</option>
                        <option value="Ust. Junaidi">Ust. Junaidi</option>
                        <option value="Ust. Roal">Ust. Ro'al</option>
                        <option value="Ust. Najib">Ust. Najib</option>
                        <option value="Ust. Asep">Ust. Asep</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><div class="form-group"><label for="">Tempat Ngaji</label></td>
                <td>
                    <select name="tempat" id="inputWaktu" class="form-control" required="required">
                        <option>------</option>
                        <option value="Aula">Aula</option>
                        <option value="Mushola Timur">Mushola Timur</option>
                        <option value="Mushola Selatan">Mushola Selatan</option>
                        <option value="Masjid Al Hanan">Masjid Al Hanan</option>
                    </select>
                    </div>
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