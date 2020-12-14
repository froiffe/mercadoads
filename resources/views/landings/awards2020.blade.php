@extends('layouts.master')
@section('content')
	<main class="main-landing" data-scroll-section="" >
    	@include('landings.headers.winners', [])
        {{--@include('landings.headers.counter', [])--}}

        @if($local_lang == 'es')
            @include('landings.nominados.nominados_es', [])
        @else
            @include('landings.nominados.nominados_pt', [])
        @endif
	</main>
@endsection