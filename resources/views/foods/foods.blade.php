@extends('layouts/app')

@section('content')

@foreach($foods as $food)

<pre>
    {{ $food }}
    <br/>
    <a href="{{ url('foods', ['id' => $food->id]) }}">test</a>
</pre>

@endforeach

@endsection