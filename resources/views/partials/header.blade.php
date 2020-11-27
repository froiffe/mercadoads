<header>

    <div class="wrap">

        <input type="checkbox" name="mainMenu" value="valuable" id="mainMenu" class="inputMenu" />
        <label for="mainMenu"></label>
            <a href="{{ route('home') }}" class="logo"><img src="{{ trans('menu.logo-url') }}" alt=""></a>

            <div class="menu-button">
                <label for="mainMenu" class="menu-button">
                <div class="hamburger hamburger--spin js-hamburger ">
                    <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                    </div>
                </div>
                </label>
            </div>

            <nav>
                @if(isset($exception) && $exception->getStatusCode() == 404)
                <ul class="menu-lista">
                    @if( !Agent::isDesktop() )
                    <li class="menu-item"><a href="{{ url(trans('routes.home')) }}">home</a></li>
                    @endif
                    <li class="menu-item menu-item-submenu"><a class="line" href="{{ url(trans('routes.solutions')) }}">{{ trans('menu.solutions') }}</a>
                        <div class="submenu-content">
                            <div class="wrap">
                                <ul class="submenu-lista">
                                    <li class="submenu-item mobile">
                                        <a class="line" href="{{ url(trans('routes.solutions.details')) }}">{!! trans('menu.all-formats') !!}</a>
                                    </li>
                                    @foreach($formatsHeader as $formatHeader)
                                    <li class="submenu-item">
                                        <a class="line" href="{{ url(trans('routes.solutions.details') . $formatHeader->slug) }}">{{ $formatHeader->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a class="line" href="{{ url(trans('routes.audiences')) }}">{{ trans('menu.audiences') }}</a></li>

                    <li class="menu-item"><a class="line" href="{{ url(trans('routes.insights')) }}">{{ trans('menu.insights') }}</a>
                        <!-- <div class="submenu-content">
                            <div class="wrap">
                                <ul class="submenu-lista">
                                    <li class="submenu-item">
                                        <a class="line" href="{{ url(trans('routes.insights')) }}">{{ trans('menu.insights-1') }}</a>
                                    </li>
                                    <li class="submenu-item">
                                        <a class="line" href="{{ url(trans('routes.insights-covid')) }}">{{ trans('menu.insights-2') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </li>

                    <li class="menu-item"><a class="line" href="{{ url(trans('routes.success-stories')) }}">{{ trans('menu.success-stories') }}</a></li>
                    <li class="menu-item"><a class="line" href="{{ url(trans('routes.why-meli')) }}">{{ trans('menu.why-meli') }}</a></li>
                    <li class="menu-item"><a class="line" href="{{ url(trans('routes.contact')) }}">{{ trans('menu.contact') }}</a></li>
                </ul>
                @else

                <ul class="menu-lista">
                    @if( !Agent::isDesktop() )
                    <li class="menu-item"><a href="{{ url(trans('routes.home')) }}">home</a></li>
                    @endif
                    <li class="menu-item menu-item-submenu {{ \Request::route()->getName() == 'solutions' || \Request::route()->getName() == 'solutions.details' ? 'active' : '' }}"><a class="line" href="{{ url(trans('routes.solutions')) }}">{{ trans('menu.solutions') }}</a>
                        <input type="checkbox" name="mainMenu" value="valuable" id="mainMenu2" class="inputMenu" />
                        <div class="submenu-content">
                            <label for="mainMenu2" >
                                <div class="hamburger hamburger--arrow js-hamburger is-active">
                                    <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </label>
                            <div class="wrap">
                                <ul class="submenu-lista">
                                    <li class="submenu-item {{ \Request::route()->getName() == 'solutions' ? 'active' : '' }}">
                                        <a class="line" href="{{ url(trans('routes.solutions')) }}">{{ trans('menu.all-formats') }}</a>
                                    </li>
                                    <li class="submenu-item {{ \Request::route()->getName() == 'solutions-media' ? 'active' : '' }}">
                                        <a class="line" href="{{ url(trans('routes.solutions-media')) }}">{{ trans('menu.media') }}</a>
                                    </li>
                                    <li class="submenu-item {{ \Request::route()->getName() == 'solutions-supermercado-libre' ? 'active' : '' }}">
                                        <a class="line" href="{{ url(trans('routes.solutions-supermercado-libre')) }}">{{ trans('menu.supermercadolibre') }}</a>
                                    </li>
                                    <li class="submenu-item {{ \Request::route()->getName() == 'solutions-audience-deals' ? 'active' : '' }}">
                                        <a class="line" href="{{ url(trans('routes.solutions-audience-deals')) }}">{{ trans('menu.audience-deals') }}</a>
                                    </li>

                                    {{-- @foreach($formatsHeader as $formatHeader)
                                    <li class="submenu-item {{ (count(\Request::route()->parameters) && $formatHeader->slug == \Request::route()->parameters['slug']) ? 'active' : '' }}">
                                        <a class="line" href="{{ url(trans('routes.solutions.details') . $formatHeader->slug) }}">{{ $formatHeader->title }}</a>
                                    </li>
                                    @endforeach --}}
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item {{ \Request::route()->getName() == 'audiences' ? 'active' : '' }}"><a class="line" href="{{ url(trans('routes.audiences')) }}">{{ trans('menu.audiences') }}</a></li>

                    <li class="menu-item {{ \Request::route()->getName() == 'insights' || \Request::route()->getName() == 'insights.trends' || \Request::route()->getName() == 'insights.covid' || \Request::route()->getName() == 'insights.hot-sale' || \Request::route()->getName() == 'insights.hot-sale-argentina' || \Request::route()->getName() == 'insights.kantar' ? 'active' : '' }}"><a href="{{ url(trans('routes.insights')) }}" class="line">{{ trans('menu.insights') }}</a></li>

                    <li class="menu-item {{ \Request::route()->getName() == 'success-stories' || \Request::route()->getName() == 'success-stories.details' ? 'active' : '' }}"><a class="line" href="{{ url(trans('routes.success-stories')) }}">{{ trans('menu.success-stories') }}</a></li>
                    <li class="menu-item {{ \Request::route()->getName() == 'why-meli' ? 'active' : '' }}"><a class="line" href="{{ url(trans('routes.why-meli')) }}">{{ trans('menu.why-meli') }}</a></li>
                    <li class="menu-item {{ \Request::route()->getName() == 'contact' || \Request::route()->getName() == 'contact-success' ? 'active' : '' }}"><a class="line" href="{{ url(trans('routes.contact')) }}">{{ trans('menu.contact') }}</a></li>
                </ul>
                @endif
                <form class="lenguaje" action="{{ route('change-language') }}" method="POST">
                    @csrf
                    <select name="locale" id="locale" class="custom-select sources" >
                        <option {{ app()->getLocale() == 'es' ? 'selected' : '' }} value="es">es</option>
                        <option {{ app()->getLocale() == 'pt' ? 'selected' : '' }} value="pt">por</option>
                    </select>
                </form>
            </nav>

    </div>

</header>
