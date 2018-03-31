@extends('layouts.app')

@section('title')
    Edit Profile
@endsection

@section('content')
<section class="ftco-section" id="section-about">
    <form action="{{ url('users') }}/{{ Auth::id() }}" method="POST" class="container">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-5 ftco-animate mb-5">
                <h2 class="ftco-primary-title display-4">Edit Profile</h2>
                <div class="form-group mb-5">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control mb-4" value="{{ $user->name }}" />
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                    @endif

                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control mb-4" placeholder="your password" value="" />
                    @if($errors->has('password'))
                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif

                    <label for="password-retype">Confirm Password:</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" class="form-control mb-4" placeholder="your password" value="" />
                </div>
                <p><button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate img order-first mb-5 text-center" data-animate-effect="fadeInRight">
                <img width="250px" src="{{ url('images/menu_1.jpg') }}" alt="Free Template by Free-Template.co" class="rounded-circle">
                <br/><input type="file" class="mt-4" name="image" />
            </div>
        </div>
    </form>
</section>
<!-- END section -->

@endsection