<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permisos</title>
</head>
<body>
    <?php  foreach ($allModules as $key => $module) {  ?>
        
        <ul>
            <li>
                <input type="checkbox" name="" id=""><label for=""><?=$module['name']?></label>
                <ul>
                    <?php foreach ($module['sub'] as $key => $module) { ?>
                    <li> 
                        <input type="checkbox" name="" id=""><label for=""><?=$module['name']?></label>
                        <?php if($module['is_base']){ ?>
                            <ul>
                            <?php foreach ($module['sub'] as $key => $module) { ?>
                                <li> 
                                    <input type="checkbox" name="" id=""><label for=""><?=$module['name']?></label>
                                    <?php if($module['is_base']){ ?>
                                        <ul>
                                        <?php foreach ($module['sub'] as $key => $module) { ?>
                                            <li> 
                                                <input type="checkbox" name="" id=""><label for=""><?=$module['name']?></label>
                                                <?php if($module['is_base']){ ?>
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
            </li>
        </ul>
    <?php } ?>
</body>
</html>