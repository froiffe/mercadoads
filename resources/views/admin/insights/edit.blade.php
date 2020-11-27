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
            Editar insight
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('insights.list') }}"><i class="fa fa-list"></i> Listado de insights</a>
            </li>
            <li class="active">Editar insight</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('insights.update', $insight) }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="{{ $insight->id }}">
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
                                            <input class="form-control" type="text" name="slug_es" value="{{ old('slug_es') ? old('slug_es') : $insight->{'slug:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_es">Título</label>
                                            <input class="form-control" type="text" name="title_es" value="{{ old('title_es') ? old('title_es') : $insight->{'title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle_es">Subtítulo</label>
                                            <textarea class="form-control summernote" name="subtitle_es" cols="30" rows="10">{{ old('subtitle_es') ? old('subtitle_es') : $insight->{'subtitle:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_es">Descripción</label>
                                            <textarea class="form-control summernote" name="description_es" cols="30" rows="10">{{ old('description_es') ? old('description_es') : $insight->{'description:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_list_es">Bajada módulo listado</label>
                                            <textarea class="form-control" name="description_list_es" cols="30" rows="10">{{ old('description_list_es') ? old('description_list_es') : $insight->{'description_list:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="content_es">Contenido</label>
                                            <textarea class="form-control summernote" name="content_es" cols="30" rows="30">{{ old('content_es') ? old('content_es') : $insight->{'content:es'} }}</textarea>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_list_es" {{ old('is_highlight_list_es') || $insight->{'is_highlight_list:es'} ? 'checked' : '' }} value="1"> Destacado en la página de listado
                                        </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_home_es" {{ old('is_highlight_home_es') || $insight->{'is_highlight_home:es'} ? 'checked' : '' }} value="1"> Destacado en la home
                                        </label>
                                        </div>

                                        @if( !is_null($insight->{'image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_es">Imagen</label>
                                            <input class="form-control" type="file" name="image_es">
                                        </div>

                                        @if( !is_null($insight->{'image_home:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'image_home:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_home_es">Imagen home</label>
                                            <input class="form-control" type="file" name="image_home_es">
                                        </div>

                                        @if( !is_null($insight->{'desktop_banner_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'desktop_banner_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_banner_image_es">Imagen banner (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_banner_image_es">
                                        </div>

                                        @if( !is_null($insight->{'mobile_banner_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'mobile_banner_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_banner_image_es">Imagen banner (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_banner_image_es">
                                        </div>

                                        @if( !is_null($insight->{'desktop_internal_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'desktop_internal_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_internal_image_es">Imagen interna (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_internal_image_es">
                                        </div>

                                        @if( !is_null($insight->{'mobile_internal_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'mobile_internal_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_internal_image_es">Imagen interna (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_internal_image_es">
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right datepicker" name="date_es" value="{{ date('d-m-Y', strtotime($insight->{'date:es'})) }}">
                                            </div>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_active_es" {{ old('is_active_es') || $insight->{'is_active:es'} ? 'checked' : '' }}> Activo
                                        </label>
                                        </div>

                                        <h3>SEO</h3>
                                        <div class="form-group">
                                            <label for="seo_title_es">Título</label>
                                            <input class="form-control" type="text" name="seo_title_es" value="{{ old('seo_title_es') ? old('seo_title_es') : $insight->{'seo_title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_es">Descripción</label>
                                            <textarea class="form-control" name="seo_description_es" cols="30" rows="10">{{ old('seo_description_es') ? old('seo_description_es') : $insight->{'seo_description:es'} }}</textarea>
                                        </div>

                                        @if( !is_null($insight->{'seo_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'seo_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="seo_image_es">Imagen</label>
                                            <input class="form-control" type="file" name="seo_image_es">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="portugues">
                                        <div class="form-group">
                                            <label for="slug_pt">Slug URL</label>
                                            <input class="form-control" type="text" name="slug_pt" value="{{ old('slug_pt') ? old('slug_pt') : $insight->{'slug:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_pt">Título</label>
                                            <input class="form-control" type="text" name="title_pt" value="{{ old('title_pt') ? old('title_pt') : $insight->{'title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle_pt">Subtítulo</label>
                                            <textarea class="form-control summernote" name="subtitle_pt" cols="30" rows="10">{{ old('subtitle_pt') ? old('subtitle_pt') : $insight->{'description:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_pt">Descripción</label>
                                            <textarea class="form-control summernote" name="description_pt" cols="30" rows="10">{{ old('description_pt') ? old('description_pt') : $insight->{'description:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_list_pt">Bajada módulo listado</label>
                                            <textarea class="form-control" name="description_list_pt" cols="30" rows="10">{{ old('description_list_pt') ? old('description_list_pt') : $insight->{'description_list:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="content_pt">Contenido</label>
                                            <textarea class="form-control summernote" name="content_pt" cols="30" rows="30">{{ old('content_pt') ? old('content_pt') : $insight->{'content:pt'} }}</textarea>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_list_pt" {{ old('is_highlight_list_pt') || $insight->{'is_highlight_list:pt'} ? 'checked' : '' }} value="1"> Destacado en la página de listado
                                        </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_home_pt" {{ old('is_highlight_home_pt') || $insight->{'is_highlight_home:pt'} ? 'checked' : '' }} value="1"> Destacado en la home
                                        </label>
                                        </div>

                                        @if( !is_null($insight->{'image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="image_pt">
                                        </div>

                                        @if( !is_null($insight->{'image_home:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'image_home:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_home_pt">Imagen home</label>
                                            <input class="form-control" type="file" name="image_home_pt">
                                        </div>

                                        @if( !is_null($insight->{'desktop_banner_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'desktop_banner_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_banner_image_pt">Imagen banner (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_banner_image_pt">
                                        </div>

                                        @if( !is_null($insight->{'mobile_banner_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'mobile_banner_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_banner_image_pt">Imagen banner (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_banner_image_pt">
                                        </div>

                                        @if( !is_null($insight->{'desktop_internal_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'desktop_internal_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_internal_image_pt">Imagen interna (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_internal_image_pt">
                                        </div>

                                        @if( !is_null($insight->{'mobile_internal_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'mobile_internal_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

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
                                                <input type="text" class="form-control pull-right datepicker" name="date_pt" value="{{ date('d-m-Y', strtotime($insight->{'date:pt'})) }}">
                                            </div>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_active_pt" {{ old('is_active_pt') || $insight->{'is_active:pt'} ? 'checked' : '' }}> Activo
                                        </label>
                                        </div>

                                        <h3>SEO</h3>
                                        <div class="form-group">
                                            <label for="seo_title_pt">Título</label>
                                            <input class="form-control" type="text" name="seo_title_pt" value="{{ old('seo_title_pt') ? old('seo_title_pt') : $insight->{'seo_title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_pt">Descripción</label>
                                            <textarea class="form-control" name="seo_description_pt" cols="30" rows="10">{{ old('seo_description_pt') ? old('seo_description_pt') : $insight->{'seo_description:pt'} }}</textarea>
                                        </div>

                                        @if( !is_null($insight->{'seo_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($insight->{'seo_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="seo_image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="seo_image_pt">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="position">Posición</label>
                                <input class="form-control" type="text" name="position" value="{{ old('position') ? old('position') : $insight->position }}">
                            </div>

                            <div class="form-group">
                                <label for="format">Formato listado</label>
                                <select class="form-control" name="format">
                                    <option value="">Seleccione</option>
                                    <option {{ old('format') == '1/3' || $insight->format == '1/3' ? 'selected' : '' }} value="1/3">1/3</option>
                                    <option {{ old('format') == '1/2' || $insight->format == '1/2' ? 'selected' : '' }} value="1/2">1/2</option>
                                    <option {{ old('format') == '2/3' || $insight->format == '2/3' ? 'selected' : '' }} value="2/3">2/3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="insights">Insights relacionados</label>
                                <select class="form-control" name="insights[]" id="insights" multiple>
                                    @foreach($insights as $insightRelated)
                                    <option {{ (!is_null(old('insights')) && in_array($insightRelated->id, old('insights'))) || $insight->insightsRelated->contains($insightRelated) ? 'selected' : '' }} value="{{ $insightRelated->id }}">{{ $insightRelated->{'title:es'} }}</option>
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
