@extends('admin.layouts.master')

@section('css')
<link href="{{ asset('admin-panel/plugins/multiselect/css/multi-select.css') }}" media="screen" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-panel/plugins/summernote/summernote.css') }}" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('admin-panel/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Nuevo insight
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('insights.list') }}"><i class="fa fa-list"></i> Listado de insights</a>
            </li>
            <li class="active">Nuevo insight</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('insights.store') }}" method="POST" enctype="multipart/form-data">

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
                                            <label for="slug_es">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_es" id="" value="{{ old('slug_es') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_es">Título</label>
                                            <input class="form-control" type="text" name="title_es" id="" value="{{ old('title_es') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle_es">Subtítulo</label>
                                            <textarea class="form-control summernote" name="subtitle_es" cols="30" rows="10">{{ old('subtitle_es') }}</textarea>
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
                                            <label for="content_es">Contenido</label>
                                            <textarea class="form-control summernote" name="content_es" cols="30" rows="30">{{ old('content_es') }}</textarea>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_list_es" {{ old('is_highlight_list_es') ? 'checked' : '' }} value="1"> Destacado en la página de listado
                                        </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_home_es" {{ old('is_highlight_home_es') ? 'checked' : '' }} value="1"> Destacado en la home
                                        </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="image_es">Imagen</label>
                                            <input class="form-control" type="file" name="image_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_home_es">Imagen home</label>
                                            <input class="form-control" type="file" name="image_home_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="desktop_banner_image_es">Imagen banner (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_banner_image_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_banner_image_es">Imagen banner (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_banner_image_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="desktop_internal_image_es">Imagen interna (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_internal_image_es">
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_interna_image_es">Imagen interna (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_interna_image_es">
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right datepicker" name="date_es">
                                            </div>
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
                                            <textarea class="form-control summernote" name="subtitle_pt" cols="30" rows="10">{{ old('subtitle_pt') }}</textarea>
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
                                            <label for="content_pt">Contenido</label>
                                            <textarea class="form-control summernote" name="content_pt" cols="30" rows="30">{{ old('content_pt') }}</textarea>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_list_pt" {{ old('is_highlight_list_pt') ? 'checked' : '' }} value="1"> Destacado en la página de listado
                                        </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_home_pt" {{ old('is_highlight_home_pt') ? 'checked' : '' }} value="1"> Destacado en la home
                                        </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="image_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="image_home_pt">Imagen home</label>
                                            <input class="form-control" type="file" name="image_home_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="desktop_banner_image_pt">Imagen banner (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_banner_image_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_banner_image_pt">Imagen banner (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_banner_image_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="desktop_internal_image_pt">Imagen interna (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_internal_image_pt">
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_internal_image_pt">Imagen interna (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_internal_image_pt">
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right datepicker" name="date_pt" autocomplete="off">
                                            </div>
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
                                <label for="position">Posición</label>
                                <input class="form-control" type="text" name="position" value="{{ old('position') }}">
                            </div>

                            <div class="form-group">
                                <label for="format">Formato listado</label>
                                <select class="form-control" name="format">
                                    <option value="">Seleccione</option>
                                    <option {{ old('format') == '1/3' ? 'selected' : '' }} value="1/3">1/3</option>
                                    <option {{ old('format') == '1/2' ? 'selected' : '' }} value="1/2">1/2</option>
                                    <option {{ old('format') == '2/3' ? 'selected' : '' }} value="2/3">2/3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="insights">Insights relacionados</label>
                                <select class="form-control" name="insights[]" id="insights" multiple>
                                    @foreach($insights as $insight)
                                    <option {{ !is_null(old('insights')) && in_array($insight->id, old('insights')) ? 'selected' : '' }} value="{{ $insight->id }}">{{ $insight->{'title:es'} }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                            <a href="{{ route('insights.list') }}" class="btn btn-warning">Volver al listado</a>
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
<script src="{{ asset('admin-panel/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin-panel/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('#insights').multiSelect();

        $('.datepicker').datepicker({
            language: 'es',
            format: 'dd-mm-yyyy'
        });

        $('.summernote').summernote();
    });
</script>
@endsection
