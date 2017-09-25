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

@each('creative.row', $creatives, 'creative')

@endsection