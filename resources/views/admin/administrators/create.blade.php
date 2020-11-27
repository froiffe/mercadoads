@extends('admin.layouts.master')

@section('css')
<link href="{{ asset('admin-panel/plugins/multiselect/css/multi-select.css') }}" media="screen" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Nuevo administrador
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('administrators.list') }}"><i class="fa fa-users"></i> Listado de administradores</a>
            </li>
            <li class="active">Nuevo administrador</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('administrators.store') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" id="" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" id="" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type="password" name="password" id="">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirmar contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation" id="">
                            </div>

                            <div class="form-group">
                                <label for="role">Roles</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="">Seleccione</option>
                                    @foreach($roles as $role)
                                    <option {{ old('role') == $role->id ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->display_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                            <a href="{{ route('administrators.list') }}" class="btn btn-warning">Volver al listado</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
<script src="{{ asset('admin-panel/plugins/multiselect/js/jquery.multi-select.js') }}" type="text/javascript"></script>

<script>
    const MODERATOR_ROLE_ID = 3;
    $(document).ready(function () {
        //
    });
</script>
@endsection
