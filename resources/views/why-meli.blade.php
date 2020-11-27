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


<main class="main-nosotros"  data-scroll-section>

    <section class="section-nosotros-video">
        <div class="wrap">
            <div class="area-video">
                <div class="plyr__video-embed" id="player" poster="{{ asset(trans('why-meli/general.video-poster')) }}">
                    <iframe
                        src="{{ trans('why-meli/general.video-url') }}?vq=1080&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                        allowfullscreen
                        allowtransparency
                        allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
    </section>


    <div class="data-scroll-bloque-animacion" data-scroll>


        <section class="section-nosotros-porqueno">
            <div class="wrap">
                <div class="area-txt">
                    <h3 class="subtitle">{!! trans('why-meli/general.module1.subtitle') !!}</h3>
                    <h2 class="title">{!! trans('why-meli/general.module1.title') !!}</h2>
                    <span class="line"></span>
                    <p class="text">{!! trans('why-meli/general.module1.description') !!}</p>
                </div>
                <div class="area-img">
                    <img src="{{ asset(trans('why-meli/general.module1.video-url')) }}" alt="nosotros">
                    <!-- <video width="400" autoplay loop>
                        <source src="{{ asset(trans('why-meli/general.module1.video-url')) }}" type="video/mp4">
                    </video> -->
                </div>
            </div>
        </section>

        @if( app()->getLocale() == 'pt' )
            <section class="section-kantar">
                <div class="title-content">
                    <div class="area-img">
                        <img src="{{ asset(trans('why-meli/general.module5.img')) }}">
                    </div>
                    <div class="wrap">
                        <h2 class="title">{!! trans('why-meli/general.module5.title') !!}</h2>
                        <p class="text">{!! trans('why-meli/general.module5.description') !!}</p>
                        <span class="line"></span>
                    </div>
                </div>
            </section>
        @endif
        <section class="section-nosotros-razones">
            <div class="wrap">
                <div class="title-content">
                    <h2 class="title">{!! trans('why-meli/general.module2.title') !!}</h2>
                    <span class="line"></span>
                </div>
                <div class="razones-slider-container swiper-container">
                    <ul class="razones-slider-wrapper swiper-wrapper">
                        @foreach(trans('why-meli/general.module2.items') as $module2Item)
                        <li class="razones-slide swiper-slide">
                            <div class="area-img" data-scroll>
                                <!-- <img src="{{ asset($module2Item['image-url']) }}" alt="nosotros"> -->
                                <picture alt="Mercado Libre Why Meli">
                                    <source srcset="{{ asset($module2Item['image-url-webp']) }}" type="image/webp">
                                    <source srcset="{{ asset($module2Item['image-url']) }}" type="image/png">
                                    <img loading="lazy" alt="nosotros">
                                </picture>
                            </div>
                            <div class="area-txt">
                                <!-- <h2 class="title">{!! $module2Item['title'] !!}</h2> -->
                                <button class="accordion-btn">{!! $module2Item['title'] !!}
                                    <p class="icon">
                                        <span class="txt txt-vermas">{!! trans('why-meli/general.module2.view-more') !!}</span>
                                        <span class="txt txt-vermenos">{!! trans('why-meli/general.module2.view-less') !!}</span>
                                    </p>
                                </button>
                                <!-- <p class="text">{!! $module2Item['description'] !!}</p> -->
                                <div class="accordion-content">
                                    <p class="text">{!! $module2Item['description'] !!}</p>
                                </div>
                                @if( $module2Item['button'] )
                                <a href="{{ $module2Item['route-url'] }}" class="btn">{!! $module2Item['button'] !!}</a>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <section class="section-nosotros-brand data-scroll-bloque-animacion" data-scroll>
            <div class="wrap">
                <div class="cases-container">
                    <div class="area-txt" >
                        <div class="subtitle">{!! trans('why-meli/general.module3.subtitle') !!}</div>
                        <h2 class="title">{!! trans('why-meli/general.module3.title') !!}</h2>
                        <span class="line"></span>
                        <p class="text">{!! trans('why-meli/general.module3.description') !!}</p>
                    </div>
                    <div class="area-img" data-scroll>
                        <picture alt="Mercado Libre Why Meli" class="desktop">
                            <source srcset="{{ asset(trans('why-meli/general.module3.desktop-image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                            <source srcset="{{ asset(trans('why-meli/general.module3.desktop-image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                            <img loading="lazy" alt="nosotros">
                        </picture>
                        <picture alt="Mercado Libre Why Meli" class="mobile">
                            <source srcset="{{ asset(trans('why-meli/general.module3.mobile-image-url-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                            <source srcset="{{ asset(trans('why-meli/general.module3.mobile-image-url')) }}" type="image/jpg" media="(max-width: 1023px)">
                            <img loading="lazy" alt="nosotros">
                        </picture>
                        <!-- <img class="desktop" src="{{ asset(trans('why-meli/general.module3.desktop-image-url')) }}" alt="nosotros">
                        <img class="mobile" src="{{ asset(trans('why-meli/general.module3.mobile-image-url')) }}" alt="nosotros"> -->
                    </div>
                </div>
            </div>
        </section>




        <section class="section-nosotros-numeros" data-scroll>
            <div class="title-content">
                <div class="wrap">
                    <span class="line"></span>
                    <h2 class="title">{!! trans('why-meli/general.module4.title') !!}</h2>
                    <p class="text">{!! trans('why-meli/general.module4.description') !!}</p>
                </div>
            </div>
            <div class="numeros-slider-container swiper-container">
                    <ul class="numeros-slider-wrapper swiper-wrapper">
                        @foreach(trans('why-meli/general.module4.items') as $module4Item)
                        <li class="numero-slide swiper-slide">
                            <div class="area-img" data-scroll>
                                <img src="{{ asset($module4Item['image-url']) }}" alt="nosotros">
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="swiper-pagination"></div>
            </div>
        </section>


    </div>


</main>


@endsection
