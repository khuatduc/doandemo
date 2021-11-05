<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong style="color: black;">Học Viện Bưu Chính Viễn Thông Hà Nội <a href="https://adminlte.io">DucKV.B17CN139@stu.ptit.edu.vn</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@yield('script')
<script src="admin__asset/interface/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="admin__asset/interface/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin__asset/interface/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin__asset/interface/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="admin__asset/interface/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="admin__asset/interface/plugins/raphael/raphael.min.js"></script>
<script src="admin__asset/interface/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="admin__asset/interface/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="admin__asset/interface/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="admin__asset/interface/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="admin__asset/interface/dist/js/pages/dashboard2.js"></script>

<!-- DataTables  & Plugins -->
<script src="admin__asset/interface/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin__asset/interface/plugins/jszip/jszip.min.js"></script>
<script src="admin__asset/interface/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin__asset/interface/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin__asset/interface/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin__asset/interface/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="admin__asset/interface/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin__asset/interface/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>