<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
<?= $this->include('partners/modalForm') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Listado De Socios</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Socios</a></li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Socios </h3>
                        <div class="float-right"><button type="button" class="btn btn-success" id="create-partner" data-toggle="modal" data-target="#modal-partner">Nuevo Socio</button></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 table-responsive p-0">
                                    <div class="card-body table-responsive p-0">
                                        <table id="data-table-partner" class="table table-hover text-nowrap">
                                            <thead>
                                                <tr role="row">
                                                    <th>Id</th>
                                                    <th>type_institution_id</th>
                                                    <th>active_document_id</th>
                                                    <th>date_in</th>
                                                    <th>file_num</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token_name"]').attr('content')
            }
        });

        var dataTablepartner = $('#data-table-partner').DataTable({
            serverSide: true,
            processing: true,
            ordering: true,
            ajax: {
                url: "<?= base_url('partner/list') ?>",
                method: 'post'
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "type_institution_id"
                },
                {
                    "data": "active_document_id"
                },
                {
                    "data": "date_in"
                },
                {
                    "data": "file_num"
                },
                {
                    "data": "action"
                }
            ],
            "columnDefs": [{
                width: '80px',
                targets: 5,
                orderable: false
            }, ]
        });

        $(document).on('click', '#btn-save-partner', function() {
            $('.text-danger').remove();
            var createForm = $("#form-partner");
            ajaxRequest(
                "<?= base_url('partner') ?>",
                'POST',
                createForm.serializeArray(),
                function(response) {
                    if (response.errors) {
                        $.each(response.errors, function(elem, messages) {
                            createForm.find('input[name="' + elem + '"]').after('<p class="text-danger">' + messages + '</p>');
                            createForm.find('textarea[name="' + elem + '"]').after('<p class="text-danger">' + messages + '</p>');
                        });
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: response.messages
                        })
                        dataTablepartner.ajax.reload();
                        $("#form-partner").trigger("reset");
                        $("#modal-partner").modal('hide');
                    }
                }
            )
        })

        $(document).on('click', '.btn-edit', function(e) {
            $('.text-danger').remove();
            e.preventDefault();
            var url = "<?= base_url('partner/edit') ?>" + "/" + ":id";
            url = url.replace(':id', $(this).attr('data-id'));
            ajaxRequest(
                url, 'GET', [],
                function(response) {
                    if (response.data) {
                        var editForm = $('#form-edit-partner');
                        editForm.find('input[name="title"]').val(response.data.type_institution_id);
                        editForm.find('input[name="author"]').val(response.data.active_document_id);
                        editForm.find('textarea[name="description"]').val(response.data.date_in);
                        editForm.find('select[name="status_id"]').val(response.data.file_num);
                        $("#partner_id").val(response.data.id);
                        $("#modal-edit-partner").modal('show');
                    }
                }
            )
        });

        $(document).on('click', '#btn-partner', function(e) {
            var url = "<?= base_url('partner/update') ?>" + "/" + ":id";
            url = url.replace(':id', $("#partner_id").val());
            var editForm = $("#form-partner");
            ajaxRequest(
                url,
                'PUT',
                editForm.serializeArray(),
                function(response) {
                    if (response.errors) {
                        $.each(response.errors, function(elem, messages) {
                            editForm.find('input[name="' + elem + '"]').after('<p class="text-danger">' + messages + '</p>');
                            editForm.find('textarea[name="' + elem + '"]').after('<p class="text-danger">' + messages + '</p>');
                            Toast.fire({
                                icon: 'error',
                                title: messages
                            })
                        });
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: response.messages
                        })
                        dataTablepartner.ajax.reload();
                        $("#form-edit-partner").trigger("reset");
                        $("#modal-edit-partner").modal('hide');
                    }
                });
        });

        $(document).on('click', '.btn-delete', function(e) {
            var url = "<?= base_url('partner/destroy') ?>" + "/" + ":id";
            url = url.replace(':id', $(this).attr('data-id'));
            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.value) {
                        ajaxRequest(
                            url,
                            'DELETE',
                            [],
                            function(response) {
                                if (response.errors) {
                                    Toast.fire({
                                        icon: 'error',
                                        title: response.messages
                                    })
                                } else {
                                    Toast.fire({
                                        icon: 'success',
                                        title: response.messages
                                    })
                                    dataTablepartner.ajax.reload();
                                }
                            }
                        )
                    }
                })
        });

        $('#modal-partner').on('hidden.bs.modal', function(e) {
            $("#form-partner").trigger("reset");
        });

        function ajaxRequest(url, type, data, successFunction) {
            $.ajax({
                url: url,
                method: type,
                data: data,
                success: successFunction
            });
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    });

    $('#modal-partner-1').validate({
        rules: {
            name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            dni: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            password_confirm: {
                minlength: 6,
                equalTo: "#password"
            }
        },
        messages: {
            name: {
                required: "Este campo es requerido.",
            },
            last_name: {
                required: "Este campo es requerido.",
            },
            dni: {
                required: "Este campo es requerido.",
            },
            email: {
                required: "Por favor ingrese una dirección de correo electrónico",
                email: "Por favor ingrese un correo electronco válido"
            },
            email: {
                required: "Por favor ingrese una dirección de correo electrónico",
                email: "Por favor ingrese un correo electronco válido"
            },
            password: {
                required: "Por favor proporcione una contraseña",
                minlength: "Su contraseña debe tener al menos 6 caracteres."
            },
            password_confirm: "Por favor ingrese el mismo valor nuevamente."
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
</script>
<?= $this->endSection() ?>