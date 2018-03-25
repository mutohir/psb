  <div class="row">
  <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Panduan Pendaftaran</h3><hr>
   
    <!-- <div class="panel" style="color: #181717; text-transform: uppercase; padding: 15px 0;"> -->
        <!-- <h3 class="panel-title text-center"><b>Panduan-panduan Pendaftaran</b></h3> -->
      <!-- </div> -->
      <div class="panel panel-default">
    <div class="panel-body">
    <table class="table table-responsive table-striped">
      <thead>
        <?php 
        foreach ($query as $row) { ?>
        <tr>
          <!-- <th>&nbsp;</th> -->
          <th style="font-size: 14pt;"><?php echo $row->judul_panduan; ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center"><?php echo $row->isi_panduan; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div></div>
  </div>
<hr>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>
