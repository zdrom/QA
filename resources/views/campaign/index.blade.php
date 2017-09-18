@extends('layouts.master')

@section('title')
{{ $campaign->campaign_name }}
@endsection

@section('header')
{{ $campaign->campaign_name }}
@endsection

@section('backButton')
/
@endsection

@section('content')

<div class="row justify-content-center">
	<div class="col-12">
		<div class="card-deck">
			<div class="card text-center mb-2">
				<div class="card-block">
					<h4 class="card-title">Line Items</h4>
					<h4>✅</h4>
				</div>
			</div>
			<div class="card text-center mb-2">
				<div class="card-block">
					<h4 class="card-title">Strategies</h4>
					<h4>✅</h4>
				</div>
			</div>
			<div class="card text-center mb-2">
				<div class="card-block">
					<h4 class="card-title">Creatives</h4>
					<h4>✅</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card mb-2">
		  <div class="card-block">
		    <h4 class="card-title">Overview</h4>
		    <p class="mb-0">Salesforce ID: <a target="_blank" href="https://na45.salesforce.com/_ui/search/ui/UnifiedSearchResults?searchType=2&sen=005&sen=006&sen=a0w&str={{ $campaign->salesforce_id }}">{{ $campaign->salesforce_id }}</a></p>
		    <p class="mb-0">Start Date: {{ $campaign->start_date }}</p>
		    <p class="mb-0">End Date: {{ $campaign->end_date }}</p>
		    <p class="mb-0">Start Date: {{ $campaign->barometric_campaign_id }}</p>
		  </div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="card mb-2">
		  <div class="card-block">
		    <a href="/campaign/{{ $campaign->id }}/creatives">
		    	<h4 class="card-title">Creatives</h4>
		    </a>
		  </div>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="card">
		  <div class="card-block">
		    <h4 class="card-title">Line Items</h4>
		    @foreach($campaign->lineItems as $lineItem)
		    <a href="/campaign/{{ $campaign->id }}/lineitem/{{ $lineItem->id }}">
		    	<p>{{ $lineItem->lineitemname }}</p>
		    </a>
		    <hr>
		    @endforeach
		  </div>
		</div>
	</div>
</div>

@endsection