@extends('layouts/app')

@section('content')

@if (count($foods) === 0)

    <h1>Not found</h1>

@else 

    @foreach($foods as $food)

    <pre>
        {{ $food }}
        <br/>
        <a href="{{ url('foods', ['id' => $food->id]) }}">Lihat</a>
    </pre>

    @endforeach

@endif

@endsection