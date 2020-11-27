@if( count(trans('home/general.module7.items')) > 0 )
    <section class="section-insights-secondary" data-scroll>
        <div class="wrap w-p60">
            <div class="title-content">
                <h2 class="title">{{ trans('insights/general.list-title') }}</h2>
                <span class="line" data-scroll></span>
            </div>
        </div>
        <div class="wrap">
            <div class="insights-content">
                @foreach(array_reverse(trans('home/general.module7.items')) as $insight)
                    @if( $insight['is_highlight'] == 0 )
                    <article class="insight medium">
                        <a href="{{ url($insight['url']) }}">
                            <div class="area-img-content">
                                <div class="area-img" data-scroll>
                                    <picture alt="{!! $insight['title'] !!}" class="desktop">
                                        <source srcset="{{ asset($insight['list-image-url-webp']) }}" type="image/webp" media="(min-width: 1024px)">
                                        <source srcset="{{ asset($insight['list-image-url']) }}" type="image/jpg" media="(min-width: 1024px)">
                                        <img loading="lazy" alt="insight">
                                    </picture>
                                    <picture alt="{!! $insight['title'] !!}" class="mobile">
                                        <source srcset="{{ asset($insight['list-image-url-mobile-webp']) }}" type="image/webp" media="(max-width: 1023px)">
                                        <source srcset="{{ asset($insight['list-image-url-mobile']) }}" type="image/jpg" media="(max-width: 1023px)">
                                        <img loading="lazy" alt="insight">
                                    </picture>
                                </div>
                            </div>
                            <div class="area-txt">
                                <h3 class="fecha"></h3>
                                <div class="text">{{ $insight['title'] }}<span class="arrow"></span></div>
                            </div>
                        </a>
                    </article>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endif