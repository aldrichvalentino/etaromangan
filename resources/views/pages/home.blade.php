@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
                <h1 class="ftco-heading ftco-animate mb-3">Welcome To Taste Restaurant</h1>
                <h2 class="h5 ftco-subheading mb-5 ftco-animate">A free template for Restaurant Websites Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></h2>
                <p><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal"
                        data-target="#reservationModal">Reservation</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="section-offer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h4 class="ftco-sub-title">Our Offers</h4>
                <h2 class="display-4">Offers &amp; Promos</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel ftco-owl">
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef with Sauce</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef Ribs</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef with Sauce</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef Ribs</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef with Sauce</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Fresh Salmon Fish</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
                            <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                            <div class="media-body p-md-5 p-4">
                                <h5 class="text-primary">$39.50</h5>
                                <h5 class="mt-0 h4">Beef Ribs</h5>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                    there live the blind texts.</p>
                                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="section-gallery">
    <div class="container">
        <div class="row ftco-custom-gutters">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">Food Gallery</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/menu_2.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/menu_3.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="images/menu_1.jpg" class="ftco-thumbnail image-popup">
            <img src="images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
          </a>
            </div>
        </div>
    </div>
</section>

@endsection