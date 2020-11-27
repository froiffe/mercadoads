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

@section('meta')
@if( !is_null($insight) )
<meta property="og:title" content="{{ $insight->seo_title }}" />
<meta property="og:image" content="{{ asset($insight->seo_image) }}" />
<meta property="og:description" content="{{ $insight->seo_description }}" />
@endif
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ Request::url() }}" />
@endsection

@section('content')
<main class="main-insights-detail"  data-scroll-section>



    <!-- <section class="section-insights-intro">
        <div class="wrap w-p125">
            <div class="area-txt">
                <h1 class="title">{{ trans('insights/general.title') }}</h1>
                <span class="line"></span>
                <p class="text">{{ trans('insights/general.description') }}</p>
            </div>
        </div>
    </section>

    @if( $highlightInsights->count() > 0 )
    <section class="section-insights-destacado-slider">
        <div class="wrap">
            <div class="insights-slider-container swiper-container">
                <ul class="insights-slider-wrapper swiper-wrapper">
                    @foreach($highlightInsights as $highlighInsight)
                    <li class="insight-slide case-01 swiper-slide">
                        <div class="area-txt">
                            <h2 class="title">{{ $highlighInsight->title }}</h2>
                            <span class="line"></span>
                            <div class="subtitle">{!! $highlighInsight->subtitle !!}</div>
                            <div class="text">{!! $highlighInsight->description !!}</div>
                            <a href="{{ url(trans('routes.insights.details') . $highlighInsight->slug) }}" class="btn vernota">{{ trans('insights/general.view-article') }}</a>
                            <span class="line vertical"></span>
                        </div>
                        <div class="area-img">
                            <img class="desktop" src="{{ asset($highlighInsight->desktop_banner_image) }}" alt="insights">
                            <img class="mobile" src="{{ asset($highlighInsight->mobile_banner_image) }}" alt="insights">
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    @endif

    @if( $insights->count() > 0 )
    <section class="section-insights-secondary">
        <div class="wrap w-p60">
            <div class="title-content">
                <h2 class="title">{{ trans('insights/general.list-title') }}</h2>
                <span class="line"></span>
            </div>
        </div>
        <div class="wrap">
            <div class="insights-content">
                @foreach($insights as $insight)
                <article class="insight {{ $insight->formatSize() }}">
                    <a href="{{ url(trans('routes.insights.details') . $insight->slug) }}">
                        <div class="area-img">
                            <img src="{{ asset($insight->image) }}" alt="{{ $insight->title }}">
                        </div>
                        <div class="area-txt">
                            <h3 class="fecha">{{ date('j', strtotime($insight->date)) }} de {{ $months[app()->getLocale()][date('n', strtotime($insight->date)) - 1] }}</h3>
                            <div class="text">{{ $insight->description_list }}<span class="arrow"></span></div>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif -->








    <section class="section-insights-interna">
        <div class="wrap">
            <article>
                <div class="area-txt">
                    <nav class="breadcrumb">
                        <ol class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('insights/general.breadcrumbs.level1') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ url(trans('routes.insights')) }}">{{ trans('insights/general.breadcrumbs.level1') }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">{{ $insight->title }}</a></li>
                        </ol>
                    </nav>
                    <div class="content-txt">
                        <h3 class="fecha">{{ date('j', strtotime($insight->date)) }} de {{ $months[app()->getLocale()][date('n', strtotime($insight->date)) - 1] }}</h3>
                        <h2 class="title">{{ $insight->title }}</h2>
                        <span class="line"></span>
                        <div class="text">{!! $insight->description !!}</div>
                    </div>
                </div>
                <div class="area-img">
                    <img class="desktop" src="{{ asset($insight->desktop_internal_image) }}" alt="insights">
                    <img class="mobile" src="{{ asset($insight->mobile_internal_image) }}" alt="insights">
                </div>
            </article>
        </div>
    </section>


    <section class="section-insights-content">
        <div class="wrap">
            <div class="insight-detalle">{!! $insight->content !!}</div>
        </div>
    </section>


    <section class="section-insights-secondary">
        <div class="wrap w-p60">
            <div class="title-content">
                <h2 class="title">{{ trans('insights/general.other-insights') }}</h2>
                <span class="line"></span>
            </div>
        </div>
        <div class="wrap">
            <div class="insights-content">
                @foreach($otherInsights as $otherInsight)
                <article class="insight medium">
                    <a href="{{ url(trans('routes.insights.details') . $otherInsight->slug) }}">
                        <div class="area-img">
                            <img src="{{ asset($otherInsight->image) }}" alt="{{ $otherInsight->title }}">
                        </div>
                        <div class="area-txt">
                            <h3 class="fecha">{{ date('j', strtotime($otherInsight->date)) }} de {{ $months[app()->getLocale()][date('n', strtotime($otherInsight->date)) - 1] }}</h3>
                            <p class="text">{{ $otherInsight->description_list }}<span class="arrow"></span></p>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
        </div>
    </section>

</main>
@endsection
