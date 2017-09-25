@if($strategy->geography_zip !== NULL)
<p>Geo Zip: {{ $strategy->geography_zip }}</p>
@endif

@if($strategy->geography_mosaics !== NULL)
<p>Geo Mosaic: {{ $strategy->geography_mosaics }}</p>
@endif

@if($strategy->geography_coordinate !== NULL)
<p>Geo Lat/Long: {{ $strategy->geography_coordinate }}</p>
@endif

@if($strategy->geography_dma !== NULL)
<p>Geo DMA: {{ $strategy->geography_dma }}</p>
@endif

@if($strategy->geography_state !== NULL)
<p>Geo State: {{ $strategy->geography_state }}</p>
@endif

@if($strategy->geography_city !== NULL)
<p>Geo City: {{ $strategy->geography_city }}</p>
@endif

@if($strategy->geography_proximity !== NULL)
<p>Geo Proximity: {{ $strategy->geography_proximity }}</p>
@endif