@extends('layouts.app-admin')

@section('title')
    Edit Restaurant
@endsection

@section("breadcrumbs")
    {{-- {{ Breadcrumbs::render('dashboard') }} --}}
@endsection

@section('content')

<div class="container mt-4">
    <form class="row justify-content-center" action="{{ url('users') }}/{{ Auth::id() }}" method="post" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="col-md-4 img mb-4 text-center">
            <div class="form-group">
                <div
                style="background: url('{{ url('images') }}/{{ $userData->image }}'); height: 250px; width:250px; margin: auto; background-position:center; background-repeat: no-repeat;" class="rounded-circle"></div>
                <br/><input type="file" class="mt-4" name="image" />
                @if($errors->has('image'))
                    <div class="alert alert-danger mt-4">{{ $errors->first('image') }}</div>
                @endif
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 order-md-first">
            <div class="form-group">
                <label for="name">Nama Restoran</label>
                <input type="text" name="name" value="{{ $userData->name }}" class="form-control mb-4">
                @if($errors->has('name'))
                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif

                <label for="name">Alamat Restoran</label>
                <input type="text" name="address" value="{{ $restaurantData->address }}" class="form-control mb-4">
                @if($errors->has('address'))
                    <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                @endif
                
                <label for="name">Telepon</label>
                <input type="text" name="phone" value="{{ $restaurantData->phone }}" class="form-control mb-4">
                @if($errors->has('phone'))
                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                @endif
                
                <label for="name">Password</label>
                <input type="password" name="password" value="" class="form-control mb-4">
                @if($errors->has('password'))
                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                @endif
                
                <label for="name">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" value="" class="form-control mb-4">
                <button type="submit" class="btn btn-primary btn-md">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection