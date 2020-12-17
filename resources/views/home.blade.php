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
{{ (isset($page->seo_title)) ? $page->seo_title : ''}}
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

<div class="cookies-banner" id="cookies-banner">
    <div class="wrap text-content">
        <p class="text" data-scroll>{!! trans('home/general.cookie-banner.text') !!} <a href="{{ url(trans('home/general.cookie-banner.more-info-link')) }}" target="_blank" class="masifo">{!! trans('home/general.cookie-banner.more-info') !!}</a></p>
        <a href="#" onclick="document.getElementById('cookies-banner').remove()" class="accept">{!! trans('home/general.cookie-banner.accept-button') !!}</a>
    </div>
</div>

<main class="main-home" data-scroll-container>


        <section class="section-home" data-scroll-section>
            <div class="header-message">
                <p>{{trans('home/general.revive-premiacion')}}<a href="{!! url(trans('routes.landings.ganadores2020')) !!}">Mercado Ads</a></p>
            </div>
            <!-- <div class="wrap"  > -->
                <article class="section-general-headers">
                    <!-- <div class="area-img mujer desktop" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
                        <picture alt="Mercado Libre Home" class="desktop">
                            <source srcset="{{ asset(trans('home/general.module1.image-url-mujer-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                            <source srcset="{{ asset(trans('home/general.module1.image-url-mujer')) }}" type="image/png" media="(min-width: 1024px)">
                            <img loading="lazy" alt="potencia">
                        </picture>
                    </div> -->
                    <div class="area-txt" data-scroll>
                        <h2 class="title">{!! trans('home/general.module1.title') !!}</h2>
                    </div>
                    <div class="area-img" data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
                        <picture alt="Mercado Libre Home" class="desktop">
                            <source srcset="{{ asset(trans('home/general.module1.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                            <source srcset="{{ asset(trans('home/general.module1.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                            <img loading="lazy" alt="potencia">
                        </picture>
                        <picture alt="Mercado Libre Home" class="mobile">
                            <source srcset="{{ asset(trans('home/general.module1.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                            <source srcset="{{ asset(trans('home/general.module1.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                            <img loading="lazy" alt="potencia">
                        </picture>
                    </div>
                    <div class="area-button">
                        <span class="icon"></span>
                        <p class="text">{!! trans('home/general.module1.header-button-text') !!}</p>
                    </div>
                </article>

                <article class="article-audiencia" id="scroll-direction" >
                    <div data-scroll data-scroll-offset="20%">
                        <div class="area-img" data-scroll data-scroll-offset="20%" >
                            <picture alt="Mercado Libre Home" class="desktop">
                                <source srcset="{{ asset(trans('home/general.module2.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                                <source srcset="{{ asset(trans('home/general.module2.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                                <img loading="lazy" alt="audiencia">
                            </picture>
                            <picture alt="Mercado Libre Home" class="mobile">
                                <source srcset="{{ asset(trans('home/general.module2.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                                <source srcset="{{ asset(trans('home/general.module2.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                                <img loading="lazy" alt="audiencia">
                            </picture>
                            <!-- <img src="{{ asset(trans('home/general.module2.image-url')) }}" alt="audiencia" class="desktop">
                            <img src="{{ asset(trans('home/general.module2.image-url-mobile')) }}" alt="audiencia" class="mobile"> -->
                        </div>
                        <div class="area-txt" data-scroll data-scroll-offset="0">
                            <div class="content-txt" data-scroll data-scroll-offset="20%">
                                <!-- <div class="lines-animation" data-scroll>
                                    <span class="right"></span>
                                    <span class="top"></span>
                                    <span class="left"></span>
                                    <span class="bottom"></span>
                                </div> -->
                                <div class="content-txt-container" data-scroll>
                                    <div>
                                        <h3 class="subtitle">{!! trans('home/general.module2.subtitle') !!}</h3>
                                        <h2 class="title">{!! trans('home/general.module2.title') !!}</h2>
                                        <!-- <span data-scroll class="line"></span> -->
                                        <p class="bajada">{!! trans('home/general.module2.description') !!}</p>
                                    </div>
                                    <div class="frases-animadas-content" data-scroll >
                                        <h4 class="sabemos" >{!! trans('home/general.module2.we-know') !!}</h4>
                                        <ul class="frases-animadas">
                                            <li class="frase f-01"><h4>{!! trans('home/general.module2.phrase1') !!}</h4></li>
                                            <li class="frase f-02"><h4>{!! trans('home/general.module2.phrase2') !!}</h4></li>
                                            <li class="frase f-03"><h4>{!! trans('home/general.module2.phrase3') !!}</h4></li>
                                            <li class="frase f-04"><h4>{!! trans('home/general.module2.phrase4') !!}</h4></li>
                                        </ul>
                                    </div>
                                    <p class="text">{!! trans('home/general.module2.last-phrase') !!}</p>
                                    <a href="{{ url(trans('routes.audiences')) }}" class="btn vermas">{!! trans('home/general.module2.view-more') !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer s-1" data-scroll> </div>
                </article>

            <!-- </div> -->
        </section>




        <section class="section-consumer" data-scroll-section>
            <div class="wrap">

                <article class="consumer-article consumer-01" data-scroll>
                    <div class="area-txt">
                        <h3 class="subtitle">{!! trans('home/general.module3.subtitle') !!}</h3>
                        <h2 class="title">{!! trans('home/general.module3.title') !!}</h2>
                        <span class="line"></span>
                        <p class="text">{!! trans('home/general.module3.description') !!}</p>
                        @if (trans('home/general.module3.image-logo')!='')
                            <p class="button-text">{!! trans('home/general.module3.button-text') !!}</p>
                            <img src='{{ asset(trans('home/general.module3.image-logo')) }}'>
                        @endif
                    </div>
                    <div class="area-img" >
                        <picture alt="Mercado Libre Home">
                            <source srcset="{{ asset(trans('home/general.module3.image-url-webp')) }}" type="image/webp">
                            <source srcset="{{ asset(trans('home/general.module3.image-url')) }}" type="image/png">
                            <img loading="lazy" alt="solutions">
                        </picture>
                    </div>
                </article>

                <span class="line vertical-progress"></span>
                <div class="consumer-steps-content">


                    <article class="consumer-article |" data-scroll>
                        <div class="area-txt">
                            <h2 class="title">{!! trans('home/general.module4.title') !!}</h2>
                            <p class="text">{!! trans('home/general.module4.description') !!}</p>
                            <form action="{{ url(trans('routes.solutions.filtered')) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type-filtered" value="1">
                                <input class="btn vermas" type="submit" value="{!! trans('home/general.module4.button-text') !!}">
                            </form>
                        </div>
                        <div class="area-img">
                            <picture alt="Mercado Libre Home">
                                <source srcset="{{ asset(trans('home/general.module4.image-url-webp')) }}" type="image/webp">
                                <source srcset="{{ asset(trans('home/general.module4.image-url')) }}" type="image/png">
                                <img loading="lazy" alt="solutions">
                            </picture>
                        </div>
                    </article>
                    <article class="consumer-article consumer-03" data-scroll>
                        <div class="area-txt">
                            <h2 class="title">{!! trans('home/general.module5.title') !!}</h2>
                            <p class="text">{!! trans('home/general.module5.description') !!}</p>
                            <form action="{{ url(trans('routes.solutions.filtered')) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type-filtered" value="2">
                                <input class="btn vermas" type="submit" value="{!! trans('home/general.module5.button-text') !!}">
                            </form>
                        </div>
                        <div class="area-img" >
                            <picture alt="Mercado Libre Home">
                                <source srcset="{{ asset(trans('home/general.module5.image-url-webp')) }}" type="image/webp">
                                <source srcset="{{ asset(trans('home/general.module5.image-url')) }}" type="image/png">
                                <img loading="lazy" alt="solutions">
                            </picture>
                        </div>
                    </article>
                    <article class="consumer-article consumer-04" data-scroll>
                        <div class="area-txt">
                            <h2 class="title">{!! trans('home/general.module6.title') !!}</h2>
                            <p class="text">{!! trans('home/general.module6.description') !!}</p>
                            <form action="{{ url(trans('routes.solutions.filtered')) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type-filtered" value="3">
                                <input class="btn vermas" type="submit" value="{!! trans('home/general.module6.button-text')  !!}">
                            </form>
                        </div>
                        <div class="area-img" >
                            <picture alt="Mercado Libre Home">
                                <source srcset="{{ asset(trans('home/general.module6.image-url-webp')) }}" type="image/webp">
                                <source srcset="{{ asset(trans('home/general.module6.image-url')) }}" type="image/png">
                                <img loading="lazy" alt="solutions">
                            </picture>
                        </div>
                    </article>

                </div>

            </div>
        </section>



        @if( !is_null($successStory) )
        <section class="section-cases-slider" data-scroll-section>
            <div class="wrap">
                <div class="cases-slider-container swiper-container">
                    <ul class="cases-slider-wrapper swiper-wrapper">
                        <li class="case-slide swiper-slide" data-scroll>
                            <div class="area-txt">
                                <h3 class="subtitle">Casos de éxito</h3>
                                <h2 class="title">{{ $successStory->banner_home_title }}</h2>
                                <span data-scroll class="line"></span>
                                <!-- <h3 class="bajada">{{ $successStory->title }}</h3> -->
                                <div class="text">{!! $successStory->description !!}</div>
                                <a href="{{ url(trans('routes.success-stories.details') . $successStory->slug) }}" class="btn vermas">{{ trans('home/general.view-more') }}</a>
                                <!-- <span data-scroll class="line vertical"></span> -->
                                <a href="#player" class="btn play">{{ trans('success-stories/general.play-btn') }}</a>
                            </div>
                            <div class="area-video" data-scroll>
                                <div class="plyr__video-embed" id="player" poster="{{ asset($successStory->desktop_banner_image) }}">
                                    <iframe
                                        src="https://www.youtube.com/embed/BCgZTpqooT0?controls=0&vq=1080&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1?rel=0"
                                        allowfullscreen
                                        allowtransparency
                                        allow="autoplay"
                                        previewThumbnails="false">
                                    </iframe>
                                </div>
                            </div>
                            <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Home" class="desktop">
                                    <source srcset="{{ asset(trans('home/general.module8.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                                    <source srcset="{{ asset(trans('home/general.module8.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                                    <img loading="lazy" alt="potencia">
                                </picture>
                                <picture alt="Mercado Libre Home" class="mobile">
                                    <source srcset="{{ asset(trans('home/general.module8.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                                    <source srcset="{{ asset(trans('home/general.module8.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                                    <img loading="lazy" alt="potencia">
                                </picture>
                            </div>
                            <!-- <div class="area-img" data-scroll>
                                <picture alt="Mercado Libre Home">
                                    <source srcset="{{ asset(trans('home/general.module6.image-url-webp')) }}" type="image/webp">
                                    <source srcset="{{ asset(trans('home/general.module6.image-url')) }}" type="image/png">
                                    <img loading="lazy" alt="solutions">
                                </picture>
                            </div> -->
                            <!-- <div class="area-img" data-scroll>
                                <div class="plyr__video-embed" id="player" poster="{{ asset($successStory->desktop_banner_image) }}">
                                    <iframe
                                        src="https://www.youtube.com/embed/BCgZTpqooT0?controls=0&vq=1080&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1?rel=0"
                                        allowfullscreen
                                        allowtransparency
                                        allow="autoplay"
                                        previewThumbnails="false">
                                    </iframe>
                                </div>
                                <img class="desktop" src="{{ asset($successStory->desktop_banner_image) }}" alt="cases">
                                <img class="mobile" src="{{ asset($successStory->mobile_banner_image) }}" alt="cases">
                            </div> -->
                        </li>
                    </ul>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        @endif



        <section class="section-insights" data-scroll-section>
            <div class="wrap">
                <div class="title-content">
                    <h2 class="title">insights</h2>
                    <span data-scroll class="line"></span>
                </div>
                <div class="insights-slider-container swiper-container">
                    <ul class="insights-slider-wrapper swiper-wrapper">
                        @foreach(trans('home/general.module7.items') as $insight)
                        <li class="insights-slide swiper-slide">
                            <a href="{{ url($insight['url']) }}">
                                <div class="area-img" data-scroll>
                                    <picture alt="{!! $insight['title'] !!}">
                                        <source srcset="{{ asset($insight['image-url-webp']) }}" type="image/webp">
                                        <source srcset="{{ asset($insight['image-url']) }}" type="image/jpg">
                                        <img loading="lazy" alt="insight">
                                    </picture>
                                </div>
                                <div class="area-txt" >
                                    <!-- <h3 class="fecha"></h3> -->
                                    <p class="text">{!! $insight['title'] !!}<span class="arrow"></span></p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        {{-- <section class="section-insights" data-scroll-section>
            <div class="wrap">
                <article class="article-insight" id="scroll-direction" >
                    <div class="lines-animation" data-scroll>
                        <span class="right"></span>
                        <span class="top"></span>
                        <span class="left"></span>
                        <span class="bottom"></span>
                    </div>

                    <div>
                        <div class="area-img" data-scroll data-scroll-offset="20%">
                            <div class="content-img" >
                                <picture alt="Mercado Libre Home" class="desktop">
                                    <source srcset="{{ asset(trans('home/general.module7.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                                    <source srcset="{{ asset(trans('home/general.module7.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                                    <img loading="lazy" alt="insight">
                                </picture>
                                <picture alt="Mercado Libre Home" class="mobile">
                                    <source srcset="{{ asset(trans('home/general.module7.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                                    <source srcset="{{ asset(trans('home/general.module7.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                                    <img loading="lazy" alt="insight">
                                </picture>
                                <!-- <img src="{{ asset(trans('home/general.module7.image-url')) }}" alt="insight" class="desktop">
                                <img src="{{ asset(trans('home/general.module7.image-url-mobile')) }}" alt="insight" class="mobile"> -->
                            </div>
                        </div>
                        <div class="area-txt" data-scroll data-scroll-offset="0">
                            <div class="content-txt" data-scroll data-scroll-offset="20%">
                                <div class="content-txt-container" data-scroll>
                                    <div>
                                        <h3 class="subtitle">{!! trans('home/general.module7.subtitle') !!}</h3>
                                        <h2 class="title">{!! trans('home/general.module7.title') !!}</h2>
                                        <span data-scroll class="line"></span>
                                        <p class="bajada">{!! trans('home/general.module7.description') !!}</p>
                                    </div>
                                    <a href="{{ url(trans('routes.insights.trends')) }}" class="btn vermas">{!! trans('home/general.module7.view-more') !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer s-1" data-scroll> </div>
                </article>
            </div>
        </section> --}}




        <section class="section-brand-partners" data-scroll-section>
            <div class="wrap w-p125">
                <div class="title-content">
                    <h2 class="title">{{ trans('home/general.brands.title') }}</h2>
                    <span data-scroll class="line"></span>
                </div>
                <p class="text">{{ trans('home/general.brands.description') }}</p>

                <div class="brand-slider-container swiper-container">
                    <ul class="brand-slider-wrapper swiper-wrapper">
                        @foreach(trans('home/general.brands.categories') as $category)
                            @foreach($category['images'] as $image)
                            <li class="brand-slide swiper-slide" data-type="{{ $category['title'] }}">
                                <img  data-src="{{ asset($image) }}" alt="brand"  class="swiper-lazy">
                                <div class="swiper-lazy-preloader"></div>
                            </li>
                            @endforeach
                        @endforeach
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="category">Bancos / Automotrices</div>
            </div>
        </section>


</main>
@endsection
