@extends('layouts.master')

@section('title')
{{ $page->seo_title }}
@endsection

@section('meta')
@if( !is_null($page) )
<meta name="title" content="{{ $page->seo_title }}" />
<meta name="description" content="{{ $page->seo_description }}" />
<meta property="image" content="{{ asset($page->seo_image) }}" />

<meta property="og:title" content="{{ $page->seo_ogtitle }}" />
<meta property="og:description" content="{{ $page->seo_ogdescription }}" />
@endif
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ Request::url() }}" />
@endsection

@section('content')

<main class="main-solutions"  data-scroll-section>

    <section class="section-general-headers">
        <div class="area-txt" data-scroll>
            <h2 class="title">{!! trans('solutions/general.title') !!}</h2>
        </div>
        <div class="area-img" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
            <picture alt="Mercado Libre solutions" class="desktop">
                <source srcset="{{ asset(trans('solutions/general.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                <source srcset="{{ asset(trans('solutions/general.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                <img loading="lazy" alt="potencia">
            </picture>
            <picture alt="Mercado Libre solutions" class="mobile">
                <source srcset="{{ asset(trans('solutions/general.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                <source srcset="{{ asset(trans('solutions/general.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                <img loading="lazy" alt="potencia">
            </picture>
        </div>
        <div class="area-button">
            <span class="icon"></span>
            <p class="text">{!! trans('solutions/general.header-button-text') !!}</p>
        </div>
    </section>



    <section class="section-formatos-intro">
        <div class="wrap w-p125">
            <!-- <div class="area-txt">
                <div class="content-txt-container" data-scroll>
                    <div>
                        <h1 class="title">{{ trans('solutions/general.title') }}</h1>
                        <span class="line"></span>
                        <p class="text">{{ trans('solutions/general.description') }}</p>
                    </div>
                </div>
            </div> -->
            <div class="filter-content" data-scroll>
                <p class="text">{{ trans('solutions/general.filter') }}</p>
                <form class="filter-form" action="{{ route('change-language') }}" method="POST">
                    <input type="hidden" id="type-filtered" value="{{ !is_null($typeSelected) ? $typeSelected->id : '' }}">
                    <input type="hidden" id="category" value="{{ !is_null($category) ? $category : '' }}">
                    <select name="filter" id="filter" class="filter custom-select sources" data-url="{{ url(trans('routes.solutions.filter')) }}">
                        <option value="" selected>{{ trans('solutions/general.filter-all') }}</option>
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ trans('solutions/general.filters')[$type->name] }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </section>

    <section class="section-formatos">

        @foreach($formats as $format)
        @if( (app()->getLocale() == 'es' && $format->{'title:es'}) || (app()->getLocale() == 'pt' && $format->{'title:pt'}) )
        <article class="formato-content" data-scroll data-scroll-position="bottom" data-scroll-offset="20%">
            <div class="wrap w-p125">
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
                <div class="area-text">
                    <h2 class="title">{{ $format->title }}</h2>
                    <div class="subtitle">{!! $format->description !!}</div>
                    <a href="{{ url(trans('routes.solutions.details') . $format->slug) }}" class="btn verdetalle">{{ trans('solutions/general.details') }}</a>
                </div>
                <div class="area-img" data-scroll>
                    {{-- video --}}
                    @if( !is_null($format->video_desktop) )
                    <video class="desktop" muted playsinline style="{{ $format->image_default == 'desktop' ? 'display:block' : 'display:none' }}">
                        <source src="{{ asset($format->video_desktop) }}" type="video/mp4">
                    </video>
                    @endif
                    @if( !is_null($format->video_webmobile) )
                    <video class="webmobile" muted playsinline style="{{ $format->image_default == 'webmobile' ? 'display:block' : 'display:none' }}">
                        <source src="{{ asset($format->video_webmobile) }}" type="video/mp4">
                    </video>
                    @endif
                    @if( !is_null($format->video_app) )
                    <video class="app" muted playsinline style="{{ $format->image_default == 'app' ? 'display:block' : 'display:none' }}">
                        <source src="{{ asset($format->video_app) }}" type="video/mp4">
                    </video>
                    @endif

                    {{-- images --}}
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
            </div>
        </article>
        @endif
        @endforeach

    </section>


</main>

@endsection
