@extends('layouts.app-admin')

@section('title')
    Food Dashboard
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
                        <th>ID Makanan</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Tipe</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($foods as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->description }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->type }}</td>
                    </tr>
                @empty
                  <tr>
                    <td colspan="5" class="text-center">Tidak ada makanan</td>
                  </tr>
                @endforelse
                </tbody>
            </table>
        </div>
  </div>
</div>
@endsection