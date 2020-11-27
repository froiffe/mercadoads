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
            Editar página
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('pages.list') }}"><i class="fa fa-list"></i> Listado de páginas</a>
            </li>
            <li class="active">Editar página</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('pages.update', $page) }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="{{ $page->id }}">
                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') ? old('name') : $page->name }}" disabled>
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
                                            <input class="form-control" type="text" name="slug_es" value="{{ old('slug_es') ? old('slug_es') : $page->{'slug:es'} }}">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="seo_title_es">Título SEO</label>
                                            <input class="form-control" type="text" name="seo_title_es" value="{{ old('seo_title_es') ? old('seo_title_es') : $page->{'seo_title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_es">Descripción SEO</label>
                                            <textarea class="form-control summernote" name="seo_description_es" cols="30" rows="10">{{ old('seo_description_es') ? old('seo_description_es') : $page->{'seo_description:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_ogtitle_es">Título OG SEO</label>
                                            <input class="form-control" type="text" name="seo_ogtitle_es" value="{{ old('seo_ogtitle_es') ? old('seo_ogtitle_es') : $page->{'seo_ogtitle:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_ogdescription_es">Descripción OG SEO</label>
                                            <textarea class="form-control summernote" name="seo_ogdescription_es" cols="30" rows="10">{{ old('seo_ogdescription_es') ? old('seo_ogdescription_es') : $page->{'seo_ogdescription:es'} }}</textarea>
                                        </div>

                                        @if( !is_null($page->{'seo_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($page->{'seo_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="seo_image_es">Imagen SEO</label>
                                            <input class="form-control" type="file" name="seo_image_es">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="portugues">
                                        {{-- <div class="form-group">
                                            <label for="slug_pt">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_pt" value="{{ old('slug_pt') ? old('slug_pt') : $page->{'slug:pt'} }}">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="seo_title_pt">Título SEO</label>
                                            <input class="form-control" type="text" name="seo_title_pt" value="{{ old('seo_title_pt') ? old('seo_title_pt') : $page->{'seo_title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_pt">Descripción SEO</label>
                                            <textarea class="form-control summernote" name="seo_description_pt" cols="30" rows="10">{{ old('seo_description_pt') ? old('seo_description_pt') : $page->{'seo_description:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_ogtitle_pt">Título OG SEO</label>
                                            <input class="form-control" type="text" name="seo_ogtitle_pt" value="{{ old('seo_ogtitle_pt') ? old('seo_ogtitle_pt') : $page->{'seo_ogtitle:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_ogdescription_pt">Descripción OG SEO</label>
                                            <textarea class="form-control summernote" name="seo_ogdescription_pt" cols="30" rows="10">{{ old('seo_ogdescription_pt') ? old('seo_ogdescription_pt') : $page->{'seo_ogdescription:pt'} }}</textarea>
                                        </div>

                                        @if( !is_null($page->{'seo_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($page->{'seo_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

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
