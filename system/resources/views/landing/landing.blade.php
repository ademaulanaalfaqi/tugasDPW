<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arowana</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{url('public/landing')}}/{{url('public/landing')}}/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper" id="home">

    <!-- HEADER AREA START (header-4) -->
    @include('landing.section.header')
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/landing')}}/img/product/1.jpg" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/landing')}}/img/product/5.jpg" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Portable Watch Phone with Blood Pressure Monitor OLED</a></h6>
                        <span class="mini-cart-quantity">1 x $15.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/landing')}}/img/product/4.jpg" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Headphone Wireless Portable Bluetooth Headset Bass Handsfree Earph.</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/landing')}}/img/product/3.jpg" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Capacitive 22 Inch LCD Display Monitor</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="{{url('public/landing')}}/img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{url('landing')}}">Home</a>
                    </li>
                    <li><a href="#product">Product</a>
                    </li>
                    <li><a href="{{url('login')}}">Sign In</a>
                    </li>
                    <li><a href="{{url('register')}}">Register</a></li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-1) -->
    <div class="ltn__slider-area ltn__slider-6 mb-120---">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item--- ltn__slide-item-9 section-bg-1 bg-image" data-bg="{{url('public/landing')}}/img/slider/22.jpg">
                <div class="ltn__slide-item-inner">
                    <div class="slide-item-info bg-overlay-white-90 text-center">
                        <div class="slide-item-info-inner  ltn__slide-animation">
                            <h1 class="slide-title animated">Welcome to <br> Arowana</h1>
                            <h4 class="slide-sub-title text-uppercase animated">SITEWIDE 21% OFF</h4>
                            <div class="btn-wrapper animated">
                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area pt-110 pb-70" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title ">Our Products</h1>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <div class="nav">
                            <a class="active show" data-toggle="tab" href="#liton_tab_3_1">Popular</a>
                            <a data-toggle="tab" href="#liton_tab_3_2" class="">New</a>
                            <a data-toggle="tab" href="#liton_tab_3_3" class="">Best Sale</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($list_produk as $produk)
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="{{url('detail')}}"><img src="{{url('public', $produk->foto)}}" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_1">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title"><a href="{{url('detail')}}/{{$produk->id}}">{{$produk->nama}}</a></h2>
                                                    <div class="product-price">
                                                        <span>{{$produk->harga_string}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/3.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_3">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Capacitive 22 Inch LCD Display Monitor</a></h2>
                                                <div class="product-price">
                                                    <span>$119.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/4.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_4">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Headphone Wireless Portable Bluetooth Headset Bass Handsfree Earph.</a></h2>
                                                <div class="product-price">
                                                    <span>$125.00</span>
                                                    <del>$140.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/1.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_1">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/2.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_2">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Samsung C49J89: £875, Debenhams Plus</a></h2>
                                                <div class="product-price">
                                                    <span>$129.00</span>
                                                    <del>$145.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/5.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_5">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Original Smart Phone for Original for iPhone 6s</a></h2>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$185.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/4.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_4">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Headphone Wireless Portable Bluetooth Headset Bass Handsfree Earph.</a></h2>
                                                <div class="product-price">
                                                    <span>$125.00</span>
                                                    <del>$140.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/5.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_5">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Original Smart Phone for Original for iPhone 6s</a></h2>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$185.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/1.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_1">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/2.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_2">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Samsung C49J89: £875, Debenhams Plus</a></h2>
                                                <div class="product-price">
                                                    <span>$129.00</span>
                                                    <del>$145.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{url('detail')}}"><img src="{{url('public/landing')}}/img/product/3.jpg" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_3">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{url('detail')}}">Capacitive 22 Inch LCD Display Monitor</a></h2>
                                                <div class="product-price">
                                                    <span>$119.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->
    
    <!-- CALL TO ACTION START (call-to-action-1) -->
    <div class="call-to-action-area call-to-action-1 bg-image section-bg-2 pt-220 pb-220 mb-110" data-bg="{{url('public/landing')}}/img/bg/3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner beard-trimmer text-center">
                        <h5 class="text-uppercase">Versatile. powerful. perfect.</h5>
                        <h1>ABC LC991 Trimmer</h1>
                        <div class="btn-wrapper">
                            <a class="theme-btn-1 btn btn-effect-1 text-uppercase" href="{{url('login')}}">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area pt-110 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title ">New Arrivals</h1>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active slick-arrow-1">
                <!-- ltn__product-item -->
                @foreach($list_produk as $produk)
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="{{url('detail')}}"><img src="{{url('public', $produk->foto)}}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">New</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal_1">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h2 class="product-title"><a href="{{url('detail')}}/{{$produk->id}}">{{$produk->nama}}</a></h2>
                                <div class="product-price">
                                    <span>{{$produk->harga_string}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
    
    <!-- VIDEO AREA START -->
    <div class="ltn__video-area section-bg-1 pt-120 pb-120 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__video-img">
                        <img src="{{url('public/landing')}}/img/bg/8.jpg" alt="video popup bg image">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0"  data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VIDEO AREA END -->

    <!-- NEWSLETTER AREA START -->
    <div class="ltn__newsletter-area section-bg-1 bg-overlay-white-30 bg-image pt-110 pb-90 d-none" data-bg="{{url('public/landing')}}/img/bg/8.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="ltn__newsletter-inner text-center">
                        <h2>We make your inbox better</h2>
                        <p>Sign up to our newsletter to receive grooming tips, style inspiration, <br> exclusive access to pre-launch product pricing and more.</p>
                        <form action="#" class="ltn__form-box">
                            <input type="email" name="email" placeholder="Email*">
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn btn-effect-1 text-uppercase" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWSLETTER AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 pt-110 pb-110 plr--9 d-none">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{url('public/landing')}}/img/brand-logo/1.jpg" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{url('public/landing')}}/img/brand-logo/2.jpg" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{url('public/landing')}}/img/brand-logo/3.jpg" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{url('public/landing')}}/img/brand-logo/4.jpg" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{url('public/landing')}}/img/brand-logo/5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{url('public/landing')}}/img/brand-logo/3.jpg" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area before-bg-bottom-2--- mb-120 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="{{url('public/landing')}}/img/icons/svg/4-track.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Free home delivery</h4>
                                        <p>Provide free home delivery for
                                            all product over $100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="{{url('public/landing')}}/img/icons/svg/5-madel.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Quality Products</h4>
                                        <p>We ensure the product quality
                                            that is our main goal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="{{url('public/landing')}}/img/icons/svg/6-return.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>3 Days Return</h4>
                                        <p>Return product within 3 days
                                            for any product you buy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="{{url('public/landing')}}/img/icons/svg/7-support.svg" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Online Support</h4>
                                        <p>We ensure the product quality
                                            that you can trust easily</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- FOOTER AREA START -->
    @include('landing.section.footer')
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) 1 -->
        <div class="ltn__modal-area ltn__quick-view-modal-area">
            <div class="modal fade" id="quick_view_modal_1" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <!-- <i class="fas fa-times"></i> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="ltn__quick-view-modal-inner">
                                <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-img">
                                                <img src="{{url('public/landing')}}/img/product/1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                    </ul>
                                                </div>
                                                <h3>{{$produk->nama}}</h3>
                                                <div class="product-price">
                                                    <span>{{$produk->harga}}</span>
                                                </div>
                                                <div class="ltn__product-details-menu-2">
                                                    <ul>
                                                        <li>
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div class="ltn__social-media">
                                                    <ul>
                                                        <li>Share:</li>
                                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- MODAL AREA END -->

   

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{url('public/landing')}}/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{url('public/landing')}}/js/main.js"></script>
  
</body>
</html>

