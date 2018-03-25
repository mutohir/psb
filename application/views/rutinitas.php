<div class="container">
<div class="footerHeader" ></div>
<dv class="row">
  <div class="col-lg-8">
    <!-- <div class="panel panel-primary"> -->
      <div class="panel-heading" style="color: #212121;">
        <h3 class="panel-title text-center"><b>JADWAL KEGIATAN NGAJI PONDOK</b></h3>
      </div>
      <!-- <div class="panel-body"> -->
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Kelas</th>
                <th>Hari/Waktu</th>
                <th>Kitab</th>
                <th>Ustadz</th>
                <th>Tempat</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($query as $ngaji) { ?>
              <tr>
                <td><?php echo $ngaji->kelas; ?></td>
                <td><?php echo $ngaji->waktu; ?></td>
                <td><?php echo $ngaji->kitab; ?></td>
                <td><?php echo $ngaji->ustad; ?></td>
                <td><?php echo $ngaji->tempat; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    <!-- </div> -->
  <div class="col-lg-4">
    <div class="panel-primary bg-success">
      <div class="panel-heading">
        <h3 class="panel-title text-center"><i class="fa fa-info"></i> INFORMASI TAMBAHAN</h3>
      </div>
      <div class="panel-body">
        <p><strong>Kegiatan Mengaji Pondok</strong> dibagi menjadi dua bagian yaitu ngaji abah dan ngaji Madin. Ngaji abah dilaksanakan setiap malam hari selain malam kamis, dan malam jumat.</p>
      </div>
    </div>
  </div>
</dv>
</div>
<hr>