@extends('layouts/app')

@section('content')

@foreach($orders as $order)
    <div>{{ $order }}</div>
@endforeach

@endsection