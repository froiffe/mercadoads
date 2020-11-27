@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Listado de contactos de landing
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-list"></i> Listado de contactos de landing</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        @include('admin.partials.messages')

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado de contactos de landing</h3>
                        <div class="box-tools pull-right no-print">
                            <a href="{{ route('landing_contacts.export') }}" class="btn btn-primary text-white"><i class="fa fa-download"></i> Exportar</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table dataTable table-bordered table-striped" id="landing_contacts">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Fecha y hora</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Fecha y hora</th>

                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('#landing_contacts').DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                "url": "{{ route('landing_contacts.ajax-list') }}",
                "type": "POST",
            },
            "columns": [
                { "data": "name" },
                { "data": "lastname" },
                { "data": "email" },
                { "data": "created_at" },
                {
                    "data": "actions",
                    "render": function(data) {
                        var show_button = '<a class="btn btn-warning" href="'+ data.show +'"><i class="fa fa-eye"></i> Ver</a>';
                        // var delete_button = '<a class="btn btn-danger" href="'+ data.delete +'" onclick="return confirm(\'¿Está seguro que desea eliminar el registro?\')"><i class="fa fa-times"></i> Borrar</a>';
                        // return edit_button + ' ' + delete_button;
                        return show_button;
                    }
                }
            ],
            "language": {
                "url": "{{ asset('admin-panel/plugins/datatables/lang/spanish.json') }}"
            }
        });
        $('#flash-overlay-modal').modal();
    });

</script>
@endsection
