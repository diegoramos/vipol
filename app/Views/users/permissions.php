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
              <ul class="myUL">
                <li>
                  <span class="caret"><?= $module['name'] ?></span>
                  <input type="checkbox" raiz="1" <?php echo ($module['is_base']) ? 'base="1"' : 'base="0"' ?> name="permissions[]" id="permissions<?= $module['id'] ?>" value="<?= $module['id'] ?>" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>>
                  <ul class="nested">
                    <?php foreach ($module['sub'] as $key => $module) { ?>
                      <li>
                        <span <?php echo ($module['is_base']) ? 'class="caret"' : '' ?>><?= $module['name'] ?></span>
                        <input type="checkbox" <?php echo ($module['is_base']) ? 'base="1"' : 'base="0"' ?> name="permissions[]" id="permissions<?= $module['id'] ?>" value="<?= $module['id'] ?>" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>>
                        <?php if ($module['is_base']) { ?>
                          <ul class="nested">
                            <?php foreach ($module['sub'] as $key => $module) { ?>
                              <li>
                                <span <?php echo ($module['is_base']) ? 'class="caret"' : '' ?>><?= $module['name'] ?></span>
                                <input type="checkbox" <?php echo ($module['is_base']) ? 'base="1"' : 'base="0"' ?> name="permissions[]" id="permissions<?= $module['id'] ?>" value="<?= $module['id'] ?>" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>>
                                <?php if ($module['is_base']) { ?>
                                  <ul class="nested">
                                    <?php foreach ($module['sub'] as $key => $module) { ?>
                                      <li>
                                        <input type="checkbox" <?php echo ($module['is_base']) ? 'base="1"' : 'base="0"' ?> name="permissions[]" id="permissions<?= $module['id'] ?>" value="<?= $module['id'] ?>" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>>
                                        <span for=""><?= $module['name'] ?></span>
                                        <?php if ($module['is_base']) { ?>
                                          <ul class="nested">
                                            <?php foreach ($module['sub'] as $key => $module) { ?>
                                              <li>
                                                <input type="checkbox" <?php echo ($module['is_base']) ? 'base="1"' : 'base="0"' ?> name="permissions[]" id="permissions<?= $module['id'] ?>" value="<?= $module['id'] ?>" <?php echo in_array($module['id'], $myPermissions) ? 'checked' : '' ?>>
                                                <span for=""><?= $module['name'] ?></span>
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
                        <?php } ?>
                      </li>
                    <?php } ?>
                  </ul>
                </li>
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