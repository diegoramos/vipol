  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://assets/adminlte.io">assets/adminlte.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.3-pre
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url();?>/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url();?>/assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url();?>/assets/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?=base_url();?>/assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- ChartJS -->
<script src="<?=base_url();?>/assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url();?>/assets/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url();?>/assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url();?>/assets/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?=base_url();?>/assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url();?>/assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url();?>/assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url();?>/assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- assets/adminlte App -->
<script src="<?=base_url();?>/assets/adminlte/dist/js/adminlte.js"></script>

<script src="<?=base_url();?>/assets/adminlte/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url();?>/assets/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url();?>/assets/adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="<?=base_url();?>/assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url();?>/assets/adminlte/dist/js/pages/dashboard2.js"></script>
<?php $request = \Config\Services::request(); ?>
<?php if($request->uri->getSegment(1) == 'users'){ ?>
    <script src="<?=base_url();?>/assets/scripts/users.js" type="text/javascript"></script>
<?php } ?>

</body>
</html>
