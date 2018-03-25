<div class="row">
  <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
    <?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Hoorray!</strong> <?php echo $_SESSION['success']; ?>.
    </div>
    <?php elseif (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
    </div>
    <?php else: ?>
    <?php endif; ?>
    <!-- <div class="panel panel-default"> -->
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Dashboard</h3><hr>
    <!-- <div class="panel-body"> -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><strong><em>Welcome, <?php echo $username; ?></em></strong></h3>
      </div>
      <div class="panel-body">
        Selamat datang di halaman pendaftar website penerimaan santri baru Pondok Pesantren Salafiyah Al-Muhsin Sleman. Gunakan akun Anda untuk mendaftarkan diri sebagai calon santri P.P.S Al Muhsin Sleman. Hindari kesalahan dalam proses input biodata. Pelajari panduan &amp; alur pendaftaran untuk langkah lebih lanjut.
      </div>
    </div>
  <!--    </div>
</div> -->
<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title text-center"><strong>Data Pendaftaran</strong></h3>
      </div>
<!--       <div class="panel-body">
            <div class="table-responsive"> -->
              <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <!-- <th>#</th> -->
                    <th>No. Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat Pendaftar</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (!empty($santri)) {?>
                  <?php
                    // $no=1;//variabel no
                        foreach ($santri as $row) { ?>
                        <tr>
                          <!-- <td><?php echo $no++; ?></td> -->
                          <td><?php echo $row->no_pendaftaran ?></td>
                          <td><?php echo $row->nama_santri ?></td>
                          <td><?php echo $row->alamat_santri ?></td>
                          <td><?php echo $row->gender ?></td>
                          <td><?php
                              if ($row->status_daftar == 'Menunggu') { ?>
                              <span class="bg-danger">Menunggu</span>
                                <?php } else { ?>
                                <span class="bg-success">Diterima</span>
                              <?php }
                              ?></td>
                              <td>
                              <a href="<?php echo base_url('pendaftar/C_pendaftar/edit/') ?><?php echo $row->id_santri ?>" data-toggle="tooltip" title="Ubah"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                              <a href="<?php echo base_url('pendaftar/C_pendaftar/lihat_santri/') ?><?php echo $row->id_santri ?>" data-toggle="tooltip" title="Lihat"><button class="btn btn-info" role="button"><span class="fa fa-eye"></span></button></a>
                              </td>
                        </tr>
                        <?php } }else { ?>
                        <tr><td colspan='6'>Biodata belum ada</td></tr>
                <?php } ?>
                </tbody>
              </table>
<!--             </div>
    </div> -->
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>