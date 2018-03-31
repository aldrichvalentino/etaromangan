@extends('layouts.app-admin')

@section('title')
    Edit Food
@endsection

@section("breadcrumbs")
    {{-- {{ Breadcrumbs::render('dashboard') }} --}}
@endsection

@section('content')

<div class="container mt-4">
    <form class="row justify-content-center" action="{{ url('foods') }}/{{ $food->id }}" method="post">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input type="hidden" value="{{ $food->restaurant_id }}" name="restaurant_id" />
        <div class="col-md-4 img mb-4 text-center">
            <div class="form-group">
                <img width="200px" src="{{ url('images/menu_1.jpg') }}" alt="Free Template by Free-Template.co" class="rounded-circle">
                <input type="file" class="mt-4" name="image" />
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 order-md-first">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" value="{{ $food->name }}" class="form-control mb-4">
                @if($errors->has('name'))
                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif

                <label for="price">Harga</label>
                <input type="text" name="price" value="{{ $food->price }}" class="form-control mb-4">
                @if($errors->has('price'))
                    <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                @endif
                
                <label for="description">Deskripsi</label>
                <textarea type="text" name="description" class="form-control mb-4">{{ $food->description }}</textarea>
                @if($errors->has('description'))
                    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                @endif
                
                <label for="type">Tipe</label>
                <select name="type" class="form-control mb-4">
                    @if($food->type == "halal")
                        <option value="halal" selected>Halal</option>
                        <option value="nonhalal">Non-halal</option>
                    @else
                        <option value="halal">Halal</option>
                        <option value="nonhalal" selected>Non-halal</option>
                    @endif
                </select>
                
                <button type="submit" class="btn btn-primary btn-md">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection