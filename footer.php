<footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2023</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"><a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin dashboard</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>

    <!-- script jquery datable -->
    <script src="assets/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
      <script src="assets/js/jquery.dataTables.min.js"></script>
   

<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
  
    
        language: {
            lengthMenu: 'Mostrar _MENU_ registros por pagina',
            zeroRecords: 'Nenhum registro encontrado',
            info: 'Mostrando _PAGE_ paginas de _PAGES_',
            infoEmpty: 'Nenhum registro disponivel',
            infoFiltered: '(Filtrado de _MAX_ registros)',
            
        },
    });
});
</script>
<!-- Fim do script jquery datable #mytable como id da tabela -->
    <!-- End custom js for this page -->
  </body>
</html>