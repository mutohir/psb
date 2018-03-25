<div class="row">
  <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
    <!-- <div class="panel panel-default"> -->
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Jadwal Pendaftaran</h3><hr>
  <!--    </div>
</div> -->
<div class="panel panel-default">
    <div class="panel-body">
            <div class="table-responsive">
              <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                </tr>
            </thead>
<!--             <tfoot>
            <tr>
                <th>#</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
            </tr>
            </tfoot> -->
            <tbody>
                <?php
                $no=1;//variabel no?
                foreach ($query as $row) { ?>
                
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nama_kegiatan; ?></td>
                    <td><?php echo $row->tgl_awal; ?></td>
                    <td><?php echo $row->tgl_akhir; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>