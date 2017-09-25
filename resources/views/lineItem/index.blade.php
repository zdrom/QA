@extends('layouts.master')

@section('title')
{{ $lineItem->lineitemname }}
@endsection

@section('content')

@each('strategy.row', $lineItem->strategies, 'strategy')

@endsection
