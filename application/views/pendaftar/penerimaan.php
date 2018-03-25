<div class="row">
  <?php include('templates/etalase.php') ?>
  <div class="col-md-9">

    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Pengumuman Penerimaan</h3><hr>

            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No. Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat Pendaftar</th>
                    <th>Gender</th>
                    <th>Status </th>
                  </tr>
                </thead>
                <tbody>
                        <tr>
                          <td><?php echo $queries->no_pendaftaran ?></td>
                          <td><?php echo $queries->nama_santri ?></td>
                          <td><?php echo $queries->alamat_santri ?></td>
                          <td><?php echo $queries->gender ?></td>
                          <td><?php echo $queries->status_daftar ?></td>
                        </tr>
                </tbody>
              </table>
            </div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>