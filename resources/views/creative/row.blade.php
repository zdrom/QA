@php($ID = 'ID' . RAND())

<div class="card-group row">		
	@component('layouts.card')
		@slot('sizeOption')
		col-1
		@endslot
		@slot('body')
			<a data-toggle="collapse" href="#CHECK{{ $ID }}" aria-expanded="false" aria-controls="CHECK{{ $ID }}">	
				<p class="text-center mb-0">
					@if($creative['sizeCheck'] !== 1 || $creative['macroCheck'] !== 1 || $creative['placementIDCheck'] !== 1)
					✘
					@else
					✔︎
					@endif
				</p>
			</a>
		@endslot	
	@endcomponent
	@component('layouts.card')
	@slot('sizeOption')
	col-11
	@endslot
		@slot('body')
			<a data-toggle="collapse" href="#{{ $ID }}" aria-expanded="false" aria-controls="{{ $ID }}">	
				<p class="card-title mb-0">{{ $creative['creativeName'] }}</p>
			</a>
		@endslot	
	@endcomponent		
</div>


<div class="collapse" id="{{ $ID }}">
	@component('layouts.card')
	@slot('sizeOption')
	col-12
	@endslot
		@slot('body')		

			@foreach($creative['trackingTags'] as $index => $trackingTag)
				<p><code>{{ $trackingTag['tracking_tag'] }}</code></p>
			@endforeach
			
		@endslot	
	@endcomponent
</div>

<div class="collapse" id="CHECK{{ $ID }}">
	<div class="card-group">
		@component('layouts.card')
		@slot('sizeOption')
		@endslot

		@slot('body')
		<h4 class="text-center">Size</h4>
		<p class="text-center mb-0">
			@if($creative['sizeCheck'] !== 1)
			✘
			@else
			✔︎
			@endif
		</p>
		@endslot
		@endcomponent
		@component('layouts.card')
		@slot('sizeOption')
		@endslot

		@slot('body')
		<h4 class="text-center">Placement ID</h4>
		<p class="text-center mb-0">
			@if($creative['placementIDCheck'] !== 1)
			✘
			@else
			✔︎
			@endif
		</p>
		@endslot
		@endcomponent
		@component('layouts.card')
		@slot('sizeOption')
		@endslot

		@slot('body')
		<h4 class="text-center">Click Macro</h4>
		<p class="text-center mb-0">
			@if($creative['macroCheck'] !== 1)
			✘
			@else
			✔︎
			@endif
		</p>
		@endslot
		@endcomponent
	</div>
</div>


