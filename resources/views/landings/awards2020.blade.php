@extends('layouts.master')
@section('content')
	<main class="main-landing" data-scroll-section="" >
    	<section class="counter bg-gradient">
    		<div class="container">
    			<div class="centered-content">
    				<div class="row"><img class="logo" src="{{ asset('assets/images/logo-awards.svg') }}"></div>
    				<div class="row">
                        @php
                            $eventBA = new DateTime('2020-12-17 14:00:00');
                            $eventUser = new DateTime('2020-12-17 14:00:00');

                            $local_tz = new DateTimeZone('America/Argentina/Buenos_Aires');
                            $local = new DateTime('now', $local_tz);
                            $local_offset = $local->getOffset() / 3600;
                            $dateLocal = $local->format('Y-m-d H:i:s');

                            $ip_address = $_SERVER['REMOTE_ADDR'];

                            //$ip_address = '179.183.250.219';//brasil
                            //$ip_address = '181.49.73.217';//colobia
                            //$ip_address = '181.211.96.101';//Quito
                            //$ip_address = '139.47.28.0';//Barcelona esp

                            $geoPlugin_array = [];

                            $geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' .  $ip_address) );

                            if($geoPlugin_array['geoplugin_timezone']){
                                $timezone = $geoPlugin_array['geoplugin_timezone'];
                            }else{
                                $timezone = 'America/Argentina/Buenos_Aires';
                            }

                            $user   = new DateTime("now", new DateTimeZone($timezone) );
                            $user_offset = $user->getOffset() / 3600;
                            $dateUser = $user->format('Y-m-d H:i:s');

                            $diference = $local_offset - $user_offset;

                            if ($diference > 0){
                                $eventUser = $eventUser->sub(new DateInterval('PT'.$diference.'H'));
                            }else{
                                $diferencesub = $diference * -1;
                                $eventUser = $eventUser->add(new DateInterval('PT'.$diferencesub.'H'));
                            }
                            

                        @endphp
    					<!--<p class="faltan">BA: {{$dateLocal}}</p>
                        <p class="faltan">USER: {{$dateUser}} {{$timezone}}</p>
                        <p class="faltan">diference: {{$diference}}</p>-->
                        <p class="faltan">{{$lang_text['text-01']}}</p>
                        <!--<p class="faltan">eventBA: {{$eventBA->format('Y/m/d H:i:s')}}</p>
                        <p class="faltan">eventUser: {{$eventUser->format('Y/m/d H:i:s')}}</p>-->
    				</div>
    				<div class="row">
						<div class="time-left" id="countdown-time" data-countdown="{{$eventUser->format('Y/m/d H:i:s')}}">
							<div class="col-time days">
								<span class="count">00</span>
								<span class="item">{{$lang_text['text-02']}}</span>
							</div>
							<div class="col-time hours">
								<span class="count">00</span>
								<span class="item">{{$lang_text['text-03']}}</span>
							</div>
							<div class="col-time minutes">
								<span class="count">00</span>
								<span class="item">{{$lang_text['text-04']}}</span>
							</div>
							<div class="col-time seconds">
								<span class="count">00</span>
								<span class="item">{{$lang_text['text-05']}}</span>
							</div>
						</div>
					</div>
    				
    				<div class="row">
    					<h2>{!!$lang_text['text-06']!!}</h2>
					</div>
					
					<div class="row date-event">
						<div class="row"><p class="date"><b>17 dic</b> Live Streaming</p></div>
						<div class="row"><span class="countries"><b>14 HS</b> BRA | AR | UY | CL<br><b>11 HS</b> MX<br><b>12 HS</b> CO</span></div>
					</div>

					<div class="row">

						<button class="btn btn-calendar" onclick="window.open('{!! $google_calendar_button !!}')"><i class="icon-calendar"></i>{{$lang_text['text-07']}}</button>
					</div>
					
    			</div>
    		</div>
    		
    	</section>

        @if($local_lang == 'es')
            @include('landings.nominados.nominados_es', [])
        @else
            @include('landings.nominados.nominados_pt', [])
        @endif

    	

	</main>
@endsection