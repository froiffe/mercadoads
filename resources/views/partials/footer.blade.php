<footer data-scroll data-scroll-section>
    <div class="wrap w-p125">
        <nav>
            
            <div class="social">
                <a href="{{ url(trans('routes.linkedin-url')) }}" target="_blank">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                        <path d="M25,0.5C11.5,0.5,0.5,11.5,0.5,25s11,24.5,24.5,24.5s24.5-11,24.5-24.5S38.5,0.5,25,0.5z M17.9,37.5h-6v-18h6
                            V37.5z M14.9,17.1L14.9,17.1c-2,0-3.3-1.4-3.3-3.1c0-1.8,1.3-3.1,3.4-3.1s3.3,1.3,3.3,3.1C18.3,15.8,17,17.1,14.9,17.1z M39.4,37.5
                            h-6v-9.6c0-2.4-0.9-4.1-3-4.1c-1.6,0-2.6,1.1-3.1,2.2c-0.2,0.4-0.2,0.9-0.2,1.5v10h-6c0,0,0.1-16.3,0-18h6v2.5c0.8-1.2,2.2-3,5.4-3
                            c3.9,0,6.9,2.6,6.9,8.1V37.5z"/>
                        </svg>
                    </span>
                </a>
            </div>

            <span class="line"></span>
            @if(isset($exception) && $exception->getStatusCode() == 404)
            <ul class="menu-lista">
                @if( !Agent::isDesktop() )
                <li class="menu-item"><a href="{{ url(trans('routes.home')) }}">home</a></li>
                @endif
                <li class="menu-item"><a href="{{ url(trans('routes.solutions')) }}">{{ trans('menu.solutions') }}</a></li>
                <li class="menu-item"><a href="{{ url(trans('routes.audiences')) }}">{{ trans('menu.audiences') }}</a></li>
                <li class="menu-item"><a href="{{ url(trans('routes.insights')) }}">{{ trans('menu.insights') }}</a></li>
                <li class="menu-item"><a href="{{ url(trans('routes.success-stories')) }}">{{ trans('menu.success-stories') }}</a></li>
                <li class="menu-item"><a href="{{ url(trans('routes.why-meli')) }}">{{ trans('menu.why-meli') }}</a></li>
                <li class="menu-item"><a href="{{ url(trans('routes.contact')) }}">{{ trans('menu.contact') }}</a></li>
                <li class="menu-item"><a href="{!! trans('footer.terms-and-conditions.url') !!}">{{ trans('footer.terms-and-conditions.text') }}</a></li>
                <li class="menu-item"><a href="{!! trans('footer.privacy-policy.url') !!}">{{ trans('footer.privacy-policy.text') }}</a></li>
            </ul>
            @else
            <ul class="menu-lista">
                @if( !Agent::isDesktop() )
                <li class="menu-item {{ \Request::route()->getName() == 'home' ? 'active' : '' }}"><a href="{{ url(trans('routes.home')) }}">home</a></li>
                @endif
                <li class="menu-item {{ \Request::route()->getName() == 'solutions' ? 'active' : '' }}"><a href="{{ url(trans('routes.solutions')) }}">{{ trans('menu.solutions') }}</a></li>
                <li class="menu-item {{ \Request::route()->getName() == 'audiences' ? 'active' : '' }}"><a href="{{ url(trans('routes.audiences')) }}">{{ trans('menu.audiences') }}</a></li>
                <li class="menu-item {{ \Request::route()->getName() == 'insights' ? 'active' : '' }}"><a href="{{ url(trans('routes.insights')) }}">{{ trans('menu.insights') }}</a></li>
                <li class="menu-item {{ \Request::route()->getName() == 'success-stories' ? 'active' : '' }}"><a href="{{ url(trans('routes.success-stories')) }}">{{ trans('menu.success-stories') }}</a></li>
                <li class="menu-item {{ \Request::route()->getName() == 'why-meli' ? 'active' : '' }}"><a href="{{ url(trans('routes.why-meli')) }}">{{ trans('menu.why-meli') }}</a></li>
                <li class="menu-item {{ \Request::route()->getName() == 'contact' ? 'active' : '' }}"><a href="{{ url(trans('routes.contact')) }}">{{ trans('menu.contact') }}</a></li>
                <li class="menu-item"><a href="{!! trans('footer.terms-and-conditions.url') !!}" target="_blank">{{ trans('footer.terms-and-conditions.text') }}</a></li>
                <li class="menu-item"><a href="{!! trans('footer.privacy-policy.url') !!}" target="_blank">{{ trans('footer.privacy-policy.text') }}</a></li>
            </ul>
            @endif
        </nav>
        <div class="copyright"><p>Copyrigt © 1999 - {{ date('Y') }} MercadoLibre S. R. L.</p></div>
    </div>
</footer>
