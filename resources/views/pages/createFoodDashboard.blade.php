@extends('layouts.app-admin')

@section('title')
    Create Food
@endsection

@section("breadcrumbs")
    {{-- {{ Breadcrumbs::render('dashboard') }} --}}
@endsection

@section('content')

<div class="container mt-4">
    <form class="row justify-content-center" action="{{ route('foods.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" value="{{ $restaurant_id }}" name="restaurant_id" />
        <div class="col-md-4 img mb-4 text-center">
            <div class="form-group">
                <img width="200px" src="{{ url('images/default_food.png') }}" class="rounded-circle">
                <input type="file" class="mt-4" name="image" />
                @if($errors->has('image'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('image') }}</div>
                @endif
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 order-md-first mb-4">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" value="" class="form-control mb-4">
                @if($errors->has('name'))
                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif

                <label for="price">Harga</label>
                <input type="text" name="price" value="" class="form-control mb-4">
                @if($errors->has('price'))
                    <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                @endif
                
                <label for="description">Deskripsi</label>
                <textarea type="text" name="description" class="form-control mb-4"></textarea>
                @if($errors->has('description'))
                    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                @endif
                
                <label for="type">Tipe</label>
                <select name="type" class="form-control mb-4">
                    <option value="halal">Halal</option>
                    <option value="nonhalal">Non-halal</option>
                </select>
                
                <button type="submit" class="btn btn-primary btn-md">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection