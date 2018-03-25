<div class="container">
  <div class="clearfix"></div>
  <div class="row">
    <?php include('templates/etalase.php') ?>
    <div class="col-sm-3">
      <div class="dashboard-block" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="rotate">
          <i class="fa fa-users"></i>
        </div>
        <div class="details">
          <span class="title">Total Pendaftar</span>
          <span class="sub"><?php echo  $this->db->get('data_santri')->num_rows(); ?></span>
          </div><!--/details-->
          <!-- <i class="fa fa-chevron-right fa-2x more"></i> -->
          </div><!--/dashboard-block3-->
        </div>
        <div class="col-sm-3">
          <div class="dashboard-block" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="rotate">
              <i class="fa fa-users"></i>
            </div>
            <div class="details">
              <span class="title">Pendaftar (Putra)</span>
              <span class="sub"><?php echo $this->db->where('gender', 'Laki-laki')->count_all_results('data_santri');?></span>
              </div><!--/details-->
              <!-- <i class="fa fa-chevron-right fa-2x more"></i> -->
              </div><!--/dashboard-block3-->
            </div>
            <div class="col-sm-3">
              <div class="dashboard-block" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="rotate">
                  <i class="fa fa-users"></i>
                </div>
                <div class="details">
                  <span class="title">Pendaftar (Putri)</span>
                  <span class="sub"><?php echo $this->db->where('gender', 'Perempuan')->count_all_results('data_santri');?></span>
                  </div><!--/details-->
                  <!-- <i class="fa fa-chevron-right fa-2x more"></i> -->
                  </div><!--/dashboard-block3-->
                </div>
                <div class="col-md-9 clearfix">
                  <h3 class="text-center" style="text-transform: uppercase; font-weight: bold;">Data Pendaftar</h3>
                  <?php if (isset($_SESSION['success'])): ?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Hoorray!</strong> <?php echo $_SESSION['success']; ?>
                  </div>
                  <?php elseif (isset($_SESSION['error'])): ?>
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php else: ?>
                  <?php endif; ?>
                  <div class="pull-right">
                    <a href="<?php echo base_url('C_laporan_pendaftar') ?>" class="pull-right" data-toggle="tooltip" title="Cetak Data" target="_blank"><button class="btn btn-warning" name="cetak"><span class="fa fa-file-pdf-o"> </span></button></a>
                    <a href="<?php echo base_url('petugas/C_petugas/form_add_santri') ?>" class="pull-right" data-toggle="tooltip" title="Tambah Data"><button class="btn btn-primary" name="add" type="submit"> <span class="fa fa-user-plus"> </span></button></a>
                    </div><div class="clearfix"></div>
                    <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>No. Pendaftaran</th>
                          <th>Nama Pendaftar</th>
                          <th>Alamat Pendaftar</th>
                          <th>Gender</th>
                          <th>Profesi</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                 <!--      <tfoot>
                      <tr>
                        <th>#</th>
                        <th>No. Pendaftaran</th>
                        <th>Nama Pendaftar</th>
                        <th>Alamat Pendaftar</th>
                        <th>Gender</th>
                        <th>Profesi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                      </tfoot> -->
                      <tbody>
                        <?php
                        $no=1;//variabel no
                        foreach ($query->result() as $row) { ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->no_pendaftaran ?></td>
                          <td><?php echo $row->nama_santri ?></td>
                          <td><?php echo $row->alamat_santri ?></td>
                          <td><?php echo $row->gender ?></td>
                          <td><?php echo $row->status ?></td>
                          <td><?php
                              if ($row->status_daftar == 'Menunggu') { ?>
                              <span class="bg-danger">Menunggu</span>
                                <?php } else { ?>
                                <span class="bg-success">Diterima</span>
                              <?php }
                              ?></td>
                          <td>
                            <a href="<?php echo base_url('petugas/C_petugas/lihat/') ?><?php echo $row->id_santri ?>" data-toggle="tooltip" title="Lihat"><button class="btn btn-info" role="button"><span class="fa fa-eye"></span></button></a>
                            <a href="<?php echo base_url('petugas/C_petugas/edit/') ?><?php echo $row->id_santri ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                            <!-- <a href="<?php echo base_url('petugas/C_petugas/laporan_pendaftar/') ?><?php echo $row->id_santri ?>" data-toggle="tooltip" title="Cetak" target="_blank"><button class="btn btn-warning" role="button"><span class="fa fa-print"></span></button></a> -->
                            <a href="<?php echo base_url('petugas/C_petugas/delete/') ?><?php echo $row->id_santri ?>" data-toggle="tooltip" title="Hapus"><button name="hapus" class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span class="fa fa-trash"></span></button></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
                  </div>
                  </div><!-- End Row -->
                </div>
                <div class="clearfix"></div>