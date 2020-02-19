<?php if (!empty($errors)) {  ?>
    <div class="alert alert-danger" id="errorsMessage" role="alert">
    <ul>
        <?php foreach ($errors as $error) : ?>
        <li><?= esc($error) ?></li>
        <?php endforeach ?>
    </ul>
    </div>
<?php } ?>
<!-- Main row -->
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Informacion Personal</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?=isset($fields['name']) ? $fields['name'] : '' ?>" placeholder="Ingresa el nombre">
                </div>
                <div class="form-group">
                    <label for="last_name">Apellidos</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" value="<?=isset($fields['last_name']) ? $fields['last_name'] : '' ?>" placeholder="Ingresa los apellidos">
                </div>
                <div class="form-group">
                    <label for="dni">Dni</label>
                    <input type="text" name="dni" class="form-control" id="dni" value="<?=isset($fields['dni']) ? $fields['dni'] : '' ?>" placeholder="Ingresa el dni">
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address" class="form-control" id="address" value="<?=isset($fields['address']) ? $fields['address'] : '' ?>" placeholder="Ingreesar la dirección">
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Informacion Acceso</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?=isset($fields['email']) ? $fields['email'] : '' ?>" placeholder="Ingresa el email">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?=isset($fields['password']) ? $fields['password'] : '' ?>" placeholder="Ingresa contraseña">
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirmar contraseña</label>
                    <input type="password" name="password_confirm" class="form-control" id="password_confirm" value="<?=isset($fields['password_confirm']) ? $fields['password_confirm'] : '' ?>" placeholder="Confirmar contraseña">
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</div>