<div class="container">
<div class="footerHeader" ></div>
<dv class="row">
  <div class="col-sm-12">
    <div class="panel-heading" style="color: #181717; text-transform: uppercase;">
        <h3 class="panel-title text-center"><b>Panduan-panduan Pendaftaran</b></h3>
      </div>
    <table class="table table-responsive">
      <thead>
        <?php 
        foreach ($panduan as $row) { ?>
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
  </div>
</dv>
</div>
<hr>