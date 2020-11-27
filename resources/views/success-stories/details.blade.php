@extends('layouts.master')

@section('title')
{{ $successStory->seo_title }}
@endsection

@section('meta')
@if( !is_null($successStory) )
<meta name="title" content="{{ $successStory->seo_title }}" />
<meta name="description" content="{{ $successStory->seo_description }}" />
<meta property="image" content="{{ asset($successStory->seo_image) }}" />

<meta property="og:title" content="{{ $successStory->seo_title }}" />
<meta property="og:image" content="{{ asset($successStory->seo_image) }}" />
<meta property="og:description" content="{{ $successStory->seo_description }}" />
@endif
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ Request::url() }}" />
@endsection

@section('content')
<main class="main-casos-exito-detail"  data-scroll-section>


    <section class="section-cases-detalle">
        
        <div class="content-txt-container" data-scroll>
            <div class="area-title">
                <div class="wrap w-p125">
                    <nav class="breadcrumb">
                        <ol class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('success-stories/general.breadcrumbs.level1') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ url(trans('routes.success-stories')) }}">{{ trans('success-stories/general.breadcrumbs.level2') }}</a></li>
                            <li class="breadcrumb-item active"><a href="#">{{ $successStory->title }}</a></li>
                        </ol>
                    </nav>
                    <h1 class="title">{{ $successStory->title }}</h1>
                    <span class="line"></span>
                    <div class="text">{!! $successStory->description !!}</div>
                </div>
            </div>
        </div>           



        <div class="data-scroll-bloque-animacion" data-scroll>
            
                <!-- <div class="caso-detalle">{!! $successStory->content !!}</div> -->
                <div class="caso-detalle">
                    <div class="wrap">
                    {!! $successStory->content !!}


                    <!-- CITROEN -->
                    <!-- <div class="caso-detalle-content" id="citroen">
                        <div class="area-img">
                            <img src="/assets/images/casos-detalle/citroen-video.jpg" alt="casos">
                            <video controls>
                                <source src="/assets/images/casos-detalle/citroen-video.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="area-txt">
                            <h1 class="title-highlights">Highlights</h1>
                            <div class="text-content">
                                <h2 class="title">campaña <span>full funnel</span></h2>
                                <div class="line-points">
                                    <ul>
                                        <li class="active">
                                            <p>Discovery</p>
                                            <span class="point"></span>
                                        </li>
                                        <li class="active">
                                            <p>Consideration</p>
                                            <span class="point"></span>
                                        </li>
                                        <li class="active">
                                            <p>Purchase</p>
                                            <span class="point"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="items">
                                    <ul>
                                        <li>
                                            <p>Landing personalizada</p>
                                        </li>
                                        <li>
                                            <p><span>72</span>Autos vendidos</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="circles">
                                    <ul>
                                        <li class="circle big">
                                            <div class="circle big">
                                                <div class="circle-txt-content">
                                                    <p class="number">1<span class="ra">ra</span></p>
                                                    <p class="subtitle">Tienda oficial</p>
                                                    <p class="text">de autos nuevos en Mercado Libre</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="circle small">
                                            <div class="circle small">
                                                <div class="circle-txt-content">
                                                    <p class="text">Sponsor del</p>
                                                    <p class="subtitle">cyber day</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Content CITROEN -->



                    <!-- SAMSUNG -->
                    <!-- <div class="caso-detalle-content" id="samsung">
                        <div class="area-img">
                            <img src="/assets/images/casos-detalle/samsung-video.jpg" alt="casos">
                        </div>
                        <div class="area-txt">
                            <h1 class="title-highlights">Highlights</h1>
                            <div class="text-content">
                                <h2 class="title">campaña <span>full funnel</span></h2>
                                <div class="line-points">
                                    <ul>
                                        <li class="active">
                                            <p>Discovery</p>
                                            <span class="point"></span>
                                        </li>
                                        <li class="active">
                                            <p>Consideration</p>
                                            <span class="point"></span>
                                        </li>
                                        <li class="active">
                                            <p>Purchase</p>
                                            <span class="point"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="items">
                                    <ul>
                                        <li>
                                            <p>Landing personalizada</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="circles">
                                    <ul>
                                        <li class="circle big">
                                            <div class="circle big">
                                                <div class="circle-txt-content">
                                                    <p class="number">+50<span class="percent">%</span></p>
                                                    <p class="subtitle">marketshare</p>
                                                    <p class="text">en Hot Sale</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="circle small">
                                            <div class="circle small">
                                                <div class="circle-txt-content">
                                                    <p class="text">Lanzamiento exclusivo</p>
                                                    <p class="subtitle">online</p>
                                                </div> 
                                            </div> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Content SAMSUNG -->




                    <!-- HUAWEI -->
                    <!-- <div class="caso-detalle-content" id="huawei">
                        <div class="area-img">
                            <img src="/assets/images/casos-detalle/huawei-video.jpg" alt="casos">
                        </div>
                        <div class="area-txt">
                            <h1 class="title-highlights">Highlights</h1>
                            <div class="text-content">
                                <h2 class="title">campaña <span>awareness</span></h2>
                                <div class="line-points">
                                    <ul>
                                        <li class="active">
                                            <p>Discovery</p>
                                            <span class="point"></span>
                                        </li>
                                        <li>
                                            <p>Consideration</p>
                                            <span class="point"></span>
                                        </li>
                                        <li>
                                            <p>Purchase</p>
                                            <span class="point"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="items">
                                    <ul>
                                        <li>
                                            <p>Landing personalizada</p>
                                        </li>
                                        <li>
                                            <p>Formatos de alto impacto</p>
                                        </li>                                    
                                    </ul>
                                </div>
                                <div class="circles">
                                    <ul>
                                        <li>
                                            <div class="txt-prev">
                                                <p class="subtitle">data analytics % insights</p> 
                                            </div>
                                            <div class="circle small">
                                                <div class="circle-txt-content">
                                                    <p class="subtitle">copa oro:</p>
                                                    <p class="text">Huawei se la juega por México</p>
                                                </div> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="circle big">
                                                <div class="circle-txt-content">
                                                    <p class="number">165<span class="percent">%</span></p>
                                                    <p class="subtitle">aumento tráfico</p>
                                                    <p class="text">a tienda oficial</p>
                                                </div>
                                            </div>
                                        </li>                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Content HUAWEI -->


                </div>
            </div>

        </div>

    </section>

    @if( $successStory->solutions()->count() > 0 )
    <section class="section-formato-relacionados">
        <div class="wrap w-p60">
            <div class="relacionados-content">
                <!-- <div class="lines-animation" data-scroll>
                    <span class="right"></span>
                    <span class="top"></span>
                    <span class="left"></span>
                    <span class="bottom"></span>
                </div> -->

                <div class="title-content">
                    <h2 class="title">{{ trans('success-stories/general.formats-title') }}</h2>
                    <span class="line"></span>
                </div>
                <div class="formato-relacionados-container swiper-container">
                    <ul class="formato-relacionados-wrapper swiper-wrapper">
                        @foreach($successStory->solutions()->get() as $format)
                        <li class="formato-relacionados-slide swiper-slide">
                            <a href="{{ url(trans('routes.solutions.details') . $format->slug) }}">
                                <div class="area-img">
                                    <img src="{{ asset($format->image) }}" alt="{{ $format->title }}">
                                </div>
                                <div class="area-text">
                                    <h4 class="title">{{ $format->title }}</h4>
                                    <div class="text">{{ $format->description_list }}</div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <a href="{{ url(trans('routes.solutions')) }}" class="btn center formatos">{{ trans('success-stories/general.view-formats') }}</a>
            </div>
        </div>
    </section>
    @endif

</main>
@endsection
