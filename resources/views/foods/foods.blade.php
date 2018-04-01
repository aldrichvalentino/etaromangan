@extends('layouts.app')

@section('title')
@if($type === 'halal')
Menu Halal
@elseif($type === 'nonhalal')
Menu Non-Halal
@endif
@endsection

@section('navbar-additional-class')
scrolled awake
@endsection

@section('content')
<section class="ftco-section" id="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item ftco-animate">
                        <a class="nav-link {{ $type === "halal" ? "active" : "" }}" href="{{ url('/menu/halal') }}">
                            Halal
                        </a>
                    </li>
                    <li class="nav-item ftco-animate">
                        <a class="nav-link {{ $type === "nonhalal" ? "active" : "" }}" href="{{ url('/menu/nonhalal') }}">
                            Non-Halal
                        </a>
                    </li>
                </ul>
                <h2 class="display-4">
                    {{ $type === "halal" ? "Halal" : "Non-Halal" }}'s Food
                </h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Kau bebas wak mau pilih menu halal dan non halal. Pilih yang kau suka aja la.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="text-left">
                    <div class="fade show active">
                        <div class="row">
                            <div class="col-md-12 ftco-animate">
                                @forelse($foods as $food)
                                    <div class="media menu-item">
                                        {{-- <img class="mr-5" src="{{ url('images') }}/{{ $food->image }}" class="img-fluid" alt="Free Template by Free-Template.co"> --}}
                                        <div 
                                            style="background: url('{{ url('images') }}/{{ $food->image }}'); 
                                            height: 90px; 
                                            width: 90px; 
                                            margin: auto; 
                                            background-position:center" class="rounded-circle mr-4">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">
                                                <a href="{{ url('foods', ['id' => $food->id]) }}">
                                                    {{ $food->name }}
                                                </a>
                                            </h5>
                                            <p>{{ $food->description }}</p>
                                            <h6 class="text-primary menu-price">Rp{{ $food->price }}</h6>
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-center">
                                        <p class="lead">Makanan tidak ditemukan :(</p>
                                    </div>
                                @endforelse

                                <div class="col-md-12 text-center">
                                    {{ $foods->links('includes.app.paginator') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection