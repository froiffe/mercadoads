<div class="slide-mp  @isset($layout) ganadores-slide @else awards-slide @endisset" @isset($slidesToShow) slides-to-show="{{$slidesToShow}}" @else slides-to-show="3" @endisset>
	@foreach($slides as $slide)
		<div>
	    	<div class="slide">

	    		<div class="content-logo">
	    			<img class="logo" src="{{ $slide->logo }}">
	    		</div>
	    		<div class="content-text">
	    			<span class="text-01">{{$slide->title}}</span>
	    			<span class="text-02">{!! $slide->text !!}</span>
	    		</div>
	    	</div>
	    </div>
	@endforeach
</div>