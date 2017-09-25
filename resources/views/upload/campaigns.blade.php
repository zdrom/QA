@extends('layouts.master')

@section('title')
All Campaigns
@endsection

@section('allCampaignsActive')
active
@endsection

@section('content')

	<div class="row">

	@each('campaign.row', $campaigns, 'campaign')

	</div><!--Row-->
</div><!--container-->

@endsection