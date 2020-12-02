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
    					<h3>ARGENTINA</h3>
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores',
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
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
    					<h3>COLOMBIA</h3>
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores',
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
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
    					<h3>CHILE</h3>
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores',
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
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
    					<h3>MEXICO</h3>
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores',
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
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
    					<h3>URUGUAY</h3>
    				</div>
    				<div class="row">
    					@slide([
                            'slidesToShow' => 1,
                            'layout' => 'ganadores',
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
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
                            'slidesToShow' => 1,
                            'layout' => 'ganadores',
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS Mac Loves You'
                				]
                				]
            			]) @endslide
    				</div>
    			</div>
    		</div>
    	
    	</section>

	</main>
@endsection