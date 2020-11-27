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
            Editar caso de éxito
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{ route('success-stories.list') }}"><i class="fa fa-list"></i> Listado de casos de éxito</a>
            </li>
            <li class="active">Editar caso de éxito</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form action="{{ route('success-stories.update', $successStory) }}" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="{{ $successStory->id }}">
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
                                            <input class="form-control" type="text" name="slug_es" value="{{ old('slug_es') ? old('slug_es') : $successStory->{'slug:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_es">Título</label>
                                            <input class="form-control" type="text" name="title_es" value="{{ old('title_es') ? old('title_es') : $successStory->{'title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="banner_home_title_es">Título banner home</label>
                                            <input class="form-control" type="text" name="banner_home_title_es" value="{{ old('banner_home_title_es') ? old('banner_home_title_es') : $successStory->{'banner_home_title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description_es">Descripción</label>
                                            <textarea class="form-control summernote" name="description_es" cols="30" rows="10">{{ old('description_es') ? old('description_es') : $successStory->{'description:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_list_es">Bajada módulo listado</label>
                                            <textarea class="form-control" name="description_list_es" cols="30" rows="10">{{ old('description_list_es') ? old('description_list_es') : $successStory->{'description_list:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="content_es">Contenido</label>
                                            <textarea class="form-control" name="content_es" cols="30" rows="30">{{ old('content_es') ? old('content_es') : $successStory->{'content:es'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="video_id_es">ID de YouTube</label>
                                            <input class="form-control" type="text" name="video_id_es" value="{{ old('video_id_es') ? old('video_id_es') : $successStory->{'video_id:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="brand_es">Marca</label>
                                            <input class="form-control" type="text" name="brand_es" value="{{ old('brand_es') ? old('brand_es') : $successStory->{'brand:es'} }}">
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_list_es" {{ old('is_highlight_list_es') || $successStory->{'is_highlight_list:es'} ? 'checked' : '' }} value="1"> Destacado en la página de listado
                                        </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_home_es" {{ old('is_highlight_home_es') || $successStory->{'is_highlight_home:es'} ? 'checked' : '' }} value="1"> Destacado en la home
                                        </label>
                                        </div>

                                        @if( !is_null($successStory->{'image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_es">Imagen</label>
                                            <input class="form-control" type="file" name="image_es">
                                        </div>

                                        @if( !is_null($successStory->{'desktop_banner_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'desktop_banner_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_banner_image_es">Imagen banner (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_banner_image_es">
                                        </div>

                                        @if( !is_null($successStory->{'mobile_banner_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'mobile_banner_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_banner_image_es">Imagen banner (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_banner_image_es">
                                        </div>

                                        @if( !is_null($successStory->{'desktop_list_banner_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'desktop_list_banner_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_list_banner_image_es">Imagen banner listado (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_list_banner_image_es">
                                        </div>

                                        @if( !is_null($successStory->{'mobile_list_banner_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'mobile_list_banner_image:es'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_list_banner_image_es">Imagen banner listado (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_list_banner_image_es">
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_active_es" {{ old('is_active_es') || $successStory->{'is_active:es'} ? 'checked' : '' }}> Activo
                                        </label>
                                        </div>

                                        <h3>SEO</h3>
                                        <div class="form-group">
                                            <label for="seo_title_es">Título</label>
                                            <input class="form-control" type="text" name="seo_title_es" value="{{ old('seo_title_es') ? old('seo_title_es') : $successStory->{'seo_title:es'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_es">Descripción</label>
                                            <textarea class="form-control" name="seo_description_es" cols="30" rows="10">{{ old('seo_description_es') ? old('seo_description_es') : $successStory->{'seo_description:es'} }}</textarea>
                                        </div>

                                        @if( !is_null($successStory->{'seo_image:es'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'seo_image:es'}) }}" width="200">
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
                                            <input class="form-control" type="text" name="slug_pt" value="{{ old('slug_pt') ? old('slug_pt') : $successStory->{'slug:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="title_pt">Título</label>
                                            <input class="form-control" type="text" name="title_pt" value="{{ old('title_pt') ? old('title_pt') : $successStory->{'title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="banner_home_title_pt">Título banner home</label>
                                            <input class="form-control" type="text" name="banner_home_title_pt" value="{{ old('banner_home_title_pt') ? old('banner_home_title_pt') : $successStory->{'banner_home_title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="description_pt">Descripción</label>
                                            <textarea class="form-control summernote" name="description_pt" cols="30" rows="10">{{ old('description_pt') ? old('description_pt') : $successStory->{'description:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="description_list_pt">Bajada módulo listado</label>
                                            <textarea class="form-control" name="description_list_pt" cols="30" rows="10">{{ old('description_list_pt') ? old('description_list_pt') : $successStory->{'description_list:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="content_pt">Contenido</label>
                                            <textarea class="form-control" name="content_pt" cols="30" rows="30">{{ old('content_pt') ? old('content_pt') : $successStory->{'content:pt'} }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="video_id_pt">ID de YouTube</label>
                                            <input class="form-control" type="text" name="video_id_pt" value="{{ old('video_id_pt') ? old('video_id_pt') : $successStory->{'video_id:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="brand_pt">Marca</label>
                                            <input class="form-control" type="text" name="brand_pt" value="{{ old('brand_pt') ? old('brand_pt') : $successStory->{'brand:pt'} }}">
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_list_pt" {{ old('is_highlight_list_pt') || $successStory->{'is_highlight_list:pt'} ? 'checked' : '' }} value="1"> Destacado en la página de listado
                                        </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_highlight_home_pt" {{ old('is_highlight_home_pt') || $successStory->{'is_highlight_home:pt'} ? 'checked' : '' }} value="1"> Destacado en la home
                                        </label>
                                        </div>

                                        @if( !is_null($successStory->{'image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="image_pt">Imagen</label>
                                            <input class="form-control" type="file" name="image_pt">
                                        </div>

                                        @if( !is_null($successStory->{'desktop_banner_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'desktop_banner_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_banner_image_pt">Imagen banner (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_banner_image_pt">
                                        </div>

                                        @if( !is_null($successStory->{'mobile_banner_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'mobile_banner_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_banner_image_pt">Imagen banner (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_banner_image_pt">
                                        </div>

                                        @if( !is_null($successStory->{'desktop_list_banner_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'desktop_list_banner_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="desktop_list_banner_image_pt">Imagen banner listado (desktop)</label>
                                            <input class="form-control" type="file" name="desktop_list_banner_image_pt">
                                        </div>

                                        @if( !is_null($successStory->{'mobile_list_banner_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'mobile_list_banner_image:pt'}) }}" width="200">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="mobile_list_banner_image_pt">Imagen banner listado (mobile)</label>
                                            <input class="form-control" type="file" name="mobile_list_banner_image_pt">
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="is_active_pt" {{ old('is_active_pt') || $successStory->{'is_active:pt'} ? 'checked' : '' }}> Activo
                                        </label>
                                        </div>

                                        <h3>SEO</h3>
                                        <div class="form-group">
                                            <label for="seo_title_pt">Título</label>
                                            <input class="form-control" type="text" name="seo_title_pt" value="{{ old('seo_title_pt') ? old('seo_title_pt') : $successStory->{'seo_title:pt'} }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="seo_description_pt">Descripción</label>
                                            <textarea class="form-control" name="seo_description_pt" cols="30" rows="10">{{ old('seo_description_pt') ? old('seo_description_pt') : $successStory->{'seo_description:pt'} }}</textarea>
                                        </div>

                                        @if( !is_null($successStory->{'seo_image:pt'}) )
                                        <div class="form-group">
                                            <img src="{{ asset($successStory->{'seo_image:pt'}) }}" width="200">
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
                                <label for="solutions">Formatos relacionados</label>
                                <select class="form-control" name="solutions[]" id="solutions" multiple>
                                    @foreach($solutions as $solution)
                                    <option {{ (!is_null(old('solutions')) && in_array($solution->id, old('solutions'))) || $successStory->solutions->contains($solution) ? 'selected' : '' }} value="{{ $solution->id }}">{{ $solution->{'title:es'} }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="box-footer">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                            <a href="{{ route('success-stories.list') }}" class="btn btn-warning">Volver al listado</a>
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

        $('.summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
            focus: false,
            fontSizes: ['18', '29']
        });
    });
</script>
@endsection
