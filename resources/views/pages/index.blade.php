@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
                <h1 class="ftco-heading ftco-animate mb-3">Welcome To  {{ config('app.name') }}</h1>
                <h2 class="h5 ftco-subheading mb-5 ftco-animate">Beta Hamu Ro Mangan Bohh!!</h2>
                <p><a href="{{ url('menu') }}" target="_blank" class="btn btn-outline-white btn-lg ftco-animate">Menu</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="ftco-section" id="section-about">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ftco-animate mb-5">
                <h4 class="ftco-sub-title">Tentang Kami</h4>
                <h2 class="ftco-primary-title display-4">Horas !</h2>
                <p>Web ini didirikan pada bulan April 2018 kawan. Web ini bertujuan untuk menyediakan makanan khas Medan. Namun, menu yang kita sediakan masih disesuaikan dengan menu yang ada di restoran penjual makanan khas Medan. Tapi, tenang kawan. Kita pasti usahakan untuk bisa menyediakan semua makanan medan yang bisa dipesan.
                        Yuk. Sekarang pesan dulu aja yang kawan suka di menu yang kita sediakan</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
                <img src="images/about_img_1.jpg" alt="Free Template by Free-Template.co">
            </div>
        </div>
    </div>
</section>
<!-- END section -->

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
<!-- END section -->
<section class="ftco-section" id="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">Today's Menu</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item ftco-animate">
                        <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast"
                            aria-selected="true">Breakfast</a>
                    </li>
                    <li class="nav-item ftco-animate">
                        <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
                    </li>
                    <li class="nav-item ftco-animate">
                        <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner"
                            aria-selected="false">Dinner</a>
                    </li>
                </ul>
                <div class="tab-content text-left">
                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ftco-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ftco-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$24.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$14.50</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ftco-animate">
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$18.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$35.50</h6>
                                    </div>
                                </div>
                                <div class="media menu-item">
                                    <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by Free-Template.co">
                                    <div class="media-body">
                                        <h5 class="mt-0">Salted Fried Chicken</h5>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                            there live the blind texts.</p>
                                        <h6 class="text-primary menu-price">$12.50</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="ftco-section bg-light" id="section-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">News &amp; Events</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                    <img src="images/offer_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">In Taste Restaurant</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                    <img src="images/offer_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">Chef Special Menu</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                    <img src="images/offer_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">Merriage Celebrations</h5>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
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
<!-- END section -->
<section class="ftco-section bg-light" id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">Contact Us</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                            the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md mb-5 ftco-animate">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
                    <div class="col-lg-8 p-5">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <small>CLOSE </small><span aria-hidden="true">&times;</span>
              </button>
                        <h1 class="mb-4">Reserve A Table</h1>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_fname">First Name</label>
                                    <input type="text" class="form-control" id="m_fname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_lname">Last Name</label>
                                    <input type="text" class="form-control" id="m_lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_email">Email</label>
                                    <input type="email" class="form-control" id="m_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_people">How Many People</label>
                                    <select name="" id="m_people" class="form-control">
                      <option value="1">1 People</option>
                      <option value="2">2 People</option>
                      <option value="3">3 People</option>
                      <option value="4+">4+ People</option>
                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_phone">Phone</label>
                                    <input type="text" class="form-control" id="m_phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="m_date">Date</label>
                                    <input type="text" class="form-control" id="m_date">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="m_time">Time</label>
                                    <input type="text" class="form-control" id="m_time">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="m_message">Message</label>
                                    <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Modal -->
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