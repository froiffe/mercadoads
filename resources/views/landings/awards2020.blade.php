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
                           // $ip_address = '181.49.73.217';//colobia
                            //$ip_address = '181.211.96.101';//Quito
                            $ip_address = '139.47.28.0';//Barcelona esp

                           
                           
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
                        <p class="faltan">FALTAN</p>
                        <!--<p class="faltan">eventBA: {{$eventBA->format('Y/m/d H:i:s')}}</p>
                        <p class="faltan">eventUser: {{$eventUser->format('Y/m/d H:i:s')}}</p>-->
    				</div>
    				<div class="row">
						<div class="time-left" id="countdown-time" data-countdown="{{$eventUser->format('Y/m/d H:i:s')}}">
							<div class="col-time days">
								<span class="count">00</span>
								<span class="item">DÍAS</span>
							</div>
							<div class="col-time hours">
								<span class="count">00</span>
								<span class="item">HORAS</span>
							</div>
							<div class="col-time minutes">
								<span class="count">00</span>
								<span class="item">MIN</span>
							</div>
							<div class="col-time seconds">
								<span class="count">00</span>
								<span class="item">SEG</span>
							</div>
						</div>
					</div>
    				
    				<div class="row">
    					<h2>PARA CONOCER LAS MEJORES<br> ESTRATEGIAS PUBLICITARIAS DEL AÑO</h2>
					</div>
					
					<div class="row date-event">
						<div class="row"><p class="date"><b>17 dic</b> Live Streaming</p></div>
						<div class="row"><span class="countries"><b>14 HS</b> BRA | AR | UY | CL<br><b>11 HS</b> MX<br><b>10 HS</b> CO</span></div>
					</div>

					<div class="row">
						<button class="btn btn-calendar"><i class="icon-calendar"></i>Agendar en mi calendar</button>
					</div>
					
    			</div>
    		</div>
    		
    	</section>
    	<section class="normal bg-blue">
    		<div class="container">
    			<div class="centered-content">
					<div class="row text-section">
						<p><b>Mercado Ads Awards</b> es nuestra forma de celebrar las mejores estrategias publicitarias del año y de seguir potenciando el negocio de marcas, agencias y vendedores en toda Latinoamérica.</p>
                        <p><b>Mercado Ads Awards</b> reúne a los expertos en publicidad de Mercado Libre, Kantar y MediaMonks para premiar a los desempeños más destacados en las siguientes categorías:</p>
    				</div>

    				<div class="row">
    					<h1>Nominados</h1>
    					<h2>Mejor estrategia de Branding</h2>
    					<h3>ARGENTINA</h3>
    				</div>
    				<div class="row">
    					@slide([
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/bgh.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/vichy.png')
                				]
                				]
            			]) @endslide
    				</div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>México</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/pernod-ricard.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/huawei.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/loreal.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>Colombia</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/xiaomi.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/huawei.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/disney.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
    			</div>
    		</div>
    		<div class="separate"></div>
    	</section>

    	<section class="normal bg-blue">
    		<div class="container">
    			<div class="centered-content">
					<div class="row">
    					<h2>Mejor Estrategia de Performance</h2>
    					<h3>Argentina</h3>
    				</div>
    				<div class="row">
    					@slide([
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/suprabond.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/tropea.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/salescom.png')
                				]
                				]
            			]) @endslide
    				</div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>México</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/maybelline.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/evolution.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/luuna.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
    			</div>
    		</div>
    		<div class="separate"></div>
    	</section>

    	<section class="normal bg-blue">
    		<div class="container">
    			<div class="centered-content">
					<div class="row">
    					<h2>Contenido de Alto Impacto</h2>
    					<h3>LATAM</h3>
    				</div>
    				<div class="row">
    					@slide([
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/Protex.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/Realme.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/Dell.png')
                				]
                				]
            			]) @endslide
    				</div>
    			</div>
    		</div>
    		<div class="separate"></div>
    	</section>

    	<section class="normal bg-blue">
    		<div class="container">
    			<div class="centered-content">
					<div class="row">
    					<h2>Líder en Búsqueda de Marca</h2>
    					<h3>ARGENTINA</h3>
    				</div>
    				<div class="row">
    					@slide([
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/bosch.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/black.decker.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/philips.png')
                				]
                				]
            			]) @endslide
    				</div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>MÉXICO</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/hp.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/nike.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/skechers.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
    			</div>
    		</div>
    		<div class="separate"></div>
    	</section>

    	<section class="normal bg-blue">
    		<div class="container">
    			<div class="centered-content">
					<div class="row">
    					<h2>Agencia de Medios del Año</h2>
    					<h3>ARGENTINA</h3>
    				</div>
    				<div class="row">
    					@slide([
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/carat.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/ipg.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/groupm.png')
                				]
                				]
            			]) @endslide
    				</div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h2>Agencia de Medios del Año</h2>
                        <h3>MÉXICO</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/mms.media.brands.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/havas.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/hph.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
    			</div>
    		</div>
    		<div class="separate"></div>
    	</section>

    	<section class="normal bg-blue last">
    		<div class="container">
    			<div class="centered-content">
					<div class="row">
    					<h2>Small & medium advertiser of the year</h2>
    					<h3>ARGENTINA</h3>
    				</div>
    				<div class="row">
    					@slide([
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/elephant.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/la.feria.online.png')
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/electronor.png')
                				]
                				]
            			]) @endslide
    				</div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>MÉXICO</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/evolum.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/bbs.evolution.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/consumibles.printcolor.mexico.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>COLOMBIA</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/bio.medical.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/vitalicia.oficial.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/antik.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>CHILE</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/bigos.cl.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/sociedad.biblica.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/cys.market.spa.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
                    <div class="separate light"></div>
                    <div class="row">
                        <h3>URUGUAY</h3>
                    </div>
                    <div class="row">
                        @slide([
                            'slides' =>  [
                                (object) [
                                    'logo'=>asset('assets/images/logos/de.fuegos.barraca.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/trimant.png')
                                ],
                                (object) [
                                    'logo'=>asset('assets/images/logos/indacar.png')
                                ]
                                ]
                        ]) @endslide
                    </div>
    			</div>
    		</div>
    	
    	</section>

	</main>
@endsection