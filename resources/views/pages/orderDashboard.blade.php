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
        <div class="col-md-10">
            <table class="table table-striped">
                <thead>
                    <tr>    
                        <th>ID Order</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Makanan</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->food_id }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->address }}</td>
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