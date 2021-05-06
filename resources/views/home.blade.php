@extends('layouts.front')

@section('content')

    <div class="categori-menu-wrapper2 clearfix">
        <div class="pl-200 pr-200">
            <div class="categori-style-2">
                <div class="category-heading-2">
                    <h3>All Departments</h3>
                    <div class="category-menu-list">
                        <ul>
                            @foreach ($categories as $category)

                                <li>
                                    <a href="{{route('products.index', ['category_id' => $category->id])}}"><img alt="" src="assets/img/icon-img/5.png">{{$category->name}}<i class="pe-7s-angle-right"></i></a>

                                            @php
                                                $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                            @endphp

                                        @if($children->isNotEmpty())
                                        <div class="category-menu-dropdown">
                                            @foreach ($children as $child)
                                                <div class="category-dropdown-style category-common4 mb-40">
                                                    <h4 class="categories-subtitle">
                                                        <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                            {{$child->name}}
                                                        </a>
                                                    </h4>
                                                        @php
                                                            $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                                        @endphp
                                                @if ($grandChild->isNotEmpty())
                                                    <ul>
                                                        @foreach ($grandChild as $c)
                                                            <li><a href="{{route('products.index', ['category_id' => $c->id])}}"> {{$c->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                </div>
                                            @endforeach
                                        </div>
                                        @endif
                                        
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-style-4 menu-hover">
                <nav class="d-flex">
                    <ul>
                        <li><a href="{{url('/')}}">Home </a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">contact</a></li>
                        {{-- For dropdown and new menu  --}}
                        {{-- <li><a href="#">About <i class="pe-7s-angle-down"></i> <span class="sticker-new">new</span></a>
                            <ul class="single-dropdown">
                                <li><a href="index.html">Fashion</a></li>
                                <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    <ul class="ml-auto">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url(assets/img/slider/6.jpg)">
                <div class="container">
                    <div class="slider-content-4 fadeinup-animated">
                        <h2 class="animated">Say hello! to the <br>future.</h2>
                        <h4 class="animated">Best Product With warranty  </h4>
                        <a class="electro-slider-btn btn-hover animated" href="product-details.html">buy now</a>
                    </div>
                </div>
            </div>
            <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url(assets/img/slider/6.jpg)">
                <div class="container">
                    <div class="slider-content-4 fadeinup-animated">
                        <h2 class="animated">Say hello! to the <br>future.</h2>
                        <h4 class="animated">Best Product you can ever get  </h4>
                        <a class="electro-slider-btn btn-hover animated" href="product-details.html">buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-area wrapper-padding gray-bg-7 pt-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="banner-wrapper-4 mb-30">
                        <a href="#"><img src="assets/img/banner/20.jpg" alt=""></a>
                        <div class="banner-content4-style1">
                            <h4>Best <br>Electronics <br>Products.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-wrapper-4 mb-30">
                        <a href="#"><img src="assets/img/banner/21.jpg" alt=""></a>
                        <div class="banner-content4-style2">
                            <h5 class="p-left">get</h5>
                            <h2>25% </h2>
                            <h5 class="p-right">off</h5>
                            <h3>Bitso X1202</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-wrapper-4 mb-30">
                        <a href="#"><img src="assets/img/banner/22.jpg" alt=""></a>
                        <div class="banner-content4-style3">
                            <h1>Up to <br>10% Off</h1>
                            <h3>Lonovo Vio D22</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="electro-product-wrapper wrapper-padding pt-85 pb-75 gray-bg-7">
        <div class="container">
            <div class="section-title-4 text-center mb-45">
                <h2>Top Products</h2>
            </div>
            <div class="row">
                @foreach ($allproducts as $product)
                    @include('product._single_product')
                @endforeach
            </div>
        </div>
    </div>

    <div class="banner-area wrapper-padding pt-15 pb-95 gray-bg-7">
        <div class="container">
            <div class="electro-fexible-banner bg-img" style="background-image: url(assets/img/banner/23.jpg)">
                <div class="fexible-content fexible-content-2 ">
                    <h3>Play with flexible</h3>
                    <p>Multicontrol Smooth Controller, Black Color All Buttons
                        <br>are somooth, Super Shine.</p>
                    <a class="btn-hover flexible-btn" href="product-details.html">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="best-selling-area product-area-2 wrapper-padding pt-100 pb-70 gray-bg-7">
        <div class="section-title-4 text-center mb-60">
            <h2>Best Selling</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="assets/img/product/electro/16.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="assets/img/product/electro/17.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="assets/img/product/electro/18.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="assets/img/product/electro/19.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="assets/img/product/electro/20.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="assets/img/product/electro/21.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
