<?php if(!class_exists('Rain\Tpl')){exit;}?> <!-- Main Footer -->
 <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        
        <!-- /.control-sidebar-menu -->

        
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Opções Gerais</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
                Uso do painel de relatórios
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Algumas informações sobre essa opção de configurações gerais.
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<!-- <script src="../../res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<!-- Bootstrap 3.3.6 -->
<script src="../../res/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../res/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../res/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../res/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../res/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../res/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../res/admin/dist/js/demo.js"></script>

<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"></script>
<!-- page script -->



<script>

  $(function () {
    $("#lista-pendente").DataTable(
      {      
           
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            },
            "scrollX": true
      });

    $('#lista-pago').DataTable(
      {     
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            },
          "scrollX": true

      });
  }
  );

  var upload = document.getElementById("image");



upload.addEventListener("change", function(e) {

    var size = upload.files[0].size;

    if(size < 2048576) { //2MB      

    } else {           

      alert('Imagem tem que ter no máximo 2 MB'); //Acima do limite

      upload.value = ""; //Limpa o campo          

    }

    e.preventDefault();

});
</script>
    

</body>
</html>