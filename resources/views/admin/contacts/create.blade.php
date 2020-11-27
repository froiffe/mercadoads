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
            Nueva página
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('pages.list') }}"><i class="fa fa-list"></i> Listado de páginas</a>
            </li>
            <li class="active">Nueva página</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            </div>

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                <li class="active"><a href="#spanish" data-toggle="tab" aria-expanded="true">Español</a></li>
                                <li class=""><a href="#portugues" data-toggle="tab" aria-expanded="false">Portugués</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="spanish">
                                        {{-- <div class="form-group">
                                            <label for="slug_es">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_es" value="{{ old('slug_es') }}">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="seo_title_es">Título SEO</label>
                                            <input class="form-control" type="text" name="seo_title_es" value="{{ old('seo_title_es') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_es">Descripción SEO</label>
                                            <textarea class="form-control summernote" name="seo_description_es" cols="30" rows="10">{{ old('seo_description_es') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_image_es">Imagen SEO</label>
                                            <input class="form-control" type="file" name="seo_image_es">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="portugues">
                                        {{-- <div class="form-group">
                                            <label for="slug_pt">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_pt" value="{{ old('slug_pt') }}">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="seo_title_pt">Título SEO</label>
                                            <input class="form-control" type="text" name="seo_title_pt" value="{{ old('seo_title_pt') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_pt">Descripción SEO</label>
                                            <textarea class="form-control summernote" name="seo_description_pt" cols="30" rows="10">{{ old('seo_description_pt') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_image_pt">Imagen SEO</label>
                                            <input class="form-control" type="file" name="seo_image_pt">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                            <a href="{{ route('pages.list') }}" class="btn btn-warning">Volver al listado</a>
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
