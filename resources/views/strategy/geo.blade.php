@if($strategy->geography_zip !== NULL)
<p>Geo | Zip : {{ $strategy->geography_zip }}</p>
@endif

@if($strategy->geography_mosaics !== NULL)
<p>Geo | Mosaic : {{ $strategy->geography_mosaics }}</p>
@endif

@if($strategy->geography_coordinates !== NULL)
<p>Geo | LatLong : {{ $strategy->geography_coordinates }}</p>
@endif

@if($strategy->geography_dma !== NULL)
<p>Geo | DMA : {{ $strategy->geography_dma }}</p>
@endif