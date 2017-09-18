@extends('layouts.master')

@section('title')
{{ $lineItem->lineitemname }}
@endsection

@section('backButton')
/campaign/{{ $lineItem->campaign->id }}
@endsection

@section('header')
{{ $lineItem->lineitemname }}
@endsection

@section('content')

<div class="row">
	<div class="col-12">
		<div class="card mb-2">
			<div class="card-block">
		    <h4 class="card-title">Goals</h4>
			@include('lineItem.info')
		  </div>
		</div>
	</div>
	<div class="col-12">
		<div class="card mb-2">
		  <div class="card-block">
		    <h4 class="card-title">Strategies</h4>
			    @foreach($lineItem->strategies as $strategy)
			    	<a href="/campaign/{{ $lineItem->campaign->id }}/lineitem/{{ $lineItem->id }}/strategy/{{ $strategy->id }}">
			    		<h6>{{ $strategy->name }}</h6>
			    	</a>
			    	<hr>
			    @endforeach
		  </div>
		</div>
	</div>
</div>

@endsection
