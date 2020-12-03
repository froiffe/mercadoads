<div class="slide-mp  @isset($layout) {{$layout}} @else ganadores-slide @endisset" @isset($slidesToShow) slides-to-show="{{$slidesToShow}}" @else slides-to-show="3" @endisset>
	@foreach($slides as $slide)
		<div>
	    	<div class="slide">

	    		<div class="row">
	    			<h3>{{$slide->pais}}</h3>
	    			
		    		@foreach($slide->items as $item)
		    			<div class="col-info">
			    			<div class="content-logo">
			    				<img class="logo" src="{{ $item['logo'] }}">
			    			</div>
		    			</div>
		    		@endforeach
	    		</div>
	    		@isset($slide->title)
	    		<div class="content-text">
	    			<span class="text-01">{{$slide->title}}</span>
	    			<span class="text-02">{!! $slide->text !!}</span>
	    		</div>
	    		@endisset
	    	</div>
	    </div>
	@endforeach
</div>