@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
<section class="ftco-section" id="section-about">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-md-5 ftco-animate mb-5">
                <h2 class="ftco-primary-title display-4">{{ $user->name }}</h2>
                <h3 class="ftco-sub-title mb-4">{{ $user->email }}</h3>
                <p><a href="{{ url()->current() }}/edit" class="btn btn-primary btn-md">Edit Profile</a></p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate img order-first mb-5" data-animate-effect="fadeInRight">
                <img width="250px" src="{{ url('images') }}/{{ $user->image }}" alt="Free Template by Free-Template.co" class="rounded-circle">
            </div>
        </div>
    </div>
</section>
<!-- END section -->

@endsection
