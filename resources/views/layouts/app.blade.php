@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
<html lang="en">
    @if ($locale == 'ar')
        <html lang="ar" dir="rtl">
    @else
        <html lang="en" dir="auto">
    @endif
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Basariat Incubator</title>
    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    @if ($locale == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!--    SLICK SLIDER-->
    <link rel="stylesheet" href="{{ asset('safety_assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('safety_assets/css/slick.css') }}">
    <!--    MAIN CSS-->
    <link rel="stylesheet" href="{{ asset('safety_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('safety_assets/css/responsive.css') }}">
    @if ($locale == 'ar')
        <link rel="stylesheet" href="{{ asset('safety_assets/css/arabic.css') }}">
    @endif
</head>


<body>
    <!-- HEADER TOP PART  -->
    <section class="header-top">
        <div class="container">
            <!-- header top content -->
        </div>
    </section>
    <!-- HEADER TOP PART  -->

    <!-- HEADER MIDDLE PART -->
    <section class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo mt-2">
                        <img src="{{ asset('safety_assets/img/logo/logo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="col-md-5 py-4">
                    <div class="search-body">
                        <form action="#">
                            <input type="text" placeholder="Search for products">
                            <select name="" id="">
                                <option value="">SELECT CATEGORY</option>
                                <option value="">Select Category One</option>
                                <option value="">Select Category Two</option>
                                <option value="">Select Category Three</option>
                            </select>
                            <select name="" id="">
                                <option value="">Product</option>
                            </select>
                            <button type="submit">
                                <img src="{{ asset('safety_assets/img/photos/Search.png') }}" alt="">
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="login-register d-flex justify-content-center">
                        @if (Auth::guest())
                            <li>
                                <a href="{{ route('login') }}">Login</a> / 
                            </li>
                        @else
                            <li>
                                @if (Auth::user()->role)
                                    &nbsp;<a href="{{ route('admin.index') }}">
                                        Admin Panel 
                                        <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('safety_assets/img/users/user2.png') }}" alt="">
                                    </a>
                                @else
                                    <a href="{{ route('dashboard.index') }}">
                                        Account 
                                        <img style="border: 1px solid #a6adce;" width="35px" height="35px" class="rounded-circle" src="{{ asset('safety_assets/img/users/user2.png') }}" alt="">
                                    </a>
                                @endif
                            </li>
                        @endif
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="cart-icon d-flex justify-content-center">
                        <div class="wishlist me-3">
                            <a href="">
                                <img src="{{ asset('safety_assets/img/photos/Heart.png') }}" alt="heart-img">
                                <!-- <sup>03</sup> -->
                            </a>
                        </div>
                        <div class="shopping-cart ms-3">
                            <a href="">
                                <img src="{{ asset('safety_assets/img/photos/Shopping Bag.png') }}" alt="cart-img">
                                <sup>02</sup>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HEADER MIDDLE PART -->
    
    <!--    HEADER SECTION-->
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-1">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="#">
                            <!-- <img src="assets/img/logo/logo.png" alt="Logo"> -->
                        </a>
                        <i class="fa fa-bars d-md-none" onClick="mobileClick()" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-11 d-none d-md-block">
                    <div class="menubar d-flex justify-content-center">
                        <ul>
                            <li>
                                <a href="{{ route('index') }}">Home </a></i>
                            </li>
                            <li>
                                <a href="{{ route('shop') }}">Shop Page</a></i>
                            </li>
    
                            <li>
                                <a href="#">SUNGLASSES &nbsp;<i class="fa-solid fa-angle-down text-white"></i> </a></i>
                            </li>
    
                            <!-- <li>
                                    <a href="#">Glass for Men</a></i>
                                </li>
                                <li>
                                    <a href="#">Glass for Women</a></i>
                                </li>
                                <li>
                                    <a href="#">Glass for Kids</a></i>
                                </li> -->
    
                            <li>
                                <a href="#">MEDICAL GLASSES </a></i>
                            </li>
                            <li>
                                <a href="#">ACCESSORIES</a>
                            </li>
                            <li>
                                <a href="#">About Us</a></i>
                            </li>
                            <li>
                                <a href="#">Contact Us</a></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END -->

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="mobile-logo mb-5">
                <a href="#">
                    <img src="{{ asset('safety_assets/img/logo/logo.png') }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>

            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            Home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            About
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Services
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right"></i>services</a></li>

                            <li><a href="#"><i class="fa fa-chevron-right"></i>sector</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="mobileOverlay" class="mobile-overlay" onClick="mobileClick()"></div>
    <!--   END MOBILE MENU-->

    <!--    header end-->

    @yield('body')

    <!--    FOOTER SECTION-->
    <footer class="py-lg-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="footer-box">
                        <img src="{{ asset('safety_assets/img/logo/logo.png') }}" alt="Logo">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        </p>
                        <div class="social-media-footer">
                            <h4>Social Media</h4>
                            <div>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="footer-box">
                        <h6>HomePage </h6>
                        <div class="footer-menu">
                            <a href="#">Home</a>
                            <a href="#">Our Services</a>
                            <a href="#">Shop Now</a>
                            <a href="#">My Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="footer-box">
                        <h6>Support Link</h6>
                        <div class="footer-menu">
                            <a href="#">About Us</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Our Support Team</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="footer-box">
                        <h6>About Us</h6>
                        <p>
                            Riadah Incubators Startup Studio
                            And corporate factory
                            Khaldiya Towers - 4th Tower
                            Faisal Bin Turki Road - Office No.
                            6 - Floor 13 - Riyadh
                        </p>
                        <ul>
                            <li>

                                Phone: +996 0551175959
                            </li>
                            <li>
                                Email: info@basariat.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="container">
            <div class="copyright-section text-center">
                <p>© Copyright - @php echo date('Y'); @endphp Basariat. All Rights Reserved.</p>
            </div>
        </div>
    </section>
    <!--    FOOTER SECTION END-->

    <!--    JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    SLICK SLIDER-->
    <script src="{{ asset('safety_assets/js/slick.min.js') }}"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('safety_assets/js/main.js') }}"></script>


    {!! Notify::message() !!}
    {{-- notify any errors --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error(`{!! $error !!}`, 'Error')
        </script>
        @endforeach
    @endif
    <!-----for Ajax handeling----->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('footer_script')

    <script>
        $(document).ready(function(){
            showcartcount();
             showcartsummary();
              showcartcontent();
        });

        function showcartcount(){
            $.ajax({
                url: "{{ route('cart.count') }}",
                success: function(data) {
                    $('.shoppingcartshow').html(data);
                }
            });
        }

        function showcartcontent(){
            $.ajax({
                url: "{{ route('cart.content') }}",
                success: function(data) {
                    $('#cartcontentshow').html(data);
                }
            });
        }

        function showcartsummary(){
            $.ajax({
                url: "{{ route('cart.summary') }}",
                success: function(data) {
                    $('#cartsummaryshow').html(data);
                }
            });
        }

        // Product add to cart uses ajax request
        $('.product_id').on('click',function(e){
            e.preventDefault();
            var product_id = $(this).data('id');

              var url = "{{ route('add_to_cart') }}";

            $.ajax({
                type: "post",
                url: url,
                data: {
                    product_id: product_id
                },
                success: function(data){
                    showcartcount();
                    showcartcontent();
                    showcartsummary();
                    if ($.isEmptyObject(data.error)) {
                        toastr.success(data.success, 'Product successfully add to Cart', {
                            timeOut: 3000
                        });
                    } else {
                        toastr.error(data.error, {
                            timeOut: 3000
                        });
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });

        // Product add to cart from details page
        $('#detail_product_id').on('click',function(e){
            e.preventDefault();

            var product_id = $(this).data('id');
            var quantity = $('#quantity').val();
            
            var url = "{{ route('details_add_to_cart') }}";
            $.ajax({
                type: "post",
                url: url,
                data: {
                    product_id: product_id,
                    quantity: quantity,
                },
                success: function(data){
                    showcartcount();
                    if ($.isEmptyObject(data.error)) {
                        toastr.success(data.success, 'Product successfully add to Cart', {
                            timeOut: 3000
                        });
                    } else {
                        toastr.error(data.error, {
                            timeOut: 3000
                        });
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            }); 
        });

        //        MOBILE MENU
        function mobileClick() {
            $("#mobile-menu").toggleClass('mobileAdd');
            $("#mobileOverlay").toggleClass('mobile-overlay');
        }
        //        MOBILE MENU END

        $(window).scroll(function() {
            $('header').toggleClass('scrolled', $(this).fadeIn().scrollTop() > 65);
        });

        // ==========================
        // Product autoplay slider 
        // ==========================
        $('.banner-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: true,
            fade: false,
            autoplaySpeed: 1500,
            arrows: false,
            responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

            ]
        });
        $('.brand-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: true,
            fade: false,
            autoplaySpeed: 1500,
            arrows: false,
            responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }

            ]
        });
        $('.category-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: true,
            fade: false,
            autoplaySpeed: 1500,
            arrows: false,
            responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }

            ]
        });
    </script>

</body>
</html>










