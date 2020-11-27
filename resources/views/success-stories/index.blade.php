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
<main class="main-casos-exito"  data-scroll-section>


    <section class="section-general-headers">
        <div class="area-txt" data-scroll>
            <h2 class="title">{!! trans('success-stories/general.title') !!}</h2>
        </div>
        <div class="area-img" data-scroll data-scroll data-scroll-delay="0" data-scroll-speed="1" data-scroll-offset="0">
            <picture alt="Mercado Libre Casos de Exito" class="desktop">
                <source srcset="{{ asset(trans('success-stories/general.image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                <source srcset="{{ asset(trans('success-stories/general.image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                <img loading="lazy" alt="potencia">
            </picture>
            <picture alt="Mercado Libre Casos de Exito" class="mobile">
                <source srcset="{{ asset(trans('success-stories/general.image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                <source srcset="{{ asset(trans('success-stories/general.image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                <img loading="lazy" alt="potencia">
            </picture>
        </div>
        <div class="area-button">
            <span class="icon"></span>
            <p class="text">{!! trans('success-stories/general.header-button-text') !!}</p>
        </div>
    </section>



    <!-- <section class="section-cases-intro">
        <div class="wrap w-p125">
            <div class="area-txt">
                <div class="content-txt-container" data-scroll>
                    <div>
                        <h1 class="title">{{ trans('success-stories/general.title') }}</h1>
                        <span class="line"></span>
                        <p class="text">{{ trans('success-stories/general.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <div class="data-scroll-bloque-animacion" data-scroll>

        @if( !is_null($highlightSuccessStory) )

        <section class="section-cases-banner">
            <!-- <div class="wrap"> -->
                <div class="case-banner-container">
                    <div class="area-txt">
                        <h3 class="title">{{ $highlightSuccessStory->title }}</h3>
                        <span class="line"></span>
                        <div class="text">{!! $highlightSuccessStory->description !!}</div>
                        <a href="{{ url(trans('routes.success-stories.details') . $highlightSuccessStory->slug) }}" class="btn vermas">{{ trans('success-stories/general.view-more') }}</a>
                        <!-- <a href="#player" class="btn play">{{ trans('success-stories/general.play-btn') }}</a> -->
                    </div>
                    <div class="area-video" data-scroll>
                        <div class="plyr__video-embed" id="player" poster="{{ asset($highlightSuccessStory->desktop_list_banner_image) }}">
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
                        <picture alt="Mercado Libre Casos de Exito" class="desktop">
                            <source srcset="{{ asset(trans('success-stories/general.banner-image-url-webp')) }}" type="image/webp" media="(min-width: 1024px)">
                            <source srcset="{{ asset(trans('success-stories/general.banner-image-url')) }}" type="image/jpg" media="(min-width: 1024px)">
                            <img loading="lazy" alt="potencia">
                        </picture>
                        <picture alt="Mercado Libre Casos de Exito" class="mobile">
                            <source srcset="{{ asset(trans('success-stories/general.banner-image-url-mobile-webp')) }}" type="image/webp" media="(max-width: 1023px)">
                            <source srcset="{{ asset(trans('success-stories/general.banner-image-url-mobile')) }}" type="image/jpg" media="(max-width: 1023px)">
                            <img loading="lazy" alt="potencia">
                        </picture>
                    </div>
                </div>
            <!-- </div> -->
        </section>
        @endif

        <section class="section-cases-secondary">
            <div class="wrap w-p60">
                <div class="cases-secondary-container">
                    <ul class="cases-secondary-wrapper">
                        @foreach($successStories as $successStory)
                        <li class="case-secondary-slide">
                            <div class="area-img" data-scroll>
                                <img src="{{ asset($successStory->image) }}" alt="{{ $successStory->title }}">
                            </div>
                            <div class="area-text">
                                <h4 class="title">{{ $successStory->brand }}</h4>
                                <div class="text">{{ $successStory->description_list }}</div>
                                <a href="{{ url(trans('routes.success-stories.details') . $successStory->slug) }}" class="btn vercaso">{{ trans('success-stories/general.view-success-story') }}</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

    </div>


</main>

@endsection
