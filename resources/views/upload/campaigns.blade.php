@extends('layouts.master')

@section('title')
All Campaigns
@endsection

@section('allCampaignsActive')
active
@endsection

@section('header')
Campaigns
@endsection

@section('backButton')
/
@endsection

@section('content')

	<div class="row">

	@foreach ($campaigns as $campaign)

		<div class="col-12 mb-2">
				<div class="card">
				  <div class="card-block">
				    <h4 class="card-title"> <a href="/campaign/{{$campaign->id}}">{{ $campaign->campaign_name }}</a></h4>
				    <h6 class="mb-1 card-subtitle text-muted"><strong>Salesforce ID:</strong> {{ $campaign->salesforce_id }}</h6>
				    <h6 class="mb-0"><small>{{ $campaign->user->name }} | {{ $campaign->created_at->diffForHumans() }}</small></h6>
				  </div>
				</div>
		</div><!--Col-->

	@endforeach

	</div><!--Row-->
</div><!--container-->

@endsection