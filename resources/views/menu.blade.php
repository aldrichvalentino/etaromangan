@extends('layouts/app')

@section('content')

<a href="{{ url('foods') }}?halal=1">Halal</a>
<br/>
<a href="{{ url('foods') }}?halal=0">Non halal</a>

@endsection