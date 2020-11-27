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

    <div id="fb-pixel"></div>

    <section class="section-contacto">
        <div class="wrap">
            <div class="area-img" data-scroll>
                <!-- <img src="{{ asset('assets/images/contact.jpg') }}" alt="icon"> -->
                <picture alt="Mercado Libre Contact">
                    <source srcset="{{ asset('assets/images/contact.webp') }}" type="image/webp">
                    <source srcset="{{ asset('assets/images/contact.jpg') }}" type="image/jpg">
                    <img loading="lazy" alt="contact">
                </picture>
            </div>
            <div class="area-text">

                <div class="content-txt-container" data-scroll>
                    <div>
                        <h1 class="title">{{ trans('contact/general.title') }}</h1>
                        <h2 class="subtitle">{!! trans('contact/general.subtitle') !!}</h2>
                        <span class="line" data-scroll></span>
                        <ul class="opciones-list">
                            <li class="opcion-item">
                                <button class="contact-btn" onclick="$('#form').val('advertiser');" data-locale="{{ app()->getLocale() }}" data-type="advertiser"><span class="icon"></span>{{ trans('contact/general.advertiser') }}</button>
                            </li>
                            <li class="opcion-item">
                                <button class="contact-btn" onclick="$('#form').val('agency');" data-locale="{{ app()->getLocale() }}" data-type="agency"><span class="icon"></span>{{ trans('contact/general.agency') }}</button>
                            </li>
                            <li class="opcion-item">
                                <a href="{{ trans('contact/general.seller-url') }}" target="_blank"><span class="icon"></span>{{ trans('contact/general.seller') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="formulario-content" id="formulario-content">
                    <p class="text">{!! trans('contact/general.form-title') !!}</b></p>
                    <div id="form-errors"></div>
                    <form class="campos-content" action="{{ route('contact-send') }}" id="contact-form">
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

                        <input type="hidden" id="form">

                        <div class="campo medium">
                            <input type="text" id="name" placeholder="{{ trans('contact/general.form-inputs.name') }}*">
                        </div>
                        {{-- <div class="campo medium">
                            <input type="text" id="lastname" placeholder="{{ trans('contact/general.form-inputs.lastname') }}*">
                        </div> --}}
                        <div class="campo medium">
                            <input type="email" id="email" placeholder="{{ trans('contact/general.form-inputs.email') }}*" data-errormsg="{{ trans('contact/general.email-valid-error') }}">
                        </div>
                        {{-- <div class="campo medium contein">
                            <input class="small" type="text" id="area_code" placeholder="{{ trans('contact/general.form-inputs.area_code') }}*">
                            <input class="big" type="text" id="telephone" placeholder="{{ trans('contact/general.form-inputs.telephone') }}*">
                        </div> --}}
                        <div class="campo medium">
                            <input type="text" id="business" placeholder="{{ trans('contact/general.form-inputs.business') }}*">
                        </div>
                        {{-- <div class="campo medium select">
                            <select class="form-control custom-select sources" id="business_type">
                                <option value="" selected>{{ trans('contact/general.form-inputs.business_type.name') }}*</option>
                                @foreach(trans('contact/general.form-inputs.business_type.items') as $businessType)
                                <option value="{{ $businessType }}">{{ $businessType }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        @if( app()->getLocale() == 'es' )
                        <div class="campo medium select">
                            <select class="form-control custom-select sources" id="country">
                                <option value="" selected>{{ trans('contact/general.form-inputs.country.name') }}*</option>
                                @foreach(trans('contact/general.form-inputs.country.items') as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        {{-- <div class="campo medium select">
                            <select class="form-control custom-select sources" id="industry_type">
                                <option value="" selected>{{ trans('contact/general.form-inputs.industry_type.name') }}*</option>
                                @foreach(trans('contact/general.form-inputs.industry_type.items') as $industryType)
                                <option value="{{ $industryType }}">{{ $industryType }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="campo medium select">
                            <select class="form-control custom-select sources" id="investment">
                                <option value="" selected>{{ trans('contact/general.form-inputs.investment.name') }}*</option>
                                @foreach(trans('contact/general.form-inputs.investment.items') as $investment)
                                <option value="{{ $investment }}">{{ $investment }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="campo large linea">
                            <textarea id="message" placeholder="{{ trans('contact/general.form-inputs.message') }}"></textarea>
                        </div>
                        <div class="campo large captcha">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        </div>
                        <p class="obligatorio">*{{ trans('contact/general.fields-required') }}</p>
                        <input class="btn enviar" type="submit" value="{{ trans('contact/general.send') }}">
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
