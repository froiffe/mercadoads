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

    <section class="section-insights-intro">
        <div class="wrap">
            <div class="area-txt" data-scroll >
                <h2 class="title">{!! trans('insights/general.title') !!}</h2>
            </div>
            <div class="area-img" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
                <picture alt="Mercado Libre Insights" class="desktop">
                    <source srcset="{{ asset(trans('insights/general.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                    <source srcset="{{ asset(trans('insights/general.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                    <img loading="lazy" alt="insights">
                </picture>
                <picture alt="Mercado Libre Insights" class="mobile">
                    <source srcset="{{ asset(trans('insights/general.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                    <source srcset="{{ asset(trans('insights/general.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                    <img loading="lazy" alt="insights">
                </picture>
            </div>
        </div>
    </section>


    <section class="section-insights-content" data-scroll>
        <div class="wrap w-p125">
            <div class="area-txt">
                <p class="text text-highlight" data-scroll>{!! trans('insights/general.description') !!}</p>

                <h2 class="title" data-scroll>{!! trans('insights/general.title-content') !!}</h2>
                <span class="line" data-scroll></span>
                <p class="text" data-scroll>{!! trans('insights/general.phrase-1') !!}</p>
                <p class="text" data-scroll>{!! trans('insights/general.phrase-2') !!}</p>
                <h3 class="subtitle" data-scroll>{!! trans('insights/general.subtitle-content-1') !!}</h3>
                <p class="text" data-scroll>{!! trans('insights/general.description-content-1') !!}</p>
                <h3 class="subtitle" data-scroll>{!! trans('insights/general.subtitle-content-2') !!}</h3>
                <p class="text" data-scroll>{!! trans('insights/general.description-content-2') !!}</p>
                <h3 class="subtitle" data-scroll>{!! trans('insights/general.subtitle-content-3') !!}</h3>
                <p class="text" data-scroll>{!! trans('insights/general.description-content-3') !!}</p>

                <div class="form-content" data-scroll>
                    <div class="loader">
                        <div class="sk-chase">
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                        </div>
                    </div>
                    <p class="text" data-scroll>{!! trans('insights/general.form-content.phrase') !!}</p>
                    <form id="insights-contact" action="{{ url(trans('routes.insights.save-contact')) }}" method="POST">
                        <input type="hidden" id="form" value="trends">
                        <div class="campo">
                            <input type="email" id="email" placeholder="{{ trans('insights/general.form-content.email') }}*" required>
                        </div>
                        <input class="btn enviar" type="submit" value="{{ trans('insights/general.form-content.send') }}">
                    </form>
                </div>

                <div class="descarga-content" data-scroll>
                    <p class="text" data-scroll>{!! trans('insights/general.descarga-content.phrase') !!}</p>
                    <ul class="campo-list">
                        <li class="campo-item">
                            <div class="campo">
                                <label class="radio-btn">{!! trans('insights/general.descarga-content.language-es') !!}
                                    <input type="radio" checked="checked" name="radio" value="es">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="campo">
                                <label class="radio-btn">{!! trans('insights/general.descarga-content.language-en') !!}
                                    <input type="radio" name="radio" value="en">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </li>
                        <li class="campo-item">
                            <div class="campo es">
                                <a href="{{ url(trans('insights/general.descarga-content.link-mobile-es')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights/general.descarga-content.download-mobile') !!}</a>
                            </div>

                            <div class="campo es">
                                <a href="{{ url(trans('insights/general.descarga-content.link-desktop-es')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights/general.descarga-content.download-desktop') !!}</a>
                            </div>

                            <div class="campo en">
                                <a href="{{ url(trans('insights/general.descarga-content.link-mobile-en')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights/general.descarga-content.download-mobile') !!}</a>
                            </div>

                            <div class="campo en">
                                <a href="{{ url(trans('insights/general.descarga-content.link-desktop-en')) }}" target="_blank" class="link"><span class="icon"></span>{!! trans('insights/general.descarga-content.download-desktop') !!}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('insights.include-more-info')

</main>



@endsection
