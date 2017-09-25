@php($ID = 'ID' . RAND())

<div class="row">
	<div class="col-12 mb-1">

		<a data-toggle="collapse" href="#{{ $ID }}" aria-expanded="false" aria-controls="{{ $ID }}">
			<div class="card-group">
				<div class="card col-lg-1">
					<div class="card-block"></div>
				</div>
				<div class="card col-lg-11">
					<div class="card-block">
							<p class="card-title mb-0">{{ $strategy->name }}</p>
							@include('strategy.geo')
					</div>
				</div>
			</div>
		</a>
		
	</div>
	<div class="col-12 mb-2">

		<div class="collapse" id="{{ $ID }}">

			<div class="card">

				<div class="card-block">

					<p>Content: {{ $strategy->content_appsite_type }}</p>

					<p>Device: {{ $strategy->device_Type }}</p>

					<p>Creatives: {{ $strategy->creatives }}</p>	

				</div>	

			</div>

		</div>

	</div>
</div>