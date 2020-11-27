@extends('layouts.master')

@php
    $months = [
        'es' => [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
        ],
        'pt' => [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ]
    ];
@endphp

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

    <section class="section-general-headers">
        <div class="area-txt" data-scroll>
            <h2 class="title">{!! trans('insights/general.header-title') !!}</h2>
        </div>
        <div class="area-img" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
            <picture alt="Mercado Libre Insights" class="desktop">
                <source srcset="{{ asset(trans('insights/general.header-image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                <source srcset="{{ asset(trans('insights/general.header-image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                <img loading="lazy" alt="potencia">
            </picture>
            <picture alt="Mercado Libre Insights" class="mobile">
                <source srcset="{{ asset(trans('insights/general.header-image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                <source srcset="{{ asset(trans('insights/general.header-image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                <img loading="lazy" alt="potencia">
            </picture>
        </div>
        <div class="area-button">
            <span class="icon"></span>
            <p class="text">{!! trans('insights/general.header-button-text') !!}</p>
        </div>
    </section>

    <!-- <section class="section-insights-intro">
        <div class="wrap w-p125">
            <div class="area-txt">
                <h1 class="title">{{ trans('insights/general.title') }}</h1>
                <span class="line"></span>
                <p class="text">{{ trans('insights/general.description') }}</p>
            </div>
        </div>
    </section> -->

    @if( count(trans('home/general.module7.items')) > 0 )

    <section class="section-insights-destacado-slider" data-scroll>
        <div class="insights-slider-container swiper-container">
            <ul class="insights-slider-wrapper swiper-wrapper">
                @foreach(trans('home/general.module7.items') as $highlighInsight)
                @if( $highlighInsight['is_highlight'] == 1 )
                <li class="insight-slide case-01 swiper-slide">
                    <div class="area-txt">
                        <h2 class="title">{{ $highlighInsight['title'] }}</h2>
                        <p class="text">{!! $highlighInsight['description'] !!}</p>
                        <a href="{{ url($highlighInsight['url']) }}" class="btn vernota">{{ trans('insights/general.view-article') }}</a>
                    </div>
                    <div class="area-img" data-scroll>
                        <picture alt="{{ $highlighInsight['title'] }}" class="desktop">
                            <source srcset="{{ asset($highlighInsight['desktop_banner_image-webp']) }}" type="image/webp" media="(min-width: 1024px)">
                            <source srcset="{{ asset($highlighInsight['desktop_banner_image']) }}" type="image/jpg" media="(min-width: 1024px)">
                            <img loading="lazy" alt="{{ $highlighInsight['title'] }}">
                        </picture>
                        <picture alt="{{ $highlighInsight['title'] }}" class="mobile">
                            <source srcset="{{ asset($highlighInsight['mobile_banner_image-webp']) }}" type="image/webp" media="(max-width: 1023px)">
                            <source srcset="{{ asset($highlighInsight['mobile_banner_image']) }}" type="image/jpg" media="(max-width: 1023px)">
                            <img loading="lazy" alt="{{ $highlighInsight['title'] }}">
                        </picture>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
    </section>

    @endif

    <div class="data-scroll-bloque-animacion" data-scroll>

    <!-- inicio carrusel --->
    <section class="section-insights-ultimos" data-scroll>
        <div class="wrap w-p60">
            <div class="title-content">
                <h2 class="title-insights">{{ trans('insights/general.reportes-industrias.title') }}</h2>
                <span class="line"></span>
            </div>
        </div>
        <div class="wrap">
            <div class="ultimos-slider-container swiper-container">
                <ul class="ultimos-slider-wrapper swiper-wrapper">
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.smartphones')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/img-destacado-700x250-2.png') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-smartphones') }} <span class="arrow"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.laptops')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/img-destacado-700x250-1.png') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-laptops') }}  <span class="arrow"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.cabello')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/papers-listado-cabello.jpg') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-cabello') }}  <span class="arrow"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.limpieza')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/papers-listado-limpieza.jpg') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-limpieza') }}  <span class="arrow"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.pañales')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/papers-listado-diaper.jpg') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-diaper') }}  <span class="arrow"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.electrodomesticos')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/papers-listado-peq-electro.jpg') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-electrodomesticos') }}  <span class="arrow"></span></p>
                            </div>
                        </a>
                    </li>
                    <li class="insights-slide swiper-slide">
                        <a href="{{ url(trans('routes.insights.tv')) }}">
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Insights">
                                    <img loading="lazy" alt="nosotros" src="{{ asset('assets/images/insights/papers-listado-tv.jpg') }}">
                                </picture>
                            </div>
                            <div class="area-text">
                                <p class="text">{{ trans('insights/general.reportes-industrias.paper-electrodomesticos') }}  <span class="arrow"></span></p>                            
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- fin carrusel --->
    <!-- <div class="data-scroll-bloque-animacion" data-scroll>

    </div> -->


        @include('insights.include-more-info')


    </div>
</main>



@endsection
