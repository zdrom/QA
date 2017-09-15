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

<div class="row">
	<div class="col-12">
		<div class="card mb-2">
		  <div class="card-block">
		    <h4 class="card-title">Overview</h4>
		    <p class="mb-0">Salesforce ID: <a target="_blank" href="https://na45.salesforce.com/_ui/search/ui/UnifiedSearchResults?searchType=2&sen=005&sen=006&sen=a0w&str={{ $campaign->salesforce_id }}">{{ $campaign->salesforce_id }}</a></p>
		    <p class="mb-0">Start Date: {{ $campaign->start_date }}</p>
		    <p class="mb-0">End Date: {{ $campaign->end_date }}</p>
		    <p class="mb-0">Start Date: {{ $campaign->barometric_campaign_id }}</p>
		  </div>
		</div>
		<div class="card">
		  <div class="card-block">
		    <h4 class="card-title">Line Items</h4>
		    @foreach($campaign->lineItems as $lineItem)
		    <a href="/lineItem/{{ $lineItem->id }}">
		    	<p>{{ $lineItem->lineitemname }}</p>
		    </a>
		    <hr>
		    @endforeach
		  </div>
		</div>
	</div>
</div>

@endsection