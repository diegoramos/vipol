<?= $this->extend('templates/main') ?>
<?= $this->section('content') ?>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Usuarios </h3>
                        <div class="float-right">
                            <a class="btn btn-success" href="/users/new" role="button">Nuevo</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table id="data-table-user" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Dni</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
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
        var dataTableUser = $('#data-table-user').DataTable({
            serverSide: true,
            processing: true,
            ordering: true,
            ajax: {
                url: "<?= base_url('users/list') ?>",
                method: 'post'
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "dni"
                },
                {
                    "data": "name"
                },
                {
                    "data": "last_name"
                },
                {
                    "data": "action"
                }
            ],
            "columnDefs": [{
                width: '80px',
                targets: 4,
                orderable: false
            }, ]
        });



        $(document).on('click', '.btn-delete', function(e) {
            var url = "<?= base_url('users') ?>" + "/" + ":id";
            url = url.replace(':id', $(this).attr('data-id'));

            if (confirm("¿Estas seguro?")) {
                ajaxRequest(
                    url,
                    'DELETE',
                    [],
                    function(response) {
                        if (response.errors) {
                            alert(response.messages);
                        } else {
                            dataTableUser.ajax.reload();
                        }
                    }
                )
            }
        });

        function ajaxRequest(url, type, data, successFunction) {
            $.ajax({
                url: url,
                method: type,
                data: data,
                success: successFunction
            });
        }
    });
</script>
<?= $this->endSection() ?>