@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.app')
@section('title', 'Shop Page')
@section('body')
    <!-- SEARCH RESULT PART START -->
    <section class="breadcrumb">
        <div class="container py-2">
            <p><a href="{{ route('index') }}">Home</a> / <a href="">Search result</a></p>
        </div>
    </section>
    <section class="search-result pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="search-filtering">
                        <div class="filter">
                            Filter By
                        </div>
                        <h3 class="my-4">Price</h3>
                        <div class="filter-input d-flex">
                            <h4 class="mt-2 mx-2">From </h4>
                            <input type="number">
                            <h4 class="mt-2 mx-2">To </h4>
                            <input type="number">
                        </div>
                        <div class="slidecontainer pt-4 pb-4">
                            <input type="range" min="100" max="10000" value="50" class="slider" id="myRange">
                        </div>

                        <div class="accordion accordion-flush mt-3 mb-5" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Categories
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        BRANDS
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                                        filled with some actual content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        medical sunglasses
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                        happening here in terms of content, but just filling up the space to make it look, at least at first
                                        glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Accessories
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                                        happening here in terms of content, but just filling up the space to make it look, at least at first
                                        glance, a bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search-product">
                        <div class="search-text d-flex justify-content-end">
                            <h4 class="mt-2">Shorted By</h4>&nbsp;&nbsp;
                            <select name="" id="">
                                <option value="">Defalut</option>
                                <option value="">Normal</option>
                                <option value="">Filtered</option>
                            </select>
                        </div>
                        <hr>
                        <div class="row pb-5">
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/4.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Bausch & Lomb SofLens 59</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/optics2.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>MULTIFOCAL AIR OPTIX_AQUA</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/1.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>ACUVUE Vita_UV Blocking</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/4.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Bausch & Lomb SofLens 59</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/5.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>MULTIFOCAL AIR OPTIX_AQUA</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/6.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/optics3.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/7.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/8.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/optics1.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/1.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 mb-4">
                                <div class="card product text-center">
                                    <img src="{{ asset('safety_assets/img/products/3.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="#">
                                            <h6>Rayban Sunglass For Men Gold RB-2022 01</h6>
                                            <h5>SAR 631.55</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEARCH RESULT PART END -->

    <!-- PARTNERSHIP BRAND PART START -->
    <section class="partnership-brand">
        <div class="container pb-lg-5">
            <div class="row my-3 text-center">
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="{{ asset('safety_assets/img/photos/Guarantee.png') }}" alt="img">
                        <h2 class="px-4">ORGINAL PRODUCTS</h2>
                    </div>
                </div>
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="{{ asset('safety_assets/img/photos/shiping.png') }}" alt="img">
                        <h2 class="px-4">FAST SHIPMENT</h2>
                    </div>
                </div>
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="{{ asset('safety_assets/img/photos/Delivery.png') }}" alt="img">
                        <h2 class="px-4">FREE DELIVERY</h2>
                    </div>
                </div>
                <div class="col-md-3 logo-item text-center">
                    <div class="testimonial d-flex">
                        <img src="{{ asset('safety_assets/img/photos/Guarantee.png') }}" alt="img">
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
                    <img src="{{ asset('safety_assets/img/photos/Moon Man.png') }}" alt="">
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


