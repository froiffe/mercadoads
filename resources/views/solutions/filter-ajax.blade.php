@foreach($formats as $format)
    @if( (app()->getLocale() == 'es' && $format->{'title:es'}) || (app()->getLocale() == 'pt' && $format->{'title:pt'}) )
    <article class="formato-content" data-scroll data-scroll-position="bottom" data-scroll-offset="20%">
        <div class="wrap w-p125">
            <div class="formatos-filter">
                <ul class="formatos-filter-list">
                    @if( !is_null($format->image_desktop) || !is_null($format->video_desktop) )
                    <li class="formato-item {{ $format->image_default == 'desktop' ? 'active' : '' }}">
                        <a href="#" class="desktop">desktop</a>
                    </li>
                    @endif
                    @if( !is_null($format->image_webmobile) || !is_null($format->video_webmobile) )
                    <li class="formato-item {{ $format->image_default == 'webmobile' ? 'active' : '' }}">
                        <a href="#" class="webmobile">webmobile</a>
                    </li>
                    @endif
                    @if( !is_null($format->image_app) || !is_null($format->video_app) )
                    <li class="formato-item {{ $format->image_default == 'app' ? 'active' : '' }}">
                        <a href="#" class="app">app</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="area-text">
                <h2 class="title">{{ $format->title }}</h2>
                <div class="subtitle">{!! $format->description !!}</div>
                <a href="{{ url(trans('routes.solutions.details') . $format->slug) }}" class="btn verdetalle">{{ trans('solutions/general.details') }}</a>
            </div>
            <div class="area-img">
                {{-- video --}}
                @if( !is_null($format->video_desktop) )
                <video class="desktop" autoplay loop muted playsinline style="{{ $format->image_default == 'desktop' ? 'display:block' : 'display:none' }}">
                    <source src="{{ asset($format->video_desktop) }}" type="video/mp4">
                </video>
                @endif
                @if( !is_null($format->video_webmobile) )
                <video class="webmobile" autoplay loop muted playsinline style="{{ $format->image_default == 'webmobile' ? 'display:block' : 'display:none' }}">
                    <source src="{{ asset($format->video_webmobile) }}" type="video/mp4">
                </video>
                @endif
                @if( !is_null($format->video_app) )
                <video class="app" autoplay loop muted playsinline style="{{ $format->image_default == 'app' ? 'display:block' : 'display:none' }}">
                    <source src="{{ asset($format->video_app) }}" type="video/mp4">
                </video>
                @endif

                {{-- image --}}
                @if( !is_null($format->image_desktop) )
                <img class="desktop" src="{{ asset($format->image_desktop) }}" alt="{{ $format->title }}_desktop" style="{{ $format->image_default == 'desktop' ? 'display:block' : 'display:none' }}">
                @endif
                @if( !is_null($format->image_webmobile) )
                <img class="webmobile" src="{{ asset($format->image_webmobile) }}" alt="{{ $format->title }}_webmobile" style="{{ $format->image_default == 'webmobile' ? 'display:block' : 'display:none' }}">
                @endif
                @if( !is_null($format->image_app) )
                <img class="app" src="{{ asset($format->image_app) }}" alt="{{ $format->title }}_app" style="{{ $format->image_default == 'app' ? 'display:block' : 'display:none' }}">
                @endif
            </div>
        </div>
    </article>
    @endif
@endforeach
