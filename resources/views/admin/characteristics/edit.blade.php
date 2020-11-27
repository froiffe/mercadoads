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
            Editar característica
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('characteristics.list') }}"><i class="fa fa-list"></i> Listado de características</a>
            </li>
            <li class="active">Editar característica</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('characteristics.update', $characteristic) }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="{{ $characteristic->id }}">
                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                <li class="active"><a href="#spanish" data-toggle="tab" aria-expanded="true">Español</a></li>
                                <li class=""><a href="#portugues" data-toggle="tab" aria-expanded="false">Portugués</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="spanish">
                                        <div class="form-group">
                                            <label for="title_es">Título</label>
                                            <input class="form-control" type="text" name="title_es" value="{{ old('title_es') ? old('title_es') : $characteristic->{'title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description_es">Descripción</label>
                                            <textarea class="form-control summernote" name="description_es" cols="30" rows="10">{{ old('description_es') ? old('description_es') : $characteristic->{'description:es'} }}</textarea>
                                        </div>

                                        @if( !is_null($characteristic->{'image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($characteristic->{'image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_es">Imagen</label>
                                            <input class="form-control" type="file" name="image_es">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="portugues">
                                        <div class="form-group">
                                            <label for="title_pt">Título</label>
                                            <input class="form-control" type="text" name="title_pt" value="{{ old('title_pt') ? old('title_pt') : $characteristic->{'title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description_pt">Descripción</label>
                                            <textarea class="form-control summernote" name="description_pt" cols="30" rows="10">{{ old('description_pt') ? old('description_pt') : $characteristic->{'description:pt'} }}</textarea>
                                        </div>

                                        @if( !is_null($characteristic->{'image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($characteristic->{'image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="image_pt">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="key">Key</label>
                                <input class="form-control" type="text" name="key" value="{{ old('key') ? old('key') : $characteristic->key }}">
                            </div>

                            <div class="form-group">
                                <label for="position">Posición</label>
                                <input class="form-control" type="text" name="position" value="{{ old('position') ? old('position') : $characteristic->position }}">
                            </div>
                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                            <a href="{{ route('characteristics.list') }}" class="btn btn-warning">Volver al listado</a>
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
        $('.summernote').summernote();
    });
</script>
@endsection
