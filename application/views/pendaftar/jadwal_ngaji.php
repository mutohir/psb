<div class="row">
  <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
    <!-- <div class="panel panel-default"> -->
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Jadwal Ngaji Pondok</h3><hr>
  <!--    </div>
</div> -->
<div class="panel panel-default">
    <div class="panel-body">
            <div class="table-responsive">
          <table  id="data" class="table table-striped table-bordered">
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
</div>
</div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>