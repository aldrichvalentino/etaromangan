@component('mail::message')
# Horas, {{ $user->name }}!

## Pesanan Diterima #{{ $order->id }}

@component('mail::table')
| Nama Makanan      | Harga         | Jumlah | Total Harga |
| ------------- |:-------------:|:--------:|------:|
| {{ $food->name }} | {{ $food->price }} | {{ $order->quantity }} |  Rp{{ $order->total }}
@endcomponent

@component('mail::button', ['url' => url($url), 'color' => 'orange'])
Cek Pesanan!
@endcomponent

Mauliate,<br>
{{ config('app.name') }}
@endcomponent
