@extends('layouts.app')

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
                        <p class="lead">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.
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
                                        <img class="mr-5" src="{{ url('images/menu_1.jpg') }}" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">
                                                <a href="{{ url('foods', ['id' => $food->id]) }}">
                                                    {{ $food->name }}
                                                </a>
                                            </h5>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                                there live the blind texts.</p>
                                            <h6 class="text-primary menu-price">Rp{{ $food->price }}</h6>
                                        </div>
                                    </div>
                                @empty
                                    <div class="media menu-item text-center">
                                        <h1>Food type's not found :(</h1>
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