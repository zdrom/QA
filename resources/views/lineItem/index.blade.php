@extends('layouts.master')

@section('title')
Line Item
@endsection

@section('content')

<div class="row">
	<div class="col-1">
	<a href="/campaign/{{ $lineItem->campaign->id }}">
		<p>back</p>
	</a>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<h3>{{ $lineItem->lineitemname }}</h3>
	</div>		
</div>

<div class="row">
	<div class="col-12">
		<div class="card mb-2">
		  <div class="card-block">
		    <h4 class="card-title">Strategies</h4>
			    @foreach($lineItem->strategies as $strategy)
			    	<p>{{ $strategy->name }}</p>
			    <hr>
			    @endforeach
		  </div>
		</div>
	</div>
</div>

@endsection
