    <footer>
        <hr><p class="text-muted">Copyright <span class="fa fa-copyright"></span> 2018. All Rights Reserved.</p>
      
    </footer>
  </div>
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
<!-- Datatables -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/js/jquery.dynatable.js"></script>
<!-- Bootstrap
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#data').dynatable();
      $('[data-toggle="tooltip"]').tooltip();
      $("#myform").submit(function(e) {
        $("#first").hide();
        $("#second").show();
    });
    });
  </script>
  </body>
</html>