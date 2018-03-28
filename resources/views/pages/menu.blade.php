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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                    texts.</p>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                    country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="{{ url()->current() }}/halal" class="btn btn-secondary btn-lg">Cari lebih lanjut!</a></p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
                <img src="images/about_img_1.jpg" alt="Free Template by Free-Template.co">
            </div>
        </div>
    </div>
</section>
<section class="ftco-section" id="section-about-left">
    <div class="container">
        <div class="row">
            <div class="ftco-animate img" data-animate-effect="fadeInLeft">
                <img src="images/about_img_1.jpg" alt="Free Template by Free-Template.co">
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-5 ftco-animate mb-5">
                <h4 class="ftco-sub-title">Makanan</h4>
                <h2 class="ftco-primary-title display-4">Non Halal</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                    texts.</p>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                    country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="{{ url()->current() }}/nonhalal" class="btn btn-secondary btn-lg">Cari lebih lanjut!</a></p>
            </div>
        </div>
    </div>
</section>

@endsection