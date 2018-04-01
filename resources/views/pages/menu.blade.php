@extends('layouts.app')

@section('title')
Menu Makanan
@endsection

@section('content')
<section class="ftco-section" id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ftco-animate mb-5">
                <h4 class="ftco-sub-title">Makanan</h4>
                <h2 class="ftco-primary-title display-4">Halal</h2>
                <p class="mb-4">Menampilkan daftar menu makanan yang tidak mengandung unsur haram.</p>
                <p><a href="{{ url()->current() }}/halal" class="btn btn-secondary btn-lg">Cari lebih lanjut!</a></p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
                <img width="800px" src="images/about_img_1.jpg">
            </div>
        </div>
    </div>
</section>
<section class="ftco-section" id="section-about-left">
    <div class="container">
        <div class="row">
            <div class="ftco-animate img mb-4" data-animate-effect="fadeInLeft">
                <img width="800px" src="images/about_img_1.jpg">
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-5 ftco-animate">
                <h4 class="ftco-sub-title">Makanan</h4>
                <h2 class="ftco-primary-title display-4">Non Halal</h2>
                <p class="mb-4">Menampilkan daftar menu makanan yang mengandung unsur haram.</p>
                <p><a href="{{ url()->current() }}/nonhalal" class="btn btn-secondary btn-lg">Cari lebih lanjut!</a></p>
            </div>
        </div>
    </div>
</section>

@endsection