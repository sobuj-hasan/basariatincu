@extends('layouts.app')
@section('title', 'Home')
@section('body')
    <!-- BANNER SECTION START -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="banner-content banner-slider">
                        <a class="slider-item" href="#">
                            <img class="w-100" src="safety_assets/img/photos/banner.png" alt="banner-img">
                        </a>
                        <a class="slider-item" href="#">
                            <img class="w-100" src="safety_assets/img/photos/banner.png" alt="banner-img">
                        </a>
                        <a class="slider-item" href="#">
                            <img class="w-100" src="safety_assets/img/photos/banner.png" alt="banner-img">
                        </a>
                        <a class="slider-item" href="#">
                            <img class="w-100" src="safety_assets/img/photos/banner.png" alt="banner-img">
                        </a>
                    </div>
                    <!-- <div class="icon">
                        <div class="left">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="right">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-3">
                    <div class="banner-two-content">
                        <img class="w-100" src="safety_assets/img/photos/banner-two.png" alt="banner-img">
                        <div class="shop-btn">
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->

    <!-- PARTNERSHIP BRAND PART START -->
    <section class="partnership-brand">
        <div class="container py-5">
            <div class="row my-3 brand-slider">
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-1.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-6.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-2.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-3.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-6.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-4.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-5.png" alt="img">
                </div>
                <div class="col-md-2 logo-item d-flex justify-content-center slider-item">
                    <img src="safety_assets/img/brands/brand-6.png" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- PARTNERSHIP BRAND PART END -->

    <!-- CATEGORY PART START -->
    <section class="category-part">
        <div class="container">
            <div class="row text-center category-slider">
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-2.png" alt="category-img">
                        <h4 class="py-3">Contact Lenses</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-3.png" alt="category-img">
                        <h4 class="py-3">Men</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-4.png" alt="category-img">
                        <h4 class="py-3">Women</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-5.png" alt="category-img">
                        <h4 class="py-3">Kids</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-5.png" alt="category-img">
                        <h4 class="py-3">Fashion</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-5.png" alt="category-img">
                        <h4 class="py-3">Jewellary</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-5.png" alt="category-img">
                        <h4 class="py-3">Jewellary</h4>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 slider-item mx-2">
                    <a href="#">
                        <img src="safety_assets/img/photos/category-5.png" alt="category-img">
                        <h4 class="py-3">Jewellary</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORY PART END -->

    <!-- NEW ARRIVALS PART START -->
    <section class="new-arrivals py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="category-menu text-center">
                        <h1>New Arrivals</h1>
                        <ul class="d-flex justify-content-center my-4">
                            <li class="mx-3">
                                <a class="active" href="#">All</a>
                            </li>
                            <li class="mx-3">
                                <a href="#">Men</a>
                            </li>
                            <li class="mx-3">
                                <a href="#">Women</a>
                            </li>
                            <li class="mx-3">
                                <a href="#">Kids</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-1.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-2.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>GUcci Sunglass For Women
                                black gc-2022 32</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-3.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>dior Sunglass For Men
                                black dr-2022 41</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-4.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>BOSS Sunglass For Women
                                tiger bs-2022 57</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-4.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>Rayban Sunglass For Men
                                Gold RB-2022 01</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-3.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>GUcci Sunglass For Women
                                black gc-2022 32</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-2.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/7.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>dior Sunglass For Men
                                black dr-2022 41</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="card product text-center">
                        <div class="top-img my-3">
                            <img src="safety_assets/img/brands/brand-1.png" alt="">
                        </div>
                        <img src="safety_assets/img/products/8.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#">
                                <h6>Boss Sunglass For Men
                                tiger bs-2022 57</h6>
                                <h5>SAR 631.55 &nbsp;&nbsp;<del>SAR 631.55</del></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEW ARRIVALS PART END -->

    <!-- PARTNERSHIP BRAND PART START -->
    <section class="partnership-brand">
        <div class="container pb-lg-5">
            <div class="row my-3 text-center">
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="safety_assets/img/photos/Guarantee.png" alt="img">
                        <h2 class="px-4">ORGINAL PRODUCTS</h2>
                    </div>
                </div>
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="safety_assets/img/photos/shiping.png" alt="img">
                        <h2 class="px-4">FAST SHIPMENT</h2>
                    </div>
                </div>
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="safety_assets/img/photos/Delivery.png" alt="img">
                        <h2 class="px-4">FREE DELIVERY</h2>
                    </div>
                </div>
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="safety_assets/img/photos/Guarantee.png" alt="img">
                        <h2 class="px-4">100% Qualityfull</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PARTNERSHIP BRAND PART END -->

    <!-- OUR NEWSLATTER PART START -->
    <section class="newsletter py-lg-5">
        <div class="container my-3">
            <div class="row">
                <div class="col-md-4 align-items-center text-center">
                    <img src="safety_assets/img/photos/Moon Man.png" alt="">
                </div>
                <div class="col-md-8">
                    <h2>GET $20 OFF Basariat
                    JOIN OUR EMAIL LIST</h2>
                    <div class="input-group my-3">
                        <input type="text" class="form-control" placeholder="Enter Your Email Address">
                        <button class="btn text-uppercase" type="button">subscribes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR NEWSLATTER PART END -->
@endsection