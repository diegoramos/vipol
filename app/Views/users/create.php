<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Crear Usuario</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/users">Usuarios</a></li>
                    <li class="breadcrumb-item active">Crear</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form action="/users" method="post" id="userCreateForm">
            <?= view('users/form') ?>

            <?= view('users/permissions') ?>
            <!-- /.row -->
            <button type="submit" class="btn btn-success floating-button">Guardar</button>
        </form>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection() ?>