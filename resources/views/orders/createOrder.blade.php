@extends('layouts/app')

@section('content')

<form action="{{ url('orders') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $food_id }}" name="food_id" />
    @if($errors->has('food_id'))
        <div>{{ $errors->first('food_id') }}</div>
    @endif

    <input type="hidden" value="{{ $restaurant_id }}" name="restaurant_id" />
    
    <label>Quantity : <input type="number" value="0" id="quantity" name="quantity" /></label><br/>
    @if($errors->has('quantity'))
        <div>{{ $errors->first('quantity') }}</div>
    @endif
    
    <div>Total harga = <span id="total">0</span></div>
    @if($errors->has('total'))
        <div>{{ $errors->first('total') }}</div>
    @endif

    <label>Address : <textarea placeholder="your address" name="address"></textarea><br/></label><br/>
    @if($errors->has('address'))
        <div>{{ $errors->first('address') }}</div>
    @endif
    
    <input type="submit" value="Pesan" />
    <br/>

</form>

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