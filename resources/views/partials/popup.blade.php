<section id="{{ $id }}" class="section-courses-popups {{ $class }}">
    <div class="popup-wrap">
        <a href="javascript:void(0)" class="close" style="position: absolute;top: 15px;right: 15px;font-size: 14px;font-weight: 600;">X</a>
        <span class="icon-alert success"></span>
        <div class="area-txt">
            <h1 class="title">{!! isset($title) ? $title : '' !!}</h1>
            <div class="text">{!! isset($description) ? $description : '' !!}</div>
            <div class="bottom-content">
                @if( isset($url) && $url != '' )
                    @if( isset($onClick) && $onClick != '' )
                        <a href="{{ isset($url) ? $url : '#' }}" class="btn center" onclick="{{ $onClick }}">{{ isset($buttonText) ? $buttonText : trans('frontend/popup.close') }}</a>
                    @else
                        <a href="{{ isset($url) ? $url : '#' }}" class="btn center">{{ isset($buttonText) ? $buttonText : trans('frontend/popup.close') }}</a>
                    @endif
                @else
                    <a href="#" class="btn center close">{{ trans('frontend/popup.close') }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
