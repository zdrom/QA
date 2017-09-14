@extends('layouts.master')

@section('title')
Strategy
@endsection

@section('content')

<div class="row">
	<div class="col-1">
	<a href="/lineItem/{{ $strategy->lineItem->id }}">
		<p>back</p>
	</a>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<h3>{{ $strategy->name }}</h3>
	</div>		
</div>

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
