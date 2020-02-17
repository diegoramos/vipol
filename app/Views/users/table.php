<?= view('templates/header') ?>
<?= view('templates/sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Listado De Usuarios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
            <li class="breadcrumb-item active">Listado</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">


      <!-- Main row -->
      <div class="row">
          <div class="col-md 12">
              <div class="card">
                  <div class="card-body">
                      <table class="table">
                          <tr>
                              <th>Nombre</th>
                              <th>Apellido</th>
                          </tr>
                          <?php foreach ($users as $key => $value) { ?>
                            <tr>
                                <td><?=$value['name']?></td>
                                <td><?=$value['last_name']?></td>
                            </tr>
                          <?php } ?>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?= view('templates/footer') ?>