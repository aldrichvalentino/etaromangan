@extends('layouts.app')

@section('title')
Order
@endsection

@section('content')
<section class="ftco-section bg-light" id="order-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-3 ftco-animate">
                <h2 class="display-4">Pesan</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">{{ $food_id }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 mb-4">
                <form action="{{ url('orders') }}" method="post" class="ftco-animate">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $food_id }}" name="food_id" />
                    @if($errors->has('food_id'))
                        <div>{{ $errors->first('food_id') }}</div>
                    @endif
                    <input type="hidden" value="{{ $restaurant_id }}" name="restaurant_id" />

                    <div class="form-group">
                        <label for="quantity">Jumlah:</label>
                        <input type="number" placeholder="ex: 10" id="quantity" class="form-control" name="quantity" />
                        @if($errors->has('quantity'))
                            <div>{{ $errors->first('quantity') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea placeholder="ex: Jalan Ganesha No.10, Coblong, Bandung" class="form-control" name="address"></textarea>
                        @if($errors->has('address'))
                            <div>{{ $errors->first('address') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="lead">
                            <div>Total harga = Rp<span id="total">0</span></div>
                            @if($errors->has('total'))
                                <div>{{ $errors->first('total') }}</div>
                            @endif
                        </div>
                    </div>
                    <input type="submit" value="Pesan" class="btn btn-primary btn-sm" />
                </form>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                    <img src="{{ url('images/offer_1.jpg') }}" alt="Free Template by Free-Template.co" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">In Taste Restaurant</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                        <p class="mb-0"><a href="{{ url('foods') }}/{{ $food_id }}" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<script>
    var totalPrice = document.getElementById('total');
    var quantityInput = document.getElementById('quantity');
    quantityInput.onchange = function(){
        totalPrice.innerText = quantityInput.value * {{ $price[0]->price }};
    }
</script>

@endsection