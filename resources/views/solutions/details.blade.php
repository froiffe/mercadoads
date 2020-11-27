@extends('layouts.master')

@section('title')
{{ $format->seo_title }}
@endsection

@section('meta')
@if( !is_null($format) )
<meta name="title" content="{{ $format->seo_title }}" />
<meta name="description" content="{{ $format->seo_description }}" />
<meta property="image" content="{{ asset($format->seo_image) }}" />

<meta property="og:title" content="{{ $format->seo_title }}" />
<meta property="og:image" content="{{ asset($format->seo_image) }}" />
<meta property="og:description" content="{{ $format->seo_description }}" />
@endif
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ Request::url() }}" />
@endsection

@section('content')

<main class="main-solutions-detail" data-scroll-section>

    <section class="section-formato-detalle">
        <div class="formato-detalle-header">
            <div class="wrap w-p125">
                <div class="content-txt-container" data-scroll>
                    <nav class="breadcrumb">
                        <ol class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('solutions/general.breadcrumbs.level1') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ url(trans('routes.solutions')) }}">{{ trans('solutions/general.breadcrumbs.level2') }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">{{ $format->title }}</a></li>
                        </ol>
                    </nav>
                    <div class="area-title">
                        <h1 class="title">{{ $format->title }}</h1>
                        <span class="line"></span>
                        <h2 class="subtitle">{{ $format->subtitle }}</h2>
                        <div class="text">{!! $format->description !!}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap">
            <div class="formatos-filter">
                <ul class="formatos-filter-list">
                    @if( !is_null($format->image_desktop) || !is_null($format->video_desktop) )
                    <li class="formato-item {{ $format->image_default == 'desktop' ? 'active' : '' }}">
                        <a href="#" class="desktop">desktop</a>
                    </li>
                    @endif
                    @if( !is_null($format->image_webmobile) || !is_null($format->video_webmobile) )
                    <li class="formato-item {{ $format->image_default == 'webmobile' ? 'active' : '' }}">
                        <a href="#" class="webmobile">webmobile</a>
                    </li>
                    @endif
                    @if( !is_null($format->image_app) || !is_null($format->video_app) )
                    <li class="formato-item {{ $format->image_default == 'app' ? 'active' : '' }}">
                        <a href="#" class="app">app</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="formato-detalle" data-scroll data-scroll-offset="40%">
                <div class="area-img">
                    {{-- video --}}
                    @if( !is_null($format->video_desktop) )
                    <video class="desktop" autoplay loop muted playsinline style="{{ $format->image_default == 'desktop' ? 'display:block' : 'display:none' }}">
                        <source src="{{ asset($format->video_desktop) }}" type="video/mp4">
                    </video>
                    @endif
                    @if( !is_null($format->video_webmobile) )
                    <video class="webmobile" autoplay loop muted playsinline style="{{ $format->image_default == 'webmobile' ? 'display:block' : 'display:none' }}">
                        <source src="{{ asset($format->video_webmobile) }}" type="video/mp4">
                    </video>
                    @endif
                    @if( !is_null($format->video_app) )
                    <video class="app" autoplay loop muted playsinline style="{{ $format->image_default == 'app' ? 'display:block' : 'display:none' }}">
                        <source src="{{ asset($format->video_app) }}" type="video/mp4">
                    </video>
                    @endif

                    {{-- image --}}
                    @if( !is_null($format->image_desktop) )
                    <img class="desktop" src="{{ asset($format->image_desktop) }}" alt="{{ $format->title }}_desktop" style="{{ $format->image_default == 'desktop' ? 'display:block' : 'display:none' }}">
                    @endif
                    @if( !is_null($format->image_webmobile) )
                    <img class="webmobile" src="{{ asset($format->image_webmobile) }}" alt="{{ $format->title }}_webmobile" style="{{ $format->image_default == 'webmobile' ? 'display:block' : 'display:none' }}">
                    @endif
                    @if( !is_null($format->image_app) )
                    <img class="app" src="{{ asset($format->image_app) }}" alt="{{ $format->title }}_app" style="{{ $format->image_default == 'app' ? 'display:block' : 'display:none' }}">
                    @endif
                </div>
                <div class="area-text">
                    @if( $format->characteristics()->count() > 0 )
                    <ul class="caracteristics-list">
                        @foreach($format->characteristics()->orderBy('position', 'ASC')->get() as $characteristic)
                        <li class="caracteristic-item">
                            <div class="icon">
                                <img src="{{ asset($characteristic->image) }}" alt="icon">
                            </div>
                            <div class="text-content">
                                <h4 class="title">{{ $characteristic->title }}</h4>
                                <div class="text">{!! $characteristic->description !!}</div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <div class="caracteristics-txt">{!! $format->characteristics_text !!}</div>
                    @endif
                </div>
            </div>
            <div class="btns-content" data-scroll>
                @if( !is_null($format->specs_file) )
                <a href="{{ asset($format->specs_file) }}" class="btn center descargar">{{ trans('solutions/general.download-specs') }}</a>
                @endif
                <a href="{{ asset(trans('solutions/general.download-mediakit-url')) }}" class="btn center descargar" target="_blank">{{ trans('solutions/general.download-mediakit') }}</a>
                <a href="{{ url(trans('routes.contact')) }}" class="btn center descargar">{{ trans('solutions/general.btn-contacto') }}</a>
            </div>
        </div>

    </section>

    @if( $format->solutionsRelated()->count() > 0 )
    <section class="section-formato-relacionados" data-scroll>
        <div class="wrap w-p60">
            <div class="relacionados-content">
                <!-- <div class="lines-animation" data-scroll>
                    <span class="right"></span>
                    <span class="top"></span>
                    <span class="left"></span>
                    <span class="bottom"></span>
                </div> -->
                <div class="title-content">
                    <h2 class="title">{{ trans('solutions/general.related-formats') }}</h2>
                    <span class="line"></span>
                </div>
                <div class="formato-relacionados-container swiper-container">
                    <ul class="formato-relacionados-wrapper swiper-wrapper">
                        @foreach($format->solutionsRelated()->get() as $relatedFormat)
                        <li class="formato-relacionados-slide swiper-slide">
                            <a href="{{ url(trans('routes.solutions.details') . $relatedFormat->slug) }}">
                                <div class="area-img">
                                    <img src="{{ asset($relatedFormat->image) }}" alt="{{ $relatedFormat->title }}">
                                </div>
                                <div class="area-text">
                                    <h4 class="title">{{ $relatedFormat->title }}</h4>
                                    <div class="text">{!! $relatedFormat->description_list !!}</div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <a href="{{ url(trans('routes.solutions')) }}" class="btn center formatos">{{ trans('solutions/general.see-all-formats') }}</a>
            </div>
        </div>
    </section>
    @endif

</main>

@endsection
