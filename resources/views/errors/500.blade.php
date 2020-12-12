@extends('layouts.master')

@section('content')
<main class="main-error404" data-scroll-section>


    <section class="section-error404">
        <div class="wrap">
            <article class="article">
                <div class="area-txt" >
                    <div class="content-txt-container" data-scroll>
                    <div class="content-txt">
                        <h2 class="title">{!! trans('500.title') !!}</h2>
                        <h3 class="subtitle">{!! trans('500.subtitle') !!}</h3>
                        <p class="text">{!! trans('500.text') !!}</p>
                    </div>
                    </div>
                </div>
                <div class="area-img" data-scroll>
                    <!-- <img src="{{ asset('assets/images/error-404.jpg') }}" alt="error-404"> -->
                    <picture alt="Mercado Libre Error404">
                        <source srcset="{{ asset('assets/images/error-404.webp') }}" type="image/webp">
                        <source srcset="{{ asset('assets/images/error-404.jpg') }}" type="image/jpg">
                        <img loading="lazy" alt="error-404">
                    </picture>
                </div>
            </article>
        </div>
    </section>


</main>

@endsection
