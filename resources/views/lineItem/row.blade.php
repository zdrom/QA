@php($ID = 'ID' . RAND())

<div class="col-lg-12">
	@component('layouts.card')
	@slot('sizeOption')
	col-12
	@endslot
		@slot('body')
		<a data-toggle="collapse" href="#{{ $ID }}" aria-expanded="false" aria-controls="{{ $ID }}">	
			<p class="card-title mb-0">{{ $lineItem->lineitemname }}</p>	
		</a>
		@endslot	
	@endcomponent
</div>
<div class="col-lg-12">
	<div class="collapse" id="{{ $ID }}">

		@component('layouts.card')
		@slot('sizeOption')
		col-12
		@endslot
			@slot('body')
			@endslot
		@endcomponent

	</div>
</div>