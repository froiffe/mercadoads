@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Listado de casos de éxito
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-list"></i> Listado de casos de éxito</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        @include('admin.partials.messages')

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado de casos de éxito</h3>
                        <div class="box-tools pull-right no-print">
                            <a href="{{ route('success-stories.create') }}" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Nuevo</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table dataTable table-bordered table-striped" id="success-stories">
                            <thead>
                                <tr>
                                    <th>Slug español</th>
                                    <th>Slug portugués</th>
                                    <th>Título español</th>
                                    <th>Título portugués</th>
                                    <th>¿Destacado listado español?</th>
                                    <th>¿Destacado listado portugués?</th>
                                    <th>¿Destacado home español?</th>
                                    <th>¿Destacado home portugués?</th>
                                    <th>¿Está activo español?</th>
                                    <th>¿Está activo portugués?</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Slug español</th>
                                    <th>Slug portugués</th>
                                    <th>Título español</th>
                                    <th>Título portugués</th>
                                    <th>¿Destacado listado español?</th>
                                    <th>¿Destacado listado portugués?</th>
                                    <th>¿Destacado home español?</th>
                                    <th>¿Destacado home portugués?</th>
                                    <th>¿Está activo español?</th>
                                    <th>¿Está activo portugués?</th>

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
        $('#success-stories').DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                "url": "{{ route('success-stories.ajax-list') }}",
                "type": "POST",
            },
            "columns": [
                { "data": "slug_es" },
                { "data": "slug_pt" },
                { "data": "title_es" },
                { "data": "title_pt" },
                { "data": "is_highlight_list_es" },
                { "data": "is_highlight_list_pt" },
                { "data": "is_highlight_home_es" },
                { "data": "is_highlight_home_pt" },
                { "data": "is_active_es" },
                { "data": "is_active_pt" },
                {
                    "data": "actions",
                    "render": function(data) {
                        var edit_button = '<a class="btn btn-primary" href="'+ data.edit +'"><i class="fa fa-edit"></i> Editar</a>';
                        var delete_button = '<a class="btn btn-danger" href="'+ data.delete +'" onclick="return confirm(\'¿Está seguro que desea eliminar el registro?\')"><i class="fa fa-times"></i> Borrar</a>';
                        return edit_button + ' ' + delete_button;
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
