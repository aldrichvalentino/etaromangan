@extends('layouts.app-admin')

@section('title')
    Order Dashboard
@endsection

@section("breadcrumbs")
    {{-- {{ Breadcrumbs::render('dashboard') }} --}}
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>    
                        <th scope="col">ID Order</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nama Makanan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>{{ $order->food_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->address }}</td>
                        <td>@if( $order->status == "processed")
                            Dalam Proses
                            @else
                            Selesai
                            @endif
                        <br/>
                        @if( $order->status == "processed")
                            <button class="btn btn-primary btn-sm" 
                                onclick="
                                    var r = confirm('Apakah Anda yakin untuk mengubah status pesanan menjadi selesai?');
                                    if (r) document.getElementById('order-form-{{ $order->id }}').submit();
                                    ">
                                Selesaikan Pesanan
                            </button>
                            <form id="order-form-{{ $order->id }}" action="{{ url('orders') }}/{{ $order->id }}" method="POST" style="display: none">
                                @csrf
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="orderID" value="{{ $order->id }}">
                            </form>
                        @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                    <td colspan="7" class="text-center">Tidak ada pesanan</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
  </div>
</div>
@endsection