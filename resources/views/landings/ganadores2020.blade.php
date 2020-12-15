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
        @if($local_lang == 'es')
            @include('landings.ganadores.ganadores_es', [])
        @else
            @include('landings.ganadores.ganadores_pt', [])
        @endif

	</main>
@endsection