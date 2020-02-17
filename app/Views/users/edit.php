<?= view('templates/header') ?>
<?= view('templates/sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Editar Usuario</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/users">Usuarios</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <?=view('users/form')?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permisos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($allModules as $key => $module) {  ?>
                                    <div class="col-6">
                                        <input type="checkbox" name="" id="" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>><label for=""><?= $module['name'] ?></label>
                                        <ul>
                                            <?php foreach ($module['sub'] as $key => $module) { ?>
                                                <li>
                                                    <input type="checkbox" name="" id="" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>><label for=""><?= $module['name'] ?></label>
                                                    <?php if ($module['is_base']) { ?>
                                                        <ul>
                                                            <?php foreach ($module['sub'] as $key => $module) { ?>
                                                                <li>
                                                                    <input type="checkbox" name="" id="" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>><label for=""><?= $module['name'] ?></label>
                                                                    <?php if ($module['is_base']) { ?>
                                                                        <ul>
                                                                            <?php foreach ($module['sub'] as $key => $module) { ?>
                                                                                <li>
                                                                                    <input type="checkbox" name="" id="" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>><label for=""><?= $module['name'] ?></label>
                                                                                    <?php if ($module['is_base']) { ?>
                                                                                        <label for="">si</label>
                                                                                    <?php } ?>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?= view('templates/footer') ?>