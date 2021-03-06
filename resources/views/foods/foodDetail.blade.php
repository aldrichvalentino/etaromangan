@extends('layouts.app')

@section('title')
    {{ $food->name }}
@endsection

@section('content')

<section class="ftco-section bg-light" id="section-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">{{ $food->name }}</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">{{ $food->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 ftco-animate text-center">
                <a href="{{ url('images') }}/{{ $food->image }}" class="ftco-thumbnail image-popup">
                <img src="{{ url('images') }}/{{ $food->image }}" alt="{{ $food->name }}" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>
    
<section class="ftco-section" id="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">Restoran yang Tersedia</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Pilih resto yang kamu suka!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-10 ftco-animate">
                                @foreach ($restaurants as $restaurant)
                                    <div class="media menu-item">
                                        <div 
                                        style="background: url('{{ url('images') }}/{{ $restaurant->image }}'); 
                                        height: 90px; 
                                        width: 90px;  
                                        background-position:center;
                                        background-repeat: no-repeat;" class="rounded-circle mr-4">
                                    </div>
                                    <div class="media-body">
                                        <a class="mt-0" href="{{ url('orders', ['create']) }}?food_id={{ $food->id }}&restaurant_id={{ $restaurant->id }}">
                                            {{ $restaurant->name }}
                                        </a>
                                        <p>
                                            {{ $restaurant->address }} <br />
                                            Phone: {{ $restaurant->phone }} 
                                        </p>
                                        <h6 class="mb-2 text-primary menu-price">Rp{{ $restaurant->price }}</h6>
                                        <p class="mb-0">
                                            <a class="btn btn-primary btn-sm" href="{{ url('orders', ['create']) }}?food_id={{ $food->id }}&restaurant_id={{ $restaurant->id }}">
                                                Pilih!
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
