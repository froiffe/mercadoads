@extends('layouts.master')
@section('content')
	<main class="main-landing" data-scroll-section="" >
    	<section class="counter bg-gradient">
    		<div class="container">
    			<div class="centered-content">
    				<div class="row"><img class="logo" src="{{ asset('assets/images/logo-awards.svg') }}"></div>
    				<div class="row">
    					<div class="video"></div>
    				</div>
    				
					
    			</div>
    		</div>
    		
    	</section>
    	<section class="normal bg-blue">
    		<div class="container">
    			<div class="centered-content">
    				<div class="row ganadores-row">
    					<h1>Ganadores</h1>
    					<h2>Mejor estrategia de Branding</h2>
    				</div>
    				<div class="row">
                        @slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores-slide',
                            'slides' =>  [
                                (object) [
                                    'pais' => 'ARGENTINA',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/black.decker.png')]
                                    ]
                                ],
                                (object) [
                                    'pais' => 'MÉXICO',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/hp.png')]
                                    ]
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
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores-slide',
                            'slides' =>  [
                                (object) [
                                    'pais' => 'ARGENTINA',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/bosch.png')]
                                    ]
                                ],
                                (object) [
                                    'pais' => 'MÉXICO',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/hp.png')]
                                    ]
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
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores-slide',
                            'slides' =>  [
                                (object) [
                                    'pais' => 'ARGENTINA',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/bosch.png')]
                                    ]
                                ],
                                (object) [
                                    'pais' => 'MÉXICO',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/hp.png')]
                                    ]
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
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores-slide',
                            'slides' =>  [
                                (object) [
                                    'pais' => 'ARGENTINA',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/bosch.png')]
                                    ]
                                ],
                                (object) [
                                    'pais' => 'MÉXICO',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/hp.png')]
                                    ]
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
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores-slide',
                            'slides' =>  [
                                (object) [
                                    'pais' => 'ARGENTINA',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/bosch.png')]
                                    ]
                                ],
                                (object) [
                                    'pais' => 'MÉXICO',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/hp.png')]
                                    ]
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
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores-slide',
                            'slides' =>  [
                                (object) [
                                    'pais' => 'ARGENTINA',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/bosch.png')]
                                    ]
                                ],
                                (object) [
                                    'pais' => 'MÉXICO',
                                    'items' => (object) [
                                        ['logo'=>asset('assets/images/logos/hp.png')]
                                    ]
                                ]
                            ]
                        ]) @endslide
    				</div>
    			</div>
    		</div>
    	
    	</section>

	</main>
@endsection