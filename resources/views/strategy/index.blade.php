@extends('layouts.master')

@section('title')
{{ $strategy->name }}
@endsection

@section('backButton')
/campaign/{{ $strategy->lineItem->campaign->id }}/lineitem/{{ $strategy->lineItem->id }}
@endsection

@section('header')
{{ $strategy->name }}
@endsection

@section('content')

<div class="row">
	<div class="col-12">
		<div class="card mb-2">
		  <div class="card-block">
		    <h4 class="card-title">Targeting</h4>
		    	<h6>{{ $strategy->name }}</h6>
		    	@include('strategy.geo')
		    	@include('strategy.content')
		    	<hr>
		  </div>
		</div>
	</div>
</div>

@endsection
