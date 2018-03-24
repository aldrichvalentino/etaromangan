@extends('layouts/app')

@section('content')

@forelse($orders as $order)
    <div>{{ $order }}</div>
@empty
    <h1>Not Found</h1>
@endforelse

{{ $orders->links() }}

@endsection