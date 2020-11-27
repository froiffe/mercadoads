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
<main class="main-contacto"  data-scroll-section>

    <section class="section-contacto exito">
        <div class="wrap">
            <div class="area-img">
                <!-- <img src="{{ asset('assets/images/contact.jpg') }}" alt="icon"> -->
                <picture alt="Mercado Libre Contact">
                    <source srcset="{{ asset('assets/images/contact.webp') }}" type="image/webp">
                    <source srcset="{{ asset('assets/images/contact.jpg') }}" type="image/jpg">
                    <img loading="lazy" alt="contact">
                </picture>
            </div>
            <div class="area-text">
                <h1 class="title">{{ trans('contact/general.title') }}</h1>
                <h2 class="subtitle">{!! trans('contact/general.subtitle') !!}</h2>
                <span class="line"></span>
                <p>{{ trans('contact/general.contact-success') }}</p>
                <a href="{{ url(trans('routes.contact')) }}" class="btn volver">{{ trans('contact/general.go-back') }}</a>
            </div>
        </div>
    </section>
    @if ($investment)
        <section id="popup-contact-investment" class="section-popups success active">
            <div class="popup-wrap">
                <a href="javascript:void(0);" class="close_popup">x</a>
                <span class="icon-alert success"></span>
                <div class="area-txt">
                    <h1 class="title">{{ trans('contact/general.investment.title') }}</h1>
                    <div class="bottom-content">
                        @if ($site!='')
                            <a href="{{$site}}" class="btn center" target="_blank">Ir a Product Ads</a>
                        @else
                            <ul>
                                <li><a href="https://ads.mercadolibre.com.ar/productAds" target="_blank">Argentina</a></li>
                                <li><a href="https://ads.mercadolivre.com.br/productAds" target="_blank">Brasil</a></li>
                                <li><a href="https://ads.mercadolibre.com.mx/productAds" target="_blank">México</a></li>
                                <li><a href="https://ads.mercadolibre.com.co/productAds" target="_blank">Colombia</a></li>
                                <li><a href="https://ads.mercadolibre.com.pe/productAds" target="_blank">Perú</a></li>
                                <li><a href="https://ads.mercadolibre.com.uy/productAds" target="_blank">Uruguay</a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
</main>
@endsection
