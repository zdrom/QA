@extends('layouts.master')

@section('title')
{{ $campaign->campaign_name }} | Creatives
@endsection

@section('header')
{{ $campaign->campaign_name }} | Creatives
@endsection

@section('backButton')
/campaign/{{ $campaign->id }}
@endsection

@section('content')

@foreach($campaign->creatives as $creative)

<div class="row">
	<div class="col-12">
		<div class="card mb-2">
			<div class="card-block">
				<h4 class="card-title">{{ $creative->creative_name }}</h4>
				<p><xmp>{{ $creative->tracking_tag }}</xmp></p>
			</div>
		</div>
	</div>
</div>

@endforeach

@endsection