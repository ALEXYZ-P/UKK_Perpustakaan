@section('title', 'Landing Page')

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME')}} | @yield('title') </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('evara') }}/assets/imgs/theme/alibraryLogo.png">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('evara') }}/assets/css/main.css?v=3.4">
</head>


<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-2.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-1.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-3.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-4.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-5.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-6.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('evara') }}/assets/imgs/shop/product-16-7.jpg" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                    <div><img src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>

                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        {{-- <button type="submit" class="button button-add-to-cart">Add to cart</button> --}}
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                {{-- <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                </ul> --}}
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <header class="header-area header-style-4 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                {{-- <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                                <li><i class="fi-rs-marker"></i><a  href="page-contact.html">Our location</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>WELCOME</li>
                                    {{-- <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li> --}}
                                    <li>to</li>
                                    <li>ALibrary</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                        <li><a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                    </ul>
                                </li>
                                <li><i class="fi-rs-user"></i><a href="{{ route('login')}}">Log In</a>/<a href="{{ route('register')}}">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/alibraryLogo.png" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Women's</option>
                                    <option>Men's</option>
                                    <option>Cellphones</option>
                                    <option>Computer</option>
                                    <option>Electronics</option>
                                    <option> Accessories</option>
                                    <option>Home & Garden</option>
                                    <option>Luggage</option>
                                    <option>Shoes</option>
                                    <option>Mother & Kids</option>
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                {{-- <div class="header-action-icon-2">
                                    <a href="shop-wishlist.html">
                                        <img class="svgInject" alt="Evara" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div> --}}
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="#">
                                        <img alt="Evara" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-heart.svg">
                                        {{-- <span class="pro-count blue">2</span> --}}
                                    </a>
                                    {{-- <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-3.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/alibraryLogo.png" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blouses & Shirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies & Sweatshirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Women's Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suits & Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Tanks & Camis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Coats & Jackets</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Bottoms</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Pants & Capris</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Bikini Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('evara') }}/assets/imgs/banner/menu-banner-2.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('evara') }}/assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Jackets & Coats</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Suits & Blazers</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('evara') }}/assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone Parts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Phone Bags & Cases</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Communication Equipments</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Walkie Talkie</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Car Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Dust Plug</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Signal Boosters</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                {{-- <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('evara') }}/assets/imgs/banner/menu-banner-5.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{ asset('evara') }}/assets/imgs/banner/menu-banner-6.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Jewelry & Accessories</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Beauty, Health</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Bags and Shoes</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Consumer Electronics</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Automobiles & Motorcycles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('landingPage.index') }}" class="{{ Route::is('landingPage.index') ? 'active' : ''}}" >Home {{-- <i class="fi-rs-angle-down"></i>--}}</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="{{ route('profile.show', $user->id) }}">Profile</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>--}}
                                    </li>
                                    <li>
                                        <a href="#" class="{{ Route::is('profile.show') ? 'active' : ''}}" >Profile </a>
                                    </li>

                                    <li>
                                        <a href="page-about.html">About</a>
                                    </li>
                                    {{-- <li><a href="shop-grid-right.html">Shop <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                            <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                            <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                            <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                            <li><a href="#">Single Product <i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu">
                                                    <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                                    <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                                    <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-filter.html">Shop – Filter</a></li>
                                            <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                            <li><a href="shop-cart.html">Shop – Cart</a></li>
                                            <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                            <li><a href="shop-compare.html">Shop – Compare</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="position-static"><a href="#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Women's Fashion</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Dresses</a></li>
                                                    <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                                    <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                                    <li><a href="shop-product-right.html">Wedding Dresses</a></li>
                                                    <li><a href="shop-product-right.html">Prom Dresses</a></li>
                                                    <li><a href="shop-product-right.html">Cosplay Costumes</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Men's Fashion</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Jackets</a></li>
                                                    <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                                    <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                                    <li><a href="shop-product-right.html">Casual Pants</a></li>
                                                    <li><a href="shop-product-right.html">Sweatpants</a></li>
                                                    <li><a href="shop-product-right.html">Harem Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Technology</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                                    <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                                    <li><a href="shop-product-right.html">Tablets</a></li>
                                                    <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                                    <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="shop-product-right.html"><img src="{{ asset('evara') }}/assets/imgs/banner/menu-banner.jpg" alt="Evara"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>Don't miss<br> Trending</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="shop-product-right.html">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                            <li><a href="blog-category-list.html">Blog Category List</a></li>
                                            <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                            <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                            <li><a href="#">Single Post <i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu level-menu-modify">
                                                    <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="page-about.html">About Us</a></li>
                                            <li><a href="page-contact.html">Contact</a></li>
                                            <li><a href="page-account.html">My Account</a></li>
                                            <li><a href="{{ route('login.index')}}">login/register</a></li>
                                            <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                            <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="page-terms.html">Terms of Service</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <a href="page-contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        {{-- <p><i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888 </p> --}}
                    </div>
                    {{-- <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p> --}}
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            {{-- <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="Evara" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div> --}}
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="">
                                    <img alt="Evara" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-heart.svg">
                                    {{-- <span class="pro-count white">2</span> --}}
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara" src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-4.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                                <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Home</a>
                                {{-- <ul class="dropdown">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul> --}}
                            </li>
                            {{-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Dresses</a></li>
                                            <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-right.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Jackets</a></li>
                                            <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                            <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                            <li><a href="shop-product-right.html">Tablets</a></li>
                                            <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                            <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="{{ route('login')}}">login/register</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a  href="page-contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{route('login')}}">Log In / Sign Up </a>
                    </div>
                    {{-- <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div> --}}
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>


    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="#" rel="nofollow">Home</a>
                    {{-- <span></span> Buku --}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p><strong class="text-brand">Home</strong></p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                            <li><a href="#">Release Date</a></li>
                                            <li><a href="#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End nav-tabs-->
                        <div class="tab-content wow fadeIn animated" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="row product-grid-4">

                                    @foreach ($data as $i)
                                        <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('landingPage.show', $i->id) }}">
                                                            <img class="default-img"
                                                                src="{{ asset('storage/images/' . $i->sampul) }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('storage/images/' . $i->sampul) }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        {{-- <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a> --}}

                                                    </div>
                                                    {{-- <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">
                                                        @foreach ($kategori as $k)
                                                            {{ $k->id == $data->id_ketegori ? $k->nama : $k->nama }}

                                                        @endforeach
                                                        </span>
                                                    </div> --}}
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <a href="shop-grid-right.html">
                                                            @foreach ($kategori as $c => $k)
                                                                {{ $k->id == $i->id_ketegori ? $k->nama : $k->nama }}
                                                                @if ($c < count($kategori) - 1)
                                                                    {{", "}}
                                                                @endif
                                                            @endforeach
                                                        </a>

                                                    </div>
                                                    <h2><a href="shop-product-right.html">{{ $i->judul }}</a></h2>

                                                    <div class="product-price">
                                                        <span>{{ $i->stok }}</span>
                                                    </div>
                                                    <div class="product-action-1 show">
                                                        {{-- <input type="hidden" name="id_user" class="id_user"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="id_buku" class="id_buku"
                                                            value="{{ $i->id }}"> --}}
                                                        <style>
                                                            .icon {
                                                                color: red;
                                                            }
                                                        </style>


                                                        {{-- {{ $liked = false }}

                                                        @foreach ($koleksi as $like)
                                                            @if ($like->id_user == Auth::user()->id)
                                                                @if ($like->id_buku == $i->id)
                                                                    @php
                                                                        $liked = true;
                                                                    @endphp
                                                                    <a aria-label="Add To Like"
                                                                        data-id_user="{{ Auth::user()->id }}"
                                                                        data-id_buku="{{ $i->id }}" id="like"
                                                                        class="action-btn hover-up like icon liked"
                                                                        href="#">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </a>
                                                                @break

                                                                <!-- Menghentikan perulangan setelah menemukan satu tombol "Like" -->
                                                            @endif
                                                        @endif
                                                    @endforeach --}}

                                                    {{-- @if (!$liked) --}}
                                                        <a aria-label="Add To Like"
                                                            {{-- data-id_user="{{ Auth::user()->id }}" --}}
                                                            data-id_buku="{{ $i->id }}" id="like"
                                                            class="action-btn hover-up like icon" href="#">
                                                            <i class="fi-rs-heart"></i>
                                                        </a>
                                                    {{-- @endif --}}





                                                    {{--
@for ($k = 0; $k < count($liked); $k++)
@if ($i->id == $liked[$k])
    <a aria-label="Add To Like"
        data-id_user="{{ Auth::user()->id }}"
        data-id_buku="{{ $i->id }}"
        id="like"
        class="action-btn hover-up like icon liked"
        href="#">
        <i class="fa-solid fa-heart"></i>
    </a>
    @break <!-- Menghentikan perulangan setelah menemukan satu tombol "Like" -->
@elseif ($k == count($liked))
    <!-- Jika sudah mencapai akhir perulangan dan tidak ada yang cocok, maka tampilkan tombol "Like" yang belum disukai -->
    <a aria-label="Add To Like"
        data-id_user="{{ Auth::user()->id }}"
        data-id_buku="{{ $i->id }}"
        id="like"
        class="action-btn hover-up like icon"
        href="#">
        <i class="fi-rs-heart"></i>
    </a>

@endif
@endfor --}}






                                                    {{-- <a aria-label="Add To Like" data-id_user = "{{ Auth::user()->id }}"
                                                            data-id_buku="{{ $i->id }}"
                                                            @if (Auth::check() == true)  @endif id="like"
                                                            @foreach ($liked as $j)
                                                        {{ 'id buku sumber  :' . $i->id }}

                                                        {{ 'id buku  :' . $j->id_buku }}
                                                        {{ 'user login :' . $user->id }}
                                                            @if ($i->id == $j->id_buku)
                                                                class="action-btn hover-up like icon liked" href="#">
                                                                    <i class="fa-solid fa-heart"></i>
                                                            @elseif($i->id != $j->id_buku)
                                                                class="action-btn hover-up like icon "href="#">
                                                                    <i class="fi-rs-heart"></i>
                                                            @endif @endforeach

                                                            </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!--En tab two (Popular)-->

                            <!--En tab three (New added)-->
                        </div>


                        <!--pagination-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                {{-- <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul> --}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    {{-- <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-email.svg"
                                alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>
                        <div class="col my-4 my-md-0 des">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first
                                    shopping.</strong></h5>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/alibraryLogo.png"
                                    alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong> Jl. Pemuda No. 4
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+62 8133 6317 273
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-facebook.svg"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-twitter.svg"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-instagram.svg"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-pinterest.svg"
                                    alt=""></a>
                            <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-youtube.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">Sign In</a></li>
                        {{-- <li><a href="#">View Cart</a></li> --}}
                        <li><a href="#">My Wishlist</a></li>
                        {{-- <li><a href="#">Track My Order</a></li> --}}
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active"
                                        src="{{ asset('evara') }}/assets/imgs/theme/app-store.jpg" alt=""></a>
                                <a href="#" class="hover-up"><img
                                        src="{{ asset('evara') }}/assets/imgs/theme/google-play.jpg" alt=""></a>
                            </div>
                        </div>
                        {{-- <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated"
                                src="{{ asset('evara') }}/assets/imgs/theme/payment-method.png" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2024, <strong class="text-brand"> ALibrary</strong>
                    - e-Library </p>
            </div>
            {{-- <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    Designed by <a href="http://alithemes.com" target="_blank">Alithemes.com</a>. All rights reserved
                </p>
            </div> --}}
        </div>
    </div>
</footer>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <h5 class="mb-5">Now Loading</h5>
                <div class="loader">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS-->
<script src="{{ asset('evara') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/slick.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/wow.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/jquery-ui.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/perfect-scrollbar.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/magnific-popup.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/select2.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/waypoints.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/counterup.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/jquery.countdown.min.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/images-loaded.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/isotope.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/scrollup.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/jquery.vticker-min.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="{{ asset('evara') }}/assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="{{ asset('evara') }}/assets/js/main.js?v=3.4"></script>
<script src="{{ asset('evara') }}/assets/js/shop.js?v=3.4"></script>
<script src="https://kit.fontawesome.com/69317c8a5a.js" crossorigin="anonymous"></script>

<script>
    document.getElementById("backButton").addEventListener("click", function() {
        window.history.back();
    });
</script>

{{-- peminjaman --}}
<script>
    $(document).ready(function() {
        $('#form-cart').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            // Mengambil nilai dari elemen <span> dengan kelas 'qty-val'
            var jp = $('#jumlah_peminjaman').text();

            // Menambahkan nilai jp ke dalam data yang akan dikirimkan
            formData += '&jumlah_peminjaman=' + jp;
            console.log(formData);
            $.ajax({
                url: "{{ route('landingPage.store') }}", // Sesuaikan dengan route Anda
                method: "POST",
                data: formData,
                success: function(response) {
                    console.log(response);
                    $('#success-alert').removeClass('d-none');
                    $('#success-message').text('Berhasil mengajukan pinjaman buku.');

                    // Sembunyikan alert setelah beberapa detik (opsional)
                    setTimeout(function() {
                        $('#success-alert').addClass('d-none');
                    }, 5000); // Sesuaikan dengan kebutuhan Anda
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('#error-alert').removeClass('d-none');
                    $('#error-message').text('Stok buku tidak mencukupi.');
                    // Tambahkan logika untuk menangani kesalahan di sini

                    // Sembunyikan alert setelah beberapa detik (opsional)
                    setTimeout(function() {
                        $('#error-alert').addClass('d-none');
                    }, 5000); // Sesuaikan dengan kebutuhan Anda
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                }
            });
        });
    });
</script>

{{-- comment --}}
{{-- <script>
    $(document).ready(function() {
        $('#form-comment').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: '{{ route('ulasan.create') }}',
                method: 'POST',
                data: formData,
                success: function(response) {
                    console.log(response);
                    $('#success-alert').removeClass('d-none');
                    $('#success-message').text('Berhasil menambahkan ulasan.');

                    setTimeout(function() {
                        $('#success-alert').addClass('d-none');
                    }, 5000);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('#error-alert').removeClass('d-none');
                    $('#error-message').text('Gagal menambahkan ulasan.');

                    setTimeout(function() {
                        $('#error-alert').addClass('d-none');
                    }, 5000);
                }
            });
        });
    });
</script> --}}


{{-- comment --}}
 <script>
    $(document).ready(function() {
        $('#form-comment').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            alert(formData);
            // Mengambil nilai dari elemen <span>
            // var jp = $('#jumlah_peminjaman').text();


                $.ajax({
                    url: '{{ route('ulasan.store') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                    $('#success-alert').removeClass('d-none');
                    $('#success-message').text('Berhasil mengajukan pinjaman buku.');

                    // Sembunyikan alert setelah beberapa detik (opsional)
                    setTimeout(function() {
                        $('#success-alert').addClass('d-none');
                    }, 5000); // Sesuaikan dengan kebutuhan Anda
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('#error-alert').removeClass('d-none');
                    $('#error-message').text('Stok buku tidak mencukupi.');
                    // Tambahkan logika untuk menangani kesalahan di sini

                    // Sembunyikan alert setelah beberapa detik (opsional)
                    setTimeout(function() {
                        $('#error-alert').addClass('d-none');
                    }, 5000); // Sesuaikan dengan kebutuhan Anda
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                }
                });

            // Menambahkan nilai jp ke dalam data yang akan dikirimkan
            formData += '&jumlah_peminjaman=' + jp;
            console.log(formData);
            $.ajax({
                url: "{{ route('landingPage.store') }}", // Sesuaikan dengan route Anda
                method: "POST",
                data: formData,
                success: function(response) {
                    console.log(response);
                    $('#success-alert').removeClass('d-none');
                    $('#success-message').text('Berhasil mengajukan pinjaman buku.');

                    // Sembunyikan alert setelah beberapa detik (opsional)
                    setTimeout(function() {
                        $('#success-alert').addClass('d-none');
                    }, 5000); // Sesuaikan dengan kebutuhan Anda
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('#error-alert').removeClass('d-none');
                    $('#error-message').text('Stok buku tidak mencukupi.');
                    // Tambahkan logika untuk menangani kesalahan di sini

                    // Sembunyikan alert setelah beberapa detik (opsional)
                    setTimeout(function() {
                        $('#error-alert').addClass('d-none');
                    }, 5000); // Sesuaikan dengan kebutuhan Anda
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                }
            });
        });
    });
</script>

<!-- LikeBtn.com BEGIN -->
{{-- <span class="likebtn-wrapper" data-theme="custom" data-icon_l="hrt6" data-icon_l_c_v="#fe1a1a"
    data-icon_d_c="#000000" data-icon_d_c_v="#000000" data-label_c="#777777" data-label_c_v="#777777"
    data-counter_l_c="#777777" data-counter_d_c="#777777" data-bg_c="rgba(146,18,18,0.06)"
    data-bg_c_v="rgba(248,248,248,0.12)" data-i18n_like=" " data-ef_voting="grow" data-identifier="btn_like">
</span> --}}
{{-- <script>
    (function(d, e, s) {
        if (d.getElementById("likebtn_wjs")) return;
        a = d.createElement(e);
        m = d.getElementsByTagName(e)[0];
        a.async = 1;
        a.id = "likebtn_wjs";
        a.src = s;
        m.parentNode.insertBefore(a, m)
    })(document, "script", "//w.likebtn.com/js/w/widget.js");
</script> --}}
<!-- LikeBtn.com END -->


{{-- main like script --}}
<script>
    $(document).ready(function() {
        $('.like').on('click', function(e) {
            e.preventDefault(); // Mencegah default action dari a href

            var id_user = $(this).data('id_user');
            var id_buku = $(this).data('id_buku');

            var $icon = $(this).find('i'); // Mengambil ikon di dalam tombol

            // Cek apakah tombol ini sudah memiliki kelas 'liked'
            if ($(this).hasClass('liked')) {
                // Jika sudah memiliki kelas 'liked', maka melakukan penghapusan data

                // Data yang akan dikirim dalam permintaan AJAX
                var formData = {
                    id_user: id_user,
                    id_buku: id_buku,
                    _token: '{{ csrf_token() }}', // Token CSRF
                };
                $.ajax({
                    url: '{{ route('unlike') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // Tanggapan sukses dari server
                        console.log(response);
                        // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                    },
                    error: function(xhr, status, error) {
                        // Penanganan kesalahan
                        console.error(error);
                        // Tambahkan logika untuk menangani kesalahan di sini
                    }
                });

                // Menghapus kelas 'liked' dari tombol
                $(this).removeClass('liked');

                // Mengubah teks tombol menjadi 'Like'
                // $(this).text('Like');

                // Mengubah kelas ikon hati menjadi 'fi-rs-heart'
                $icon.removeClass('fa-solid fa-heart').addClass('fi-rs-heart');

            } else {
                // Jika belum memiliki kelas 'liked', maka melakukan input data

                // Data yang akan dikirim dalam permintaan AJAX
                var formData = {
                    id_user: id_user,
                    id_buku: id_buku,
                    _token: '{{ csrf_token() }}' // Token CSRF
                };

                // Mengirim permintaan AJAX ke route 'koleksi.store'
                $.ajax({
                    url: '{{ route('koleksi.store') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // Tanggapan sukses dari server
                        console.log(response);
                        // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                    },
                    error: function(xhr, status, error) {
                        // Penanganan kesalahan
                        console.error(error);
                        // Tambahkan logika untuk menangani kesalahan di sini
                    }
                });

                // Menambahkan kelas 'liked' ke tombol
                $(this).addClass('liked');

                // // Mengubah teks tombol menjadi 'Unlike'
                // $(this).text('Unlike');

                // Mengubah kelas ikon hati menjadi 'fa-solid fa-heart'
                $icon.removeClass('fi-rs-heart').addClass('fa-solid fa-heart');
            }
        });
    });
</script>



{{-- <script>
    $(document).ready(function() {
        $('.like').on('click', function(e) {
            e.preventDefault(); // Mencegah default action dari a href

            var id_user = $(this).data('id_user');
            var id_buku = $(this).data('id_buku')
            // alert(id_buku);
            // Cek apakah tombol ini sudah memiliki kelas 'liked'
            if ($(this).hasClass('liked')) {
                // Jika sudah memiliki kelas 'liked', maka melakukan penghapusan data

                // Data yang akan dikirim dalam permintaan AJAX
                var formData = {
                    // id_user: id_user,
                    // id_buku: id_buku,
                    _token: '{{ csrf_token() }}', // Token CSRF

                };
                $.ajax({
                    url: '{{ route('unlike') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // Tanggapan sukses dari server
                        console.log(response);
                        // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                    },
                    error: function(xhr, status, error) {
                        // Penanganan kesalahan
                        console.error(error);
                        // Tambahkan logika untuk menangani kesalahan di sini
                    }
                });


                // Menghapus kelas 'liked' dari tombol
                $(this).removeClass('liked');
                // Mengubah teks tombol menjadi 'Like'
                $(this).text('Like');
            } else {
                // Jika belum memiliki kelas 'liked', maka melakukan input data

                // Data yang akan dikirim dalam permintaan AJAX
                var formData = {
                    id_user: id_user,
                    id_buku: id_buku,
                    _token: '{{ csrf_token() }}' // Token CSRF
                };

                // Mengirim permintaan AJAX ke route 'koleksi.store'
                $.ajax({
                    url: '{{ route('koleksi.store') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        // Tanggapan sukses dari server
                        console.log(response);
                        // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                    },
                    error: function(xhr, status, error) {
                        // Penanganan kesalahan
                        console.error(error);
                        // Tambahkan logika untuk menangani kesalahan di sini
                    }
                });

                // Menambahkan kelas 'liked' ke tombol
                $(this).addClass('liked');
                // Mengubah teks tombol menjadi 'Unlike'
                $(this).text('Unlike');
            }
        });
    });
</script> --}}


{{-- <script>
    $(document).ready(function() {
        $('.like').on('click', function(e) {
            e.preventDefault(); // Mencegah default action dari a href

            var id_user = $('.id_user').val();
            var id_buku = $('.id_buku').val();
            // alert(id_user);
            // Data yang akan dikirim dalam permintaan AJAX
            var formData = {
                id_user: id_user,
                id_buku: id_buku,
                _token: '{{ csrf_token() }}' // Token CSRF
            };

            // Mengirim permintaan AJAX ke route 'koleksi.create'
            $.ajax({
                url: '{{ route('koleksi.store') }}',
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Tanggapan sukses dari server
                    console.log(response);
                    // Tambahkan logika lain di sini, misalnya menampilkan pesan sukses
                },
                error: function(xhr, status, error) {
                    // Penanganan kesalahan
                    console.error(error);
                    // Tambahkan logika untuk menangani kesalahan di sini
                }
            });
        });
    });
</script> --}}



</body>

</html>

