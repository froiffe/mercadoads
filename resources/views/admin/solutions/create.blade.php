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
            Nuevo formato
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('solutions.list') }}"><i class="fa fa-list"></i> Listado de formatos</a>
            </li>
            <li class="active">Nuevo formato</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('solutions.store') }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="box-body">

                            @include('admin.partials.messages')

                            <div class="form-group">
                                <label for="category">Categoria</label>
                                <select class="form-control" name="category">
                                    <option value="">Seleccionar</option>
                                    <option {{ old('category') == 'media' ? 'selected' : '' }} value="media">Media</option>
                                    <option {{ old('category') == 'supermercado_libre' ? 'selected' : '' }} value="supermercado_libre">Supermercado Libre</option>
                                    <option {{ old('category') == 'audience_deals' ? 'selected' : '' }} value="audience_deals">Audience Deals</option>
                                </select>
                            </div>

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                <li class="active"><a href="#spanish" data-toggle="tab" aria-expanded="true">Español</a></li>
                                <li class=""><a href="#portugues" data-toggle="tab" aria-expanded="false">Portugués</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="spanish">
                                        <div class="form-group">
                                            <label for="slug_es">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_es" value="{{ old('slug_es') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_es">Título</label>
                                            <input class="form-control" type="text" name="title_es" value="{{ old('title_es') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle_es">Subtítulo</label>
                                            <textarea class="form-control" name="subtitle_es" cols="30" rows="10">{{ old('subtitle_es') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_es">Descripción</label>
                                            <textarea class="form-control summernote" name="description_es" cols="30" rows="10">{{ old('description_es') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_list_es">Bajada módulo listado</label>
                                            <textarea class="form-control" name="description_list_es" cols="30" rows="10">{{ old('description_list_es') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="characteristics_text_es">Texto características</label>
                                            <textarea class="form-control summernote" name="characteristics_text_es" cols="30" rows="10">{{ old('characteristics_text_es') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image_es">Imagen</label>
                                            <input class="form-control" type="file" name="image_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_desktop_es">Imagen desktop</label>
                                            <input class="form-control" type="file" name="image_desktop_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_webmobile_es">Imagen webmobile</label>
                                            <input class="form-control" type="file" name="image_webmobile_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_app_es">Imagen app</label>
                                            <input class="form-control" type="file" name="image_app_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_desktop_es">Video desktop</label>
                                            <input class="form-control" type="file" name="video_desktop_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_webmobile_es">Video webmobile</label>
                                            <input class="form-control" type="file" name="video_webmobile_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_app_es">Video app</label>
                                            <input class="form-control" type="file" name="video_app_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_default_es">Imagen por default</label>
                                            <select class="form-control" name="image_default_es">
                                                <option value="desktop">Desktop</option>
                                                <option value="webmobile">Webmobile</option>
                                                <option value="app">App</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="specs_file_es">Specs</label>
                                            <input class="form-control" type="file" name="specs_file_es">
                                        </div>

                                        <h3>SEO</h3>
                                        <div class="form-group">
                                            <label for="seo_title_es">Título</label>
                                            <input class="form-control" type="text" name="seo_title_es" value="{{ old('seo_title_es') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_es">Descripción</label>
                                            <textarea class="form-control" name="seo_description_es" cols="30" rows="10">{{ old('seo_description_es') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_image_es">Imagen</label>
                                            <input class="form-control" type="file" name="seo_image_es">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="portugues">
                                        <div class="form-group">
                                            <label for="slug_pt">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_pt" value="{{ old('slug_pt') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_pt">Título</label>
                                            <input class="form-control" type="text" name="title_pt" value="{{ old('title_pt') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle_pt">Subtítulo</label>
                                            <textarea class="form-control" name="subtitle_pt" cols="30" rows="10">{{ old('subtitle_pt') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_pt">Descripción</label>
                                            <textarea class="form-control summernote" name="description_pt" cols="30" rows="10">{{ old('description_pt') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_list_pt">Bajada módulo listado</label>
                                            <textarea class="form-control" name="description_list_pt" cols="30" rows="10">{{ old('description_list_pt') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="characteristics_text_pt">Texto características</label>
                                            <textarea class="form-control summernote" name="characteristics_text_pt" cols="30" rows="10">{{ old('characteristics_text_pt') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="image_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_desktop_pt">Imagen desktop</label>
                                            <input class="form-control" type="file" name="image_desktop_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_webmobile_pt">Imagen webmobile</label>
                                            <input class="form-control" type="file" name="image_webmobile_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_app_pt">Imagen app</label>
                                            <input class="form-control" type="file" name="image_app_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_desktop_pt">Video desktop</label>
                                            <input class="form-control" type="file" name="video_desktop_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_webmobile_pt">Video webmobile</label>
                                            <input class="form-control" type="file" name="video_webmobile_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="video_app_pt">Video app</label>
                                            <input class="form-control" type="file" name="video_app_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_default_pt">Imagen por default</label>
                                            <select class="form-control" name="image_default_pt">
                                                <option value="desktop">Desktop</option>
                                                <option value="webmobile">Webmobile</option>
                                                <option value="app">App</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="video_pt">Video</label>
                                            <input class="form-control" type="file" name="video_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="specs_file_pt">Specs</label>
                                            <input class="form-control" type="file" name="specs_file_pt">
                                        </div>

                                        <h3>SEO</h3>
                                        <div class="form-group">
                                            <label for="seo_title_pt">Título</label>
                                            <input class="form-control" type="text" name="seo_title_pt" value="{{ old('seo_title_pt') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_pt">Descripción</label>
                                            <textarea class="form-control summernote" name="seo_description_pt" cols="30" rows="10">{{ old('seo_description_pt') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="seo_image_pt">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="types">Características</label>
                                <select class="form-control" name="types[]" id="types" multiple>
                                    @foreach($types as $type)
                                    <option {{ !is_null(old('types')) && in_array($type->id, old('types')) ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="characteristics">Características</label>
                                <select class="form-control" name="characteristics[]" id="characteristics" multiple>
                                    @foreach($characteristics as $characteristic)
                                    <option {{ !is_null(old('characteristics')) && in_array($characteristic->id, old('characteristics')) ? 'selected' : '' }} value="{{ $characteristic->id }}">{{ $characteristic->key }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="solutions">Formatos relacionados</label>
                                <select class="form-control" name="solutions[]" id="solutions" multiple>
                                    @foreach($solutions as $solution)
                                    <option {{ !is_null(old('solutions')) && in_array($solution->id, old('solutions')) ? 'selected' : '' }} value="{{ $solution->id }}">{{ $solution->{'title:es'} }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="position">Posición</label>
                                <input class="form-control" type="text" name="position" value="{{ old('position') }}">
                            </div>

                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                            <a href="{{ route('solutions.list') }}" class="btn btn-warning">Volver al listado</a>
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
        $('#solutions').multiSelect();
        $('#characteristics').multiSelect();
        $('#types').multiSelect();

        $('.summernote').summernote();
    });
</script>
@endsection
