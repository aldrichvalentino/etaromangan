@extends('layouts/app')

@section('content')

<a href="{{ url()->current() }}/halal">Halal</a>
<br/>
<a href="{{ url()->current() }}/nonhalal">Non halal</a>

@endsection