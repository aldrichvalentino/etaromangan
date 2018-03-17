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
        <a href="{{ url('orders', ['create']) }}?food_id={{ $food->id }}&restaurant_id={{ $restaurant->id }}">Pilih</a>
    </div>
@endforeach

@endsection
