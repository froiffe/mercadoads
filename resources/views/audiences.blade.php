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

<main class="main-audiencias"  data-scroll-section>


    <section class="section-general-headers">
        <div class="area-txt" data-scroll>
            <h2 class="title">{!! trans('audiences/general.module1.title') !!}</h2>
        </div>
        <div class="area-img" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
            <picture alt="Mercado Libre audiences" class="desktop">
                <source srcset="{{ asset(trans('audiences/general.module1.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                <source srcset="{{ asset(trans('audiences/general.module1.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                <img loading="lazy" alt="potencia">
            </picture>
            <picture alt="Mercado Libre audiences" class="mobile">
                <source srcset="{{ asset(trans('audiences/general.module1.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                <source srcset="{{ asset(trans('audiences/general.module1.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                <img loading="lazy" alt="potencia">
            </picture>
        </div>
        <div class="area-button">
            <span class="icon"></span>
            <p class="text">{!! trans('audiences/general.module1.header-button-text') !!}</p>
        </div>
    </section>



    <div class="data-scroll-bloque-animacion" data-scroll>


        <section class="section-audiencias-segmentacion">
            <div class="wrap">
                <article>
                    <div class="area-txt">
                        <div class="content-txt">
                            <!-- <div class="lines-animation" data-scroll>
                                <span class="right"></span>
                                <span class="top"></span>
                                <span class="left"></span>
                                <span class="bottom"></span>
                            </div> -->
                            <h2 class="title">{!! trans('audiences/general.module2.title') !!}</h2>
                            <span class="line" data-scroll></span>
                            <p class="text">{!! trans('audiences/general.module2.description') !!}</p>
                        </div>
                    </div>
                    <div class="area-img" data-scroll>
                        <!-- <img src="{{ asset('assets/images/audiencias/audiencias-02.jpg') }}" alt="audiencias"> -->
                        <picture alt="Mercado Libre Audiencias">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-02.webp') }}" type="image/webp">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-02.jpg') }}" type="image/jpg">
                            <img loading="lazy" alt="audiencias">
                        </picture>
                    </div>
                </article>

                <div class="segmentacion-options">
                    <div class="segmentacion-content small">
                        <button class="accordion-btn active">{!! trans('audiences/general.behavioral-targeting.title') !!}
                            <p class="icon">
                                <span class="txt txt-vermas">{!! trans('audiences/general.behavioral-targeting.view-more') !!}</span>
                                <span class="txt txt-vermenos">{!! trans('audiences/general.behavioral-targeting.view-less') !!}</span>
                            </p>
                        </button>
                        <div class="accordion-content" style="max-height: initial;">
                            <ul class="segmentacion-list">
                                @foreach(trans('audiences/general.behavioral-targeting.items') as $behavioralTargetingItem)
                                <li class="segmentacion-item">
                                    <p>{{ $behavioralTargetingItem }}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="segmentacion-content small">
                        <button class="accordion-btn active">{!! trans('audiences/general.audience-profiles.title') !!}
                            <p class="icon">
                                <span class="txt txt-vermas">{!! trans('audiences/general.audience-profiles.view-more') !!}</span>
                                <span class="txt txt-vermenos">{!! trans('audiences/general.audience-profiles.view-less') !!}</span>
                            </p>
                        </button>
                        <div class="accordion-content" style="max-height: initial;">
                            <ul class="segmentacion-list">
                                @foreach(trans('audiences/general.audience-profiles.items') as $audienceProfilesItem)
                                <li class="segmentacion-item">
                                    <p>{{ $audienceProfilesItem }}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="segmentacion-content big">
                        <button class="accordion-btn active">{!! trans('audiences/general.lifestyle.title') !!}
                            <p class="icon">
                                <span class="txt txt-vermas">{!! trans('audiences/general.lifestyle.view-more') !!}</span>
                                <span class="txt txt-vermenos">{!! trans('audiences/general.lifestyle.view-less') !!}</span>
                            </p>
                        </button>
                        <div class="accordion-content" style="max-height: initial;">
                            <ul class="segmentacion-list">
                                @foreach(trans('audiences/general.lifestyle.items') as $lifestyleItem)
                                <li class="segmentacion-item">
                                    <p>{{ $lifestyleItem }}</p>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        


        <section class="section-audiencias-video" >
            <div class="area-video" data-scroll>
                <video id="vid"  loop muted playsinline data-poster="{{ asset(trans('audiences/general.module3.video-poster')) }}" data-poster-mobile="{{ asset(trans('audiences/general.module3.video-poster-mobile')) }}" poster="{{ asset(trans('audiences/general.module3.video-poster-mobile')) }}">
                    <source id="hvid" data-src="{{ trans('audiences/general.module3.video-url') }}" data-src-mobile="{{ trans('audiences/general.module3.video-url-mobile') }}" src="{{ trans('audiences/general.module3.video-url-mobile') }}" type="video/mp4">
                </video>
            </div>
        </section>
        


        <!-- <section class="section-audiencias-consumidor" data-scroll>
            <div class="wrap">
            <div data-scroll data-scroll-sticky data-scroll-target=".section-audiencias-consumidor">
                <div class="area-txt">
                    <h2 class="title">{!! trans('audiences/general.module3.title') !!}</h2>
                    <span class="line"></span>
                    <p class="subtitle">{!! trans('audiences/general.module3.description') !!}</p>
                </div>
                <div class="area-img" data-scroll>
                    <article>
                        <h4>{!! trans('audiences/general.module3.animation-title') !!}</h4>
                        <picture alt="Mercado Libre Audiencias">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-01.webp') }}" type="image/webp">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-01.jpg') }}" type="image/jpg">
                            <img loading="lazy" alt="audiencias">
                        </picture>
                        <div class="line"></div>
                        <div class="circle"></div>
                    </article>
                    <article>
                        <div class="circle"></div>
                        <div class="border"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"><circle class="progress-ring__circle" stroke="red" stroke-width="4" fill="transparent" r="52" cx="60" cy="60"></circle></svg></div>
                        <div class="border"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"><circle class="progress-ring__circle" stroke="red" stroke-width="4" fill="transparent" r="52" cx="60" cy="60"></circle></svg></div>
                        <div class="line"></div>
                        <picture alt="Mercado Libre Audiencias">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-02.webp') }}" type="image/webp">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-02.jpg') }}" type="image/jpg">
                            <img loading="lazy" alt="audiencias">
                        </picture>
                        <p class="title-1">{!! trans('audiences/general.module3.animation-text-01') !!}</p>
                        <p class="title-2">{!! trans('audiences/general.module3.animation-text-02') !!}</p>
                        <div class="border-text"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"><circle class="progress-ring__circle" stroke="red" stroke-width="4" fill="transparent" r="52" cx="60" cy="60"></circle></svg></div>
                    </article>
                    <article>
                        <div class="circle"></div>
                        <div class="border"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"> <circle class="progress-ring__circle"  fill="transparent" r="52" cx="60" cy="60"></circle> </svg></div>
                        <div class="border"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"> <circle class="progress-ring__circle"  fill="transparent" r="52" cx="60" cy="60"></circle> </svg></div>
                        <div class="line"></div>
                        <picture alt="Mercado Libre Audiencias">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-03.webp') }}" type="image/webp">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-03.jpg') }}" type="image/jpg">
                            <img loading="lazy" alt="audiencias">
                        </picture>
                        <p class="title-1">{!! trans('audiences/general.module3.animation-text-03') !!}</p>
                        <p class="title-2">{!! trans('audiences/general.module3.animation-text-04') !!}</p>
                        <div class="border-text"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"> <circle class="progress-ring__circle" stroke="red" stroke-width="4" fill="transparent" r="52" cx="60" cy="60"></circle> </svg></div>
                    </article>
                    <article>
                        <div class="circle"></div>
                        <div class="border"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"> <circle class="progress-ring__circle"  fill="transparent" r="52" cx="60" cy="60"></circle> </svg></div>
                        <div class="border"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"> <circle class="progress-ring__circle"  fill="transparent" r="52" cx="60" cy="60"></circle> </svg></div>
                        <div class="line"></div>
                        <picture alt="Mercado Libre Audiencias">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-04.webp') }}" type="image/webp">
                            <source srcset="{{ asset('assets/images/audiencias/audiencias-consumidor-04.jpg') }}" type="image/jpg">
                            <img loading="lazy" alt="audiencias">
                        </picture>
                        <p class="title-1">{!! trans('audiences/general.module3.animation-text-05') !!}</p>
                        <p class="title-2">{!! trans('audiences/general.module3.animation-text-06') !!}</p>
                        <div class="border-text"><svg class="progress-ring" width="120" height="120" viewBox="0 0 120 120"> <circle class="progress-ring__circle"  fill="transparent" r="52" cx="60" cy="60"></circle> </svg></div>
                    </article>
                </div>
            </div>
            </div>
            <div class="spacer s-12" data-scroll data-scroll-repeat="true"> </div>
        </section> -->


        <section class="section-audiencias-extended" data-scroll>
            <div class="wrap">
                <article>
                    <div class="area-txt">
                        <h3 class="subtitle">{!! trans('audiences/general.module4.subtitle') !!}</h3>
                        <h2 class="title">{!! trans('audiences/general.module4.title') !!}</h2>
                        <span class="line"></span>
                        <p class="text">{!! trans('audiences/general.module4.description') !!}</p>
                    </div>
                    <div class="area-img" data-scroll>
                        <picture alt="Mercado Libre Audiencias">
                            <source srcset="{!! trans('audiences/general.module4.image-url') !!}" type="image/webp">
                            <source srcset="{!! trans('audiences/general.module4.image-url-webp') !!}" type="image/jpg">
                            <img loading="lazy" alt="audiencias">
                        </picture>
                    </div>
                </article>
            </div>
        </section>


        <section class="section-audiencias-como" data-scroll>
            <div class="wrap w-p60">
                <div class="title-content">
                    <h2 class="title">{!! trans('audiences/general.module5.title') !!}</h2>
                    <span class="line"></span>
                </div>
                <div class="steps-slider-container swiper-container">
                    <ol class="steps-slider-wrapper swiper-wrapper">
                        @foreach(trans('audiences/general.module5.items') as $item)
                        <li class="step-slide swiper-slide" data-scroll>
                            <div class="area-img" data-scroll>
                                <div class="mask-img">
                                    <!-- <img src="{{ asset($item['image-url']) }}" alt="audiencias"> -->
                                    <picture alt="Mercado Libre Audiencias">
                                        <source srcset="{{ asset($item['image-url-webp']) }}" type="image/webp">
                                        <source srcset="{{ asset($item['image-url']) }}" type="image/png">
                                        <img loading="lazy" alt="audiencias">
                                    </picture>
                                </div>
                            </div>
                            <div class="area-txt">
                                <p class="text">{!! $item['text'] !!}</p>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>


        <!-- <section class="section-audiencias-boton">
            <div class="wrap w-p60">
                <a href="{{ url(trans('routes.why-meli')) }}" class="change-section">
                    <div class="text">
                        <p>{!! trans('audiences/general.end-section') !!}</p>
                    </div>
                    <span class="arrow"></span>
                </a>
            </div>
        </section> -->


    </div>


</main>

@endsection
