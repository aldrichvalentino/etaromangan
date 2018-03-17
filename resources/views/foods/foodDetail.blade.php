@extends('layouts/app')

@section('content')

{{ $food->name }}
{{ $food->halal }}
{{ $food->price }}
<br/>
<br/>

<div>Pilih restoran</div>
@foreach ($restaurants as $restaurant)
    <div>
        {{ $restaurant->name }}
        {{ $restaurant->address }}
        {{ $restaurant->phone }}
        <a href="">Pilih</a>
    </div>
@endforeach

@endsection
