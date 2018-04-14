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
                        <p class="lead">{{ $food_info[0]->name }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 mb-4">
                <form action="{{ url('orders') }}" method="post" class="ftco-animate">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $food_id }}" name="food_id" />
                    @if($errors->has('food_id'))
                        <div class="alert alert-danger mt-2">{{ $errors->first('food_id') }}</div>
                    @endif
                    <input type="hidden" value="{{ $restaurant_info[0]->id }}" name="restaurant_id" />

                    <div class="form-group">
                        <label for="quantity">Jumlah:</label>
                        <input type="number" placeholder="ex: 10" id="quantity" class="form-control" name="quantity" />
                        @if($errors->has('quantity'))
                            <div class="alert alert-danger mt-2">{{ $errors->first('quantity') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor Telepon:</label>
                        <input type="text" placeholder="ex: 08XXXXXXXXX" id="phone" class="form-control" name="phone" />
                        @if($errors->has('phone'))
                            <div class="alert alert-danger mt-2">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea placeholder="ex: Jalan Ganesha No.10, Coblong, Bandung" class="form-control" name="address"></textarea>
                        @if($errors->has('address'))
                            <div class="alert alert-danger mt-2">{{ $errors->first('address') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="lead">
                            <div>Total harga = Rp<span id="total">0</span></div>
                            <span class="alert-warning font-italic">Harga belum termasuk ongkos kirim sebesar Rp5000/km</span>
                            @if($errors->has('total'))
                                <div class="alert alert-danger">{{ $errors->first('total') }}</div>
                            @endif
                        </div>
                    </div>
                    <input type="submit" value="Pesan" class="btn btn-primary btn-sm" />
                </form>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                    <img src="{{ url('images') }}/{{ $food_info[0]->image }}" alt="{{ $food_info[0]->name }}" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">{{ $restaurant_info[0]->name }}</h5>
                        <h5 class="mt-0 h4">{{ $food_info[0]->name }}</h5>
                        <p class="mb-4">{{ $food_info[0]->description }}</p>
                        <p class="mb-0"><a href="{{ url('foods') }}/{{ $food_id }}" class="btn btn-primary btn-sm">Baca lebih lanjut</a></p>
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
        totalPrice.innerText = quantityInput.value * {{ $food_info[0]->price }};
    }
</script>

@endsection