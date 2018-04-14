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

<section class="ftco-section" id="section-about">
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

<section class="ftco-section bg-light" id="section-food">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h4 class="ftco-sub-title">Makanan</h4>
                <h2 class="display-4">Galeri Makanan</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Menu yang paling enak dan murah ada ini aja nih kawan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel ftco-owl">
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/bikaAmbon.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Bika Ambon</h5>
                                <p class="mb-4">Bika ambon adalah salah satu makanan favorit di Medan wak. Walaupun ada nama Ambon namun makanan ini berasal dari Medan. Katanya dulu makanan ini dijual di salah satu jalan yg ada di Medan yang bernama Bika. Tapi ada juga yang bilang dulu makanan ini dibuat oleh orang Ambon yang sudah lama menetap di Medan. Hmm, pokoknya ini enak kali lah wak.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/boluMeranti.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Bolu Meranti</h5>
                                <p class="mb-4">Bolu meranti adalah bolu andalan Medan yang sudah terkenal di seluruh Indonesia. Teksturnya yang sangat lembut ini wak,  bikin orang ketagihan. Apalagi hal yang paling ditonjolkan di bolu ini adalah keju yang sangat melimpah. Hemm,  oh iya wak,  Bolu Meranti skrg sudah memiliki banyak varian rasa,  mulai dari coklat,  keju,  blueberry, strawberry wak. Aduhh kau bayangkan sendiri ajalah dulu kek mana rasanya. Baru kau pesan aja. Hehe</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/cakeDurian.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Pancake Durian</h5>
                                <p class="mb-4">Pancake durian Medan adalah menu yang tidak boleh dilewatkan apabila kita sedang di Medan. Durian Medan yang sangat enak karena rasanya manis dan murah tentu akan lebih nikmat lagi apabila dijadikan sebagai pancake.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/LemangTebingTinggi.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Lemang</h5>
                                <p class="mb-4">Lemang adalah beras pulut yang dimasak di sebuah bambu dan sebelumnya dilapisi daun pisang terlebih dahulu. Cara memasak nya itu dibakar. Rasanya juga enak dan lembut. Banyak yang menyukai makanan ini. Biasanya penjual lemang akan menjajakan makanan ini di sepanjang jalan Medan</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/lappet.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Lappet</h5>
                                <p class="mb-4">Lappet adalah menu jajanan yang biasanya di sajikan di acara adat. Terbuat dari beras dan ketan. Ditengah makanan ini biasanya ditambahkan gula merah. Rasanya manis dan lembut.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/saksang.png" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Saksang</h5>
                                <p class="mb-4">Saksang adalah menu andalan orang Medan khusunya yang bersuku Batak. Makanan ini biasanya disajikan pada saat acara penting seperti pernikahan, adat,  dan lain sebagainya. Daging saksang ini terbuat dari babi. Dagingnya juga empuk dan harum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/lontongMedan.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Soto Medan</h5>
                                <p class="mb-4">Soto Medan sangat di rekomendasikan untuk dimakan oleh para penikmat soto. Rasanya sangat enak apalagi santan dan sambalnya yang menjadi bagian paling enak.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/mieGomak.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Mie Gomak</h5>
                                <p class="mb-4">Mie Gomak terkenal juga dengan sebutan Pasta ala Medan. Mie gomak sangat enak karna rempah rempah yang dibuat di mie ini membuat semakin harum dan lezat. Mie gomak juga biasa disediakan dalam bentuk mie gomak kuah atau goreng. Mantaplah</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/ikanMasArsik.jpg" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="mt-0 h4">Ikan Mas Arsik</h5>
                                <p class="mb-4">Ikan mas Arsik sama halnya dengan saksang,  makanan ini biasanya disajikan pada saat acara penting seperti pernikahan adat dan lain sebagainya. Menu ini termasuk makanan sakral karena tidak semua orang yang bisa menyajikan makanan ini di acara adat.  Rasanya sangat enak juga. Sepertinya semua makanan Medan enak :)</p>
                            </div>
                        </div>
                    </div>
                </div>
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