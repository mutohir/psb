<div class="container">
<div class="footerHeader" ></div>
<dv class="row">
  <div class="col-sm-8 col-md-8 col-lg-8">
      <div class="panel-heading">
        <h3 class="panel-title text-center">JADWAL PENDAFTARAN</h3>
      </div>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nama Kegiatan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($query as $jadwal) { ?>
              <tr>
                <td><?php echo $jadwal->nama_kegiatan; ?></td>
                <td><?php echo $jadwal->tgl_awal; ?></td>
                <td><?php echo $jadwal->tgl_akhir; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4">
    <div class="panel-primary bg-success">
      <div class="panel-heading">
        <h3 class="panel-title text-center"><i class="fa fa-info"></i> INFORMASI TAMBAHAN</h3>
      </div>
      <div class="panel-body">
        <p><strong>Tes Tertulis</strong> ini diadakan dengan tujuan untuk melihat sejauh mana santri baru memahami ilmu-ilmu tentang agama islam seperti nahwu, fiqih, aqidah dsb. Dengan tes tersebut maka asatidz atau guru Madrasah Diniyah(Madin) bisa menentukan pembagian kelas untuk masing-masing santri baru.</p>
      </div>
    </div>
  </div>
</dv>
</div>
<hr>