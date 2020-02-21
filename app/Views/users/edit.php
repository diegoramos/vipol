<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
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
        <form action="/users/<?= $user_id ?>" method="post" id="userUpdateForm">
            <input type="hidden" name="_method" value="PUT" />
            <?= view('users/form') ?>
            <?= view('users/permissions') ?>
            <button type="submit" class="btn btn-primary floating-button">Actualizar</button>
        </form>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection() ?>