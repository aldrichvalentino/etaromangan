@extends('layouts.app')

@section('content')

@forelse($foods as $food)
    <pre>
        {{ $food->name }}
        {{ $food->type }}
        <a href="{{ url('foods', ['id' => $food->id]) }}">Lihat</a>
    </pre>
@empty
    <h1>Not found</h1>
@endforelse

{{ $foods->links() }}

@endsection