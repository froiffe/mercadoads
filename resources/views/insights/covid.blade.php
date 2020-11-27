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


<main class="main-insights"  data-scroll-section>


    <section class="section-insights-intro">
        <div class="wrap">
            <div class="area-txt" data-scroll >
                <h2 class="title">{!! trans('insights-covid/general.title') !!}</h2>
            </div>
            <div class="area-img" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
                <picture alt="Mercado Libre Insights" class="desktop">
                    <source srcset="{{ asset(trans('insights-covid/general.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                    <source srcset="{{ asset(trans('insights-covid/general.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                    <img loading="lazy" alt="insights">
                </picture>
                <picture alt="Mercado Libre Insights" class="mobile">
                    <source srcset="{{ asset(trans('insights-covid/general.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                    <source srcset="{{ asset(trans('insights-covid/general.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                    <img loading="lazy" alt="insights">
                </picture>
            </div>
        </div>
    </section>


    <section class="section-insights-content" data-scroll>
        <div class="wrap w-p125">
            <div class="area-txt">
                <p class="text text-highlight" data-scroll>{!! trans('insights-covid/general.description') !!}</p>

                <p class="text" data-scroll>{!! trans('insights-covid/general.phrase-1') !!}</p>
                <p class="text" data-scroll>{!! trans('insights-covid/general.description-content-1') !!}</p>
                <p class="text" data-scroll>{!! trans('insights-covid/general.description-content-2') !!}</p>
                <ul class="text-list" data-scroll>
                    <li data-scroll><p class="text">{!! trans('insights-covid/general.items-content-2.item-1') !!}</p></li>
                    <li data-scroll><p class="text">{!! trans('insights-covid/general.items-content-2.item-2') !!}</p></li>
                    <li data-scroll><p class="text">{!! trans('insights-covid/general.items-content-2.item-3') !!}</p></li>
                </ul>

                <div class="descarga-content" data-scroll style="display:block">
                    <p class="text" data-scroll>{!! trans('insights-covid/general.descarga-content.phrase') !!}</p>
                    <ul class="campo-list">
                        <li class="campo-item">
                            <div class="campo">
                                <a href="{{ url(trans('insights-covid/general.descarga-content.link-reporte')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights-covid/general.descarga-content.download-reporte') !!}</a>
                            </div>
                            <!-- <div class="campo">
                                <label class="radio-btn">{!! trans('insights-covid/general.descarga-content.language-es') !!}
                                    <input type="radio" checked="checked" name="radio" value="es">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="campo">
                                <label class="radio-btn">{!! trans('insights-covid/general.descarga-content.language-en') !!}
                                    <input type="radio" name="radio" value="en">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                        </li>
                        <!-- <li class="campo-item">
                            <div class="campo es">
                                <a href="{{ url(trans('insights-covid/general.descarga-content.link-mobile-es')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights-covid/general.descarga-content.download-mobile') !!}</a>
                            </div>

                            <div class="campo es">
                                <a href="{{ url(trans('insights-covid/general.descarga-content.link-desktop-es')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights-covid/general.descarga-content.download-desktop') !!}</a>
                            </div>

                            <div class="campo en">
                                <a href="{{ url(trans('insights-covid/general.descarga-content.link-mobile-en')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights-covid/general.descarga-content.download-mobile') !!}</a>
                            </div>

                            <div class="campo en">
                                <a href="{{ url(trans('insights-covid/general.descarga-content.link-desktop-en')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights-covid/general.descarga-content.download-desktop') !!}</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('insights.include-more-info')

</main>



@endsection
