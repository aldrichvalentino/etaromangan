@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
                <h1 class="ftco-heading ftco-animate mb-3">ETA RO MANGAN!</h1>
                <h2 class="h5 ftco-subheading mb-5 ftco-animate">Horas ! Selamat datang di zona makan Medan. Eta Ro Mangan kawan !</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="section-offer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h4 class="ftco-sub-title">Tentang Kami</h4>
                <h2 class="display-4">Horas !</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Web ini didirikan pada bulan April 2018 kawan. Web ini bertujuan untuk menyediakan makanan khas Medan. Namun, menu yang kita sediakan masih disesuaikan dengan menu yang ada di restoran penjual makanan khas Medan. Tapi, tenang kawan. Kita pasti usahakan untuk bisa menyediakan semua makanan medan yang bisa dipesan.
                                Yuk. Sekarang pesan dulu aja yang kawan suka di menu yang kita sediakan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="section-gallery">
    <div class="container">
        <div class="row ftco-custom-gutters text-center">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">Galeri Makanan</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Menu yang paling enak dan murah ada ini aja nih kawan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/bikaAmbon.jpg" class="ftco-thumbnail image-popup">
                <img src="images/bikaAmbon.jpg" alt="Bika Ambon" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/boluMeranti.jpg" class="ftco-thumbnail image-popup">
                <img src="images/boluMeranti.jpg" alt="Bolu Meranti" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/cakeDurian.jpg" class="ftco-thumbnail image-popup">
                <img src="images/cakeDurian.jpg" alt="Durian Cake" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/LemangTebingTinggi.jpg" class="ftco-thumbnail image-popup">
                <img src="images/LemangTebingTinggi.jpg" alt="Lemang Tebing Tinggi" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/lappet.jpg" class="ftco-thumbnail image-popup">
                <img src="images/lappet.jpg" alt="Lappet" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/saksang.png" class="ftco-thumbnail image-popup">
                <img src="images/saksang.png" alt="Saksang" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/lontongMedan.jpg" class="ftco-thumbnail image-popup">
                <img src="images/lontongMedan.jpg" alt="Lontong Medan" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/mieGomak.jpg" class="ftco-thumbnail image-popup">
                <img src="images/mieGomak.jpg" alt="Mie Gomak" class="img-fluid">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/ikanMasArsik.jpg" class="ftco-thumbnail image-popup">
                <img src="images/ikanMasArsik.jpg" alt="Ikan Mas Arsik" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    // scroll
    var scrollWindow = function() {
    $(window).scroll(function() {
        var $w = $(this),
        st = $w.scrollTop(),
        navbar = $(".ftco_navbar"),
        sd = $(".js-scroll-wrap");

        if (st > 150) {
        if (!navbar.hasClass("scrolled")) {
            navbar.addClass("scrolled");
        }
        }
        if (st < 150) {
        if (navbar.hasClass("scrolled")) {
            navbar.removeClass("scrolled sleep");
        }
        }
        if (st > 350) {
        if (!navbar.hasClass("awake")) {
            navbar.addClass("awake");
        }

        if (sd.length > 0) {
            sd.addClass("sleep");
        }
        }
        if (st < 350) {
        if (navbar.hasClass("awake")) {
            navbar.removeClass("awake");
            navbar.addClass("sleep");
        }
        if (sd.length > 0) {
            sd.removeClass("sleep");
        }
        }
    });
    };
scrollWindow();
</script>
@endsection