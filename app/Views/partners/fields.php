<input type="hidden" class="form-control" id="partner_id">
<div class="row">
    <div class="form-group col-3">
        <label for="type_institution_id">Instit:</label>
        <select class="form-control" name="type_institution_id" id="type_institution_id">
            <?php foreach ($typeInstitutions as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['description_short']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-3">
        <label for="">Ind.Ces:</label>
        <select class="form-control" name="" id="">
            <option value="0">Sin Información</option>
        </select>
    </div>
    <div class="form-group col-3">
        <label for="">Tipo Doc:</label>
        <select class="form-control" name="identification_document_id" id="identification_document_id">
            <?php foreach ($identifications as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['description_short']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-3">
        <label for="">Núm.Doc:</label>
        <input type="text" id="" name="" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        <label for="">Fecha. Ingreso:</label>
        <input type="text" class="form-control" name="date_in" id="date_in">
    </div>
    <div class="form-group col-4">
        <label for="">N° Arch:</label>
        <input type="text" class="form-control" name="file_num" id="file_num">
    </div>
    <div class="form-group col-4">
        <label for="">Cuenta N°:</label>
        <input type="text" class="form-control" name="account_num" id="account_num">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        <label for="">Fecha. Pago:</label>
        <select class="form-control" name="payment_situation_id" id="payment_situation_id">
            
        </select>
    </div>
    <div class="form-group col-4">
        <label for="">Sit.Soc:</label>
        <select class="form-control" name="partner_situation_id" id="partner_situation_id">
            
        </select>
    </div>
    <div class="form-group col-4">
        <label for="">Fch.Ret:</label>
        <input type="text" class="form-control" name="date_out" id="date_out">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        <label for="">A.Csjo:</label>
        <select class="form-control" name="agreement_document_id" id="agreement_document_id">
            <?php foreach ($agreementDocumentsCsjos as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['description_short']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="">N°.Acdo:</label>
        <input type="text" class="form-control" name="num_agreement" id="num_agreement">
    </div>
    <div class="form-group col-4">
        <label for="">Fch.Acdo:</label>
        <input type="text" class="form-control" name="date_agreement" id="date_agreement">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        <label for="">Autoriz:</label>
        <select class="form-control" name="authorization_discount_id" id="authorization_discount_id">
            <?php foreach ($agreementDocumentsCsjos as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['description_short']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="">Tip.Con:</label>
        <select class="form-control" name="type_agreement_id" id="type_agreement_id">
            <?php foreach ($agreementDocumentsCsjos as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['description_short']?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="">Comb:</label>
        <select class="form-control" name="fuel_autho_id" id="fuel_autho_id">
            <?php foreach ($agreementDocumentsCsjos as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['description_short']?></option>
            <?php } ?>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="form-group col-4">
        <h5>Instit</h5>
    </div>
    <div class="form-group col-4">
        <h5 for="">Causante</h5>
    </div>
    <div class="form-group col-4">
        <h5 for="">Benef</h5>
    </div>
</div>
<div class="row">
    <div class="form-group col-4">
        <label for="">Cip PNP:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-4">
        <label for="">Caja Militar:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-4">
        <label for="">Comb:</label>
        <input type="text" class="form-control">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <h5>Datos del socio</h5>
    </div>
</div>

<div class="row">
    <div class="form-group col-6">
        <label for="">Apellidos y Nombres:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-4">
        <label for="">F.Nac:</label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        <label for="">Sexo:</label>
        Masculino<input type="checkbox"><br> Femenino<input type="checkbox">
    </div>
    <div class="form-group col-4">
        <label for="">Tipo.Doc:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-4">
        <label for="">Nro.Doc:</label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
    </div>
    <div class="form-group col-4">
        <label for="">Tipo.Doc:</label>
        <select name="" id="" class="form-control">
            <option value="">option</option>
            <option value="">option</option>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="">Num.Hijos:</label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-4">
        <label for="">Direccion:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-4">
        <label for="">Distrito:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-4">
        <label for="">Telefono:</label>
        <input type="text" class="form-control">
    </div>
</div>

<div class="row">
    <div class="form-group col-6">
        <label for="">Cent.Trabajo:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-6">
        <label for="">Direccion:</label>
        <input type="text" class="form-control">
    </div>
</div>
<div class="row">
    <div class="form-group col-3">
        <label for="">Distrito:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-3">
        <label for="">Telefono:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-3">
        <label for="">Tiempo.Serv:</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group col-3">
        <label for="">Sueldo:</label>
        <input type="text" class="form-control">
    </div>
</div>
<div class="row">
    <div class="form-group col-12">
        <label for="">Distrito:</label>
        <textarea name="" id="" class="form-control"></textarea>
    </div>
</div>