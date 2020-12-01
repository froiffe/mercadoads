<div class="slide-mp">
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