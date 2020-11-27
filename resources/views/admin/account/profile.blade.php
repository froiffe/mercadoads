@extends('admin.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Mi cuenta
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Mi cuenta</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('account.update') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input class="form-control" type="password" name="password" id="">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Repita la contraseña</label>
                                <input class="form-control" type="password" name="password_confirmation" id="">
                            </div>

                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Actualizar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
