@extends('layouts.app')

@section('content')

<a href="{{ url('foods') }}?type=halal">Halal</a>
<br/>
<a href="{{ url('foods') }}?type=nonhalal">Non halal</a>

@endsection