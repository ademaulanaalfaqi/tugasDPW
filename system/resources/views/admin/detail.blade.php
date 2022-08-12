<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public/asset')}}/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="{{url('public/asset')}}/css/preloader.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/slick.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/backToTop.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/nice-select.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/ui-range-slider.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/default.css">
        <link rel="stylesheet" href="{{url('public/asset')}}/css/style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
        <header>
            <div class="header__area">
                <div class="header__top header__padding d-none d-sm-block">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                                <div class="header__welcome">
                                    <span>Welcome to Worldwide Electronics Store</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-7">
                                <div class="header__action d-flex justify-content-center justify-content-md-end">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="#">Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__info header__padding">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{url('public/asset')}}/img/logo/logo-black.png" alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="header__info-right">
                                    <div class="header__search f-left d-none d-sm-block">
                                        <form action="#">
                                            <div class="header__search-box">
                                                <input type="text" placeholder="Search For Products...">
                                                <button type="submit">Search</button>
                                            </div>
                                            <div class="header__search-cat">
                                                <select>
                                                    <option>All Categories</option>
                                                    <option>Best Seller Products</option>
                                                    <option>Top 10 Offers</option>
                                                    <option>New Arrivals</option>
                                                    <option>Phones & Tablets</option>
                                                    <option>Electronics & Digital</option>
                                                    <option>Fashion & Clothings</option>
                                                    <option>Jewelry & Watches</option>
                                                    <option>Health & Beauty</option>
                                                    <option>Sound & Speakers</option>
                                                    <option>TV & Audio</option>
                                                    <option>Computers</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                        <a href="javascript:void(0);" class="cart__toggle">
                                            <span class="cart__total-item">01</span>
                                        </a>
                                        <span class="cart__content">
                                            <span class="cart__my">My Cart:</span>
                                            <span class="cart__total-price">$ 255.00</span>
                                        </span>
                                        <div class="cart__mini">
                                          <div class="cart__close"><button type="button" class="cart__close-btn"><i class="fal fa-times"></i></button></div>
                                          <ul>
                                              <li>
                                                <div class="cart__title">
                                                  <h4>My Cart</h4>
                                                  <span>(1 Item in Cart)</span>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="cart__item d-flex justify-content-between align-items-center">
                                                  <div class="cart__inner d-flex">
                                                    <div class="cart__thumb">
                                                      <a href="product-details.html">
                                                        <img src="{{url('public/asset')}}/img/shop/product/cart/cart-mini-1.jpg" alt="">
                                                      </a>
                                                    </div>
                                                    <div class="cart__details">
                                                      <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                      <div class="cart__price">
                                                        <span>$255.00</span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="cart__del">
                                                      <a href="#"><i class="fal fa-trash-alt"></i></a>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="cart__sub d-flex justify-content-between align-items-center">
                                                  <h6>Car Subtotal</h6>
                                                  <span class="cart__sub-total">$255.00</span>
                                                </div>
                                              </li>
                                              <li>
                                                <a href="checkout.html" class="t-y-btn w-100 mb-10">Proceed to checkout</a>
                                                <a href="cart.html" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit cart</a>
                                              </li>
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom header__padding header__bottom-border">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                              <div class="header__bottom-left d-flex d-xl-block align-items-center">
                                <div class="side-menu d-xl-none mr-20">
                                  <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                </div>
                                <div class="main-menu d-none d-md-block">
                                    <nav id="mobile-menu-2">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home Style 1</a></li>
                                                    <li><a href="index-2.html">Home Style 2</a></li>
                                                    <li><a href="index-3.html">Home Style 3</a></li>
                                                    <li><a href="index-4.html">Home Style 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="product.html">Features <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="product.html">Product Type</a></li>
                                                    <li><a href="product.html">Product Features <i class="far fa-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="product-details.html">Simple Product</a></li>
                                                            <li><a href="product-details-config.html">Configurable Product</a></li>
                                                            <li><a href="product-details-group.html">Group Product</a></li>
                                                            <li><a href="product-details-download.html">Downloadable Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Shop By Brand</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-detaills.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li>
                                                <a href="about.html">pages <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="error.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3  col-sm-6  col-6 d-md-none d-lg-block">
                                <div class="header__bottom-right d-flex justify-content-end">
                                    <div class="header__currency">
                                        <select>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                    <div class="header__lang d-md-none d-lg-block">
                                        <select>
                                            <option>English</option>
                                            <option>Bangla</option>
                                            <option>Arabic</option>
                                            <option>Hindi</option>
                                            <option>Urdu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                    <img src="{{url('public/asset')}}/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-2 fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>
            
            <!-- breadcrumb area start -->
            <section class="breadcrumb__area box-plr-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- product area start -->
            <section class="product__area box-plr-75 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5">
                            <div class="product__details-nav d-sm-flex align-items-start">
                                <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="thumbOne-tab" data-bs-toggle="tab" data-bs-target="#thumbOne" type="button" role="tab" aria-controls="thumbOne" aria-selected="true">
                                          <img src="{{url('public/asset')}}/img/shop/product/details/product-nav-1.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbTwo-tab" data-bs-toggle="tab" data-bs-target="#thumbTwo" type="button" role="tab" aria-controls="thumbTwo" aria-selected="false">
                                        <img src="{{url('public/asset')}}/img/shop/product/details/product-nav-2.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbThree-tab" data-bs-toggle="tab" data-bs-target="#thumbThree" type="button" role="tab" aria-controls="thumbThree" aria-selected="false">
                                        <img src="{{url('public/asset')}}/img/shop/product/details/product-nav-3.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbFour-tab" data-bs-toggle="tab" data-bs-target="#thumbFour" type="button" role="tab" aria-controls="thumbFour" aria-selected="false">
                                        <img src="{{url('public/asset')}}/img/shop/product/details/product-nav-4.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbFive-tab" data-bs-toggle="tab" data-bs-target="#thumbFive" type="button" role="tab" aria-controls="thumbFive" aria-selected="false">
                                        <img src="{{url('public/asset')}}/img/shop/product/details/product-nav-5.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="thumbSix-tab" data-bs-toggle="tab" data-bs-target="#thumbSix" type="button" role="tab" aria-controls="thumbSix" aria-selected="false">
                                        <img src="{{url('public/asset')}}/img/shop/product/details/product-nav-6.jpg" alt="">
                                      </button>
                                    </li>
                                </ul>
                                <div class="product__details-thumb">
                                    <div class="tab-content" id="productThumbContent">
                                        <div class="tab-pane fade show active" id="thumbOne" role="tabpanel" aria-labelledby="thumbOne-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="{{url('public/asset')}}/img/shop/product/details/big/product-nav-big-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbTwo" role="tabpanel" aria-labelledby="thumbTwo-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="{{url('public/asset')}}/img/shop/product/details/big/product-nav-big-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbThree" role="tabpanel" aria-labelledby="thumbThree-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="{{url('public/asset')}}/img/shop/product/details/big/product-nav-big-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbFour" role="tabpanel" aria-labelledby="thumbFour-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="{{url('public/asset')}}/img/shop/product/details/big/product-nav-big-4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbFive" role="tabpanel" aria-labelledby="thumbFive-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="{{url('public/asset')}}/img/shop/product/details/big/product-nav-big-5.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="thumbSix" role="tabpanel" aria-labelledby="thumbSix-tab">
                                            <div class="product__details-nav-thumb">
                                                <img src="{{url('public/asset')}}/img/shop/product/details/big/product-nav-big-6.jpg" alt="">
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7">
                            <div class="product__details-wrapper">
                                <div class="product__details">
                                    <h3 class="product__details-title">
                                        <a href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W 32 to 128GB</a>
                                    </h3>
                                    <div class="product__review d-sm-flex">
                                        <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__add-review mb-15">
                                        <span><a href="#">1 Review</a></span>
                                        <span><a href="#">Add Review</a></span>
                                        </div>
                                    </div>
                                    <div class="product__price">
                                        <span class="new">$150.00</span>
                                        <span class="old">$320.00</span>
                                    </div>
                                    <div class="product__stock">
                                        <span>Availability :</span>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="product__stock sku mb-30">
                                        <span>SKU:</span>
                                        <span>Samsung C49J89: £875, Debenhams Plus</span>
                                    </div>
                                    <div class="product__details-des mb-30">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="product__details-stock">
                                        <h3><span>Hurry Up!</span> Only 98 products left in stock.</h3>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-width="100%"></div>
                                          </div>
                                    </div>
                                    <div class="product__details-quantity mb-20">
                                        <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="t-y-btn" type="submit">Add to cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product__details-action">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="product__details-des-tab mb-40 mt-110">
                                <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review 5</button>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="prodductDesTaContent">
                                <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                                    <div class="product__details-des-wrapper">
                                        <div class="product__details-des mb-20">
                                            <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                        </div>
                                        <div class="product__details-des mb-20">
                                            <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                                        </div>
                                        <div class="product__details-des-banner w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/details/product-details-banner.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="product__details-review">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="review-wrapper">
                                                    <h3 class="block-title">Customer Reviews</h3>
                                                    <div class="review-item">
                                                        <h3 class="review-title">Awesome product</h3>
                                                        <div class="review-ratings mb-10">
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Quality</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Price</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Value</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti quia eligendi molestias illum libero et.</p>
                                                        </div>
                                                        <div class="review-meta">
                                                            <div class="review-author">
                                                                <span>Review By </span>
                                                                <span>Shahnewaz Sakil</span>
                                                            </div>
                                                            <div class="review-date">
                                                                <span>Posted on</span>
                                                                <span>1/21/20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-item">
                                                        <h3 class="review-title">Nice</h3>
                                                        <div class="review-ratings mb-10">
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Quality</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Price</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Value</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti quia eligendi molestias illum libero et.</p>
                                                        </div>
                                                        <div class="review-meta">
                                                            <div class="review-author">
                                                                <span>Review By </span>
                                                                <span>Selena Gomz</span>
                                                            </div>
                                                            <div class="review-date">
                                                                <span>Posted on</span>
                                                                <span>1/21/20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-item">
                                                        <h3 class="review-title">Best product</h3>
                                                        <div class="review-ratings mb-10">
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Quality</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Price</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review-ratings-single d-flex align-items-center">
                                                                <span>Value</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti quia eligendi molestias illum libero et.</p>
                                                        </div>
                                                        <div class="review-meta">
                                                            <div class="review-author">
                                                                <span>Review By </span>
                                                                <span>Jonson</span>
                                                            </div>
                                                            <div class="review-date">
                                                                <span>Posted on</span>
                                                                <span>1/21/20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                <div class="review-form">
                                                    <h3>Your Reviewing</h3>
                                                    <p>Australian Certified Organic Royal Gala Apples</p>
                                                    <form action="#">
                                                        <div class="review-input-box mb-15 d-flex align-items-start">
                                                            <h4 class="review-input-title">Your Rating</h4>
                                                            <div class="review-input">
                                                                <div class="review-ratings mb-10">
                                                                    <div class="review-ratings-single d-flex align-items-center">
                                                                        <span>Quality</span>
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="review-ratings-single d-flex align-items-center">
                                                                        <span>Price</span>
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="review-ratings-single d-flex align-items-center">
                                                                        <span>Value</span>
                                                                        <ul>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review-input-box d-flex align-items-start">
                                                            <h4 class="review-input-title">Nickname</h4>
                                                            <div class="review-input">
                                                                <input type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="review-input-box d-flex align-items-start">
                                                            <h4 class="review-input-title">Summary</h4>
                                                            <div class="review-input">
                                                                <input type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="review-input-box d-flex align-items-start">
                                                            <h4 class="review-input-title">Review</h4>
                                                            <div class="review-input">
                                                                <textarea></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="review-sub-btn">
                                                            <button type="submit" class="t-y-btn t-y-btn-grey">submit review</button>
                                                        </div>
                                                    </form>
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
            <!-- product area end -->

            <!-- product area start -->
            <section class="product__area box-plr-75 pb-20">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section__head mb-40">
                                <div class="section__title">
                                    <h3>Best Selling<span>Products</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="product__slider owl-carousel">
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-1.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-2.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$500.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-3.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-4.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> LG 27UD58: £347.21, Ebuyer.com </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$560.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-5.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-6.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$450.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01   </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-9.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-10.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative" >
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-11.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-12.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                <div class="product__item white-bg mb-30">
                                    <div class="product__thumb p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="{{url('public/asset')}}/img/shop/product/product-7.jpg" alt="product">
                                            <img class="second-img" src="{{url('public/asset')}}/img/shop/product/product-8.jpg" alt="product">
                                        </a>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01   </a>
                                        </h6>
                                        <div class="rating">
                                            <ul>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product area end -->

            <!-- brand area start -->
            <section class="brand__area">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                        <div class="brand__slider owl-carousel">
                            <div class="brand__item">
                            <img src="{{url('public/asset')}}/img/brand/brand-1.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="{{url('public/asset')}}/img/brand/brand-2.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="{{url('public/asset')}}/img/brand/brand-3.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="{{url('public/asset')}}/img/brand/brand-4.jpg" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- brand area end -->
 
            <!-- shop modal start -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                          </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                    <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-1.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-2.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-3.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="{{url('public/asset')}}/img/shop/product/quick-view/nav/quick-nav-4.jpg" alt="">
                                              </button>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="t-y-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                                <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
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
            <!-- shop modal end -->

        </main>

        <!-- footer area start -->
        <footer>
            <div class="footer__area footer-bg-2 yellow-footer">
                <div class="footer__top pt-80 pb-40">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="footer__top-left">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title mb-45">
                                                    <div class="footer__logo">
                                                        <a href="index.html"><img src="{{url('public/asset')}}/img/logo/logo-white.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__hotline footer__hotline-4 d-flex align-items-center mb-30">
                                                        <div class="icon mr-15">
                                                            <i class="fal fa-headset"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Hotline Free 24/24:</h4>
                                                            <span>(+100) 123 456 7890</span>
                                                        </div>
                                                    </div>
                                                    <div class="footer__info footer__info-4">
                                                        <ul>
                                                            <li>
                                                                <span>Add:  
                                                                    <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls Street 68, Mahattan, New York, USA</a>
                                                                </span>
                                                            </li>
                                                            <li><span>Email: <a href="mailto:info@thebuesky.com">info@thebuesky.com</a>  </span></li>
                                                            <li><span>Fax: <a href="tel:123-456-7890">(+100) 123 456 7890</a> - <a href="tel:-100-123-456-7891">(+100) 123 456 7891</a> </span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title footer__widget-title-4">
                                                            <h4>Information</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link footer__link-4">
                                                                <ul>
                                                                    <li><a href="#"> Custom Service </a></li>
                                                                    <li><a href="#">F.A.Q.’s</a></li>
                                                                    <li><a href="#">Ordering Tracking</a></li>
                                                                    <li><a href="#"> Contacts</a></li>
                                                                    <li><a href="#">Events</a></li>
                                                                    <li><a href="#">Popular</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title footer__widget-title-4">
                                                            <h4>Our Services</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link footer__link-4">
                                                                <ul>
                                                                    <li><a href="#">Sitemap</a></li>
                                                                    <li><a href="#">Privacy Policy</a></li>
                                                                    <li><a href="#">Your Account</a></li>
                                                                    <li><a href="#">Advanced Search</a></li>
                                                                    <li><a href="#">Terms & Condition</a></li>
                                                                    <li><a href="#"> Contact Us</a></li>
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
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                      <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                          <div class="footer__widget">
                                              <div class="footer__widget-title footer__widget-title-4">
                                                  <h4>My Account</h4>
                                              </div>
                                              <div class="footer__widget-content">
                                                  <div class="footer__link footer__link-4">
                                                      <ul>
                                                          <li><a href="#"> About us </a></li>
                                                          <li><a href="#">Delivery Information</a></li>
                                                          <li><a href="#">Privacy Policy</a></li>
                                                          <li><a href="#">Discount</a></li>
                                                          <li><a href="#">Custom Service</a></li>
                                                          <li><a href="#">Terms & Condition</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                          <div class="footer__widget">
                                              <div class="footer__widget-title footer__widget-title-4">
                                                  <h4>Payment & Shipping</h4>
                                              </div>
                                              <div class="footer__widget-content">
                                                  <div class="footer__link footer__link-4">
                                                      <ul>
                                                          <li><a href="#">Terms Of Use</a></li>
                                                          <li><a href="#">Payment Methods</a></li>
                                                          <li><a href="#">Shipping Guide</a></li>
                                                          <li><a href="#">Locations We Ship To</a></li>
                                                          <li><a href="#">Estimated Delivery Time</a></li>
                                                          <li><a href="#">Express</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                      <div class="footer__widget">
                                          <div class="footer__widget-title">
                                              <h4>Sign Up For Newsletter</h4>
                                          </div>
                                          <div class="footer__widget-content">
                                              <div class="footer__subscribe">
                                                <p> <span>Join 40.00+ Subscribers</span> and get a new discount coupon on every Saturday.</p>
                                                <div class="footer__subscribe-form">
                                                  <form action="#">
                                                    <input type="email" placeholder="Your Email Address...">
                                                    <button type="submit">subscribe</button>
                                                  </form>
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
                <div class="footer__copyright footer__copyright-2 pt-30 pb-35 footer-bg-2">
                    <div class="container custom-container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__copyright-text footer__copyright-text-2">
                                    <p>Copyright © <a href="index.html">Topico.</a> All Rights Reserved. <a href="#">ThemePure.</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__payment f-right">
                                    <a href="#" class="m-img"><img src="{{url('public/asset')}}/img/icon/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

		<!-- JS here -->
        <script src="{{url('public/asset')}}/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{url('public/asset')}}/js/vendor/waypoints.min.js"></script>
        <script src="{{url('public/asset')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public/asset')}}/js/meanmenu.js"></script>
        <script src="{{url('public/asset')}}/js/slick.min.js"></script>
        <script src="{{url('public/asset')}}/js/backToTop.js"></script>
        <script src="{{url('public/asset')}}/js/jquery.fancybox.min.js"></script>
        <script src="{{url('public/asset')}}/js/countdown.js"></script>
        <script src="{{url('public/asset')}}/js/nice-select.min.js"></script>
        <script src="{{url('public/asset')}}/js/isotope.pkgd.min.js"></script>
        <script src="{{url('public/asset')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('public/asset')}}/js/magnific-popup.min.js"></script>
        <script src="{{url('public/asset')}}/js/jquery-ui-slider-range.js"></script>
        <script src="{{url('public/asset')}}/js/ajax-form.js"></script>
        <script src="{{url('public/asset')}}/js/wow.min.js"></script>
        <script src="{{url('public/asset')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{url('public/asset')}}/js/main.js"></script>
    </body>
</html>