@extends('layouts.master')
@section('content')
	<main class="main-landing" data-scroll-section="" >
    	<section class="counter bg-gradient">
    		<div class="container">
    			<div class="centered-content">
    				<div class="row"><img class="logo" src="{{ asset('assets/images/logo-awards.svg') }}"></div>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert-custom">{{$lang_text['text-10']}}</p>
                        </div>
                    </div>
    				<div class="row">
    					<div class="video">
                            
                                <iframe width="100%" height="100%" src="{{$lang_text['text-11']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         
 
                        </div>
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