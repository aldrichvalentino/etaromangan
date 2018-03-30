@extends('layouts.app')

@section('title')
Orders
@endsection

@section('content')
<section class="ftco-section" id="customer-order">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">Pesanan</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item ftco-animate">
                        <a class="nav-link active" id="menu-orders-progress" data-toggle="pill" href="#orders-progress" role="tab" aria-controls="orders-progress"
                            aria-selected="true">Dalam Proses</a>
                    </li>
                    <li class="nav-item ftco-animate">
                        <a class="nav-link" id="menu-orders-done" data-toggle="pill" href="#orders-done" role="tab" aria-controls="orders-done" aria-selected="false">
                            Selesai
                        </a>
                    </li>
                </ul>
                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" id="orders-progress" role="tabpanel" aria-labelledby="orders-progress">
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                @forelse($orders as $order)
                                @if($order->status == "processed")
                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>{{ $order }}</p>
                                            <h6 class="text-primary menu-price">Rp{{ $order->total }}</h6>
                                        </div>
                                    </div>
                                @endif
                                @empty
                                    <h5 class="mt-0">Not found</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="orders-done" role="tabpanel" aria-labelledby="orders-done">
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                @forelse($orders as $order)
                                @if($order->status == "done")
                                    <div class="media menu-item">
                                        <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                        <div class="media-body">
                                            <h5 class="mt-0">Salted Fried Chicken</h5>
                                            <p>{{ $order }}</p>
                                            <h6 class="text-primary menu-price">Rp{{ $order->total }}</h6>
                                        </div>
                                    </div>
                                @endif
                                @empty
                                    <h5 class="mt-0">Not found</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection