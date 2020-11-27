@extends('admin.layouts.master')

@section('css')
<link href="{{ asset('admin-panel/plugins/multiselect/css/multi-select.css') }}" media="screen" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-panel/plugins/summernote/summernote.css') }}" media="screen" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Ver contacto
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('landing_contacts.list') }}"><i class="fa fa-list"></i> Listado de contactos</a>
            </li>
            <li class="active">Ver contacto</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="#" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="{{ $contact->id }}">
                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="form-group">
                                <label for="locale">Página</label>
                                <input class="form-control" type="text" name="locale" value="{{ old('locale') ? old('locale') : $contact->locale }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="form">Formulario</label>
                                <input class="form-control" type="text" name="form" value="{{ old('form') ? old('form') : $contact->form }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') ? old('name') : $contact->name }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Apellido</label>
                                <input class="form-control" type="text" name="lastname" value="{{ old('lastname') ? old('lastname') : $contact->lastname }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" value="{{ old('email') ? old('email') : $contact->email }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="created_at">Fecha de creación</label>
                                <input class="form-control" type="text" name="created_at" value="{{ old('created_at') ? old('created_at') : $contact->created_at->format('d-m-Y H:i') }}" disabled>
                            </div>
                        </div>

                        <div class="box-footer">
                            {{-- <input class="btn btn-primary" type="submit" value="Guardar"> --}}
                            <a href="{{ route('landing_contacts.list') }}" class="btn btn-warning">Volver al listado</a>
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
<script src="{{ asset('admin-panel/plugins/summernote/summernote.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        // $('.summernote').summernote();
    });
</script>
@endsection
