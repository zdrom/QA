@extends('layouts.master')

@section('title')
{{ $campaign->campaign_name }}
@endsection

@section('content')

@component('layouts.header')
{{ $campaign->campaign_name }}
@endcomponent

<div class="col-lg-12">
	<div class="card-group row">
		{{-- @component('layouts.card')

			@slot('body')
			    <p class="mb-0">Salesforce ID: <a target="_blank" href="https://na45.salesforce.com/_ui/search/ui/UnifiedSearchResults?searchType=2&sen=005&sen=006&sen=a0w&str={{ $campaign->salesforce_id }}">{{ $campaign->salesforce_id }}</a></p>
			    <p class="mb-0">Start Date: {{ $campaign->start_date }}</p>
			    <p class="mb-0">End Date: {{ $campaign->end_date }}</p>

				
				@if($campaign->barometric_campaign_id != NULL)
			    <p class="mb-0">Barometric ID: {{ $campaign->barometric_campaign_id }}</p>
			    @endif
			@endslot
		@endcomponent	 --}}

		@component('layouts.card')

		@slot('sizeOption')
		
		@endslot
			
			@slot('body')
				<h4 class="card-title text-center">Creatives</h4>
				<p class="text-center mb-0">✔</p>
			@endslot
		@endcomponent

		@component('layouts.card')

		@slot('sizeOption')
		
		@endslot
			
			@slot('body')
				<h4 class="card-title text-center">Strategies</h4>
				<p class="text-center mb-0">✔</p>
			@endslot
		@endcomponent

		@component('layouts.card')

		@slot('sizeOption')
		
		@endslot
			
			@slot('body')
				<h4 class="card-title text-center">Line Items</h4>
				<p class="text-center mb-0">✔</p>
			@endslot
		@endcomponent
	</div>
</div>
	

@component('layouts.header')
Line Items
@endcomponent

<div class="row">
		@each('lineitem.row',$campaign->lineItems, 'lineItem')
</div>

@component('layouts.header')
Creatives
@endcomponent

<div class="col-lg-12">
	
		@each('creative.row', $creatives, 'creative')

</div>



@endsection