<div class="col-lg-6">
@component('layouts.card')
@slot('sizeOption')
col-12
@endslot
	@slot('body')
	<h5 class="card-title mb-0"> <a href="/campaign/{{$campaign->id}}">{{ $campaign->campaign_name }}</a></h5>
	<h6 class="mb-0"><small>{{ $campaign->created_at->diffForHumans() }}</small></h6>
	@endslot	
@endcomponent
</div>