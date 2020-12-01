@extends('layouts.master')
@section('content')
	<main class="main-landing" data-scroll-section="" >
    	<section class="counter bg-gradient">
    		<div class="container">
    			<div class="centered-content">
    				<div class="row"><img class="logo" src="{{ asset('assets/images/logo-awards.svg') }}"></div>
    				<div class="row">
    					<p class="faltan">FALTAN</p>
    				</div>
    				<div class="row">
						<div class="time-left" id="countdown-time">
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
						<div class="row"><span class="countries"><b>13 HS</b> BRA | AR | UY | CL<br><b>11 HS</b> CO<br><b>10 HS</b> MX</span></div>
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
						<p><b>Mercado Ads Awards</b> es nuestra forma de celebrar las mejores estrategias publicitarias del año y de potenciar el negocio de <b>marcas, agencias y vendedores</b> en toda Latinoamérica.</p>
		    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para<br>Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE<br>AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
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
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para<br>Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE<br>AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
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
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para<br>Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE<br>AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
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
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para<br>Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE<br>AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
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
                			'slides' =>  [
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para<br>Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE<br>AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
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
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/skip.png'),
                					'title' => 'Campaña',
                					'text' => 'Para<br>Diluir'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/clinique.png'),
                					'title' => 'Campaña',
                					'text' => 'OFFICIAL STORE<br>AT MELI'
                				],
                				(object) [
                					'logo'=>asset('assets/images/logos/mac.png'),
                					'title' => 'Campaña',
                					'text' => 'LOVES LIPS<br>Mac Loves You'
                				]
                				]
            			]) @endslide
    				</div>
    			</div>
    		</div>
    	
    	</section>

	</main>
@endsection