@extends('web.app')
@include('web.includes.header')
@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <!-- row -->
        <div class="row">
            <div class="intro intro-carousel">
                <div id="carousel" class="owl-carousel owl-theme">
                    <div class="carousel-item-a intro-item bg-image" style="background-image: url('./img/galery-1.jpg');">
                        <div class="overlay overlay-a"></div>
                        <div class="intro-content display-table">
                            <div class="table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="intro-body">
                                                {{--                                                    <p class="intro-title-top">Doral, Florida--}}
                                                {{--                                                        <br> 78345</p>--}}
                                                <span class="text-white">"Tại sao VietFarm chúng tôi chăm chỉ làm việc<br>
                                        để đưa ra những sản phẩm hưu cơ,<br>
                                        an toàn đến tận tay người tiêu dùng"</span>
                                                <p class="color-b">MARK ZUCKREBERG - Chuyên gia</p>
                                                {{--                                                    <h1 class="intro-title mb-4">--}}
                                                {{--                                                        <span class="color-b">204 </span> Mount--}}
                                                {{--                                                        <br> Olive Road Two</h1>--}}
                                                {{--                                                    <p class="intro-subtitle intro-price">--}}
                                                {{--                                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>--}}
                                                {{--                                                    </p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Intro Section -->
        </div>
    </div>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3">
                    <!-- category widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Danh Mục sản phẩm</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#">Sản phẩm mới <span>451</span></a></li>
                                <li><a href="#">Trái cây <span>230</span></a></li>
                                <li><a href="#">Rau củ<span>40</span></a></li>
                                <li><a href="#">Giỏ Quà<span>38</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /category widget -->
                    <!-- galery widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Chứng Nhận</h2>
                        </div>
                        <div class="galery-widget">
                            <img src="{{asset('./img/galery-1.jpg')}}" alt="" style="width: 250px">
                        </div>
                    </div>
                    <!-- /galery widget -->
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wrapper">
                                <div class="image-gallery">
                                    <aside class="thumbnails">
                                        <a href="javascript:void(0)" class="selected thumbnail" data-big="http://placekitten.com/420/600">
                                            <div class="thumbnail-image" style="background-image: url(http://placekitten.com/420/600)"></div>
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail" data-big="http://placekitten.com/450/600">
                                            <div class="thumbnail-image" style="background-image: url(http://placekitten.com/450/600)"></div>
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail" data-big="http://placekitten.com/460/700">
                                            <div class="thumbnail-image" style="background-image: url(http://placekitten.com/460/700)"></div>
                                        </a>
                                    </aside>

                                    <main class="primary" style="background-image: url('http://placekitten.com/420/600');"></main>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="property-agent">
                                <h4 class="title-agent">Anabella Geller</h4>
                                <p class="color-text-a">
                                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                    dui. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim.
                                </p>
                                <ul class="list">
                                    <li class="d-flex justify-content-between">
                                        <strong>Property ID:</strong>
                                        <span>1134</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Location:</strong>
                                        <span>Chicago, IL 606543</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Property Type:</strong>
                                        <span>House</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Status:</strong>
                                        <span>Sale</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Area:</strong>
                                        <span>340m
                          <sup>2</sup>
                        </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Beds:</strong>
                                        <span>4</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Baths:</strong>
                                        <span>2</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Garage:</strong>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12" style="margin-top: 30px">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Chi tiết sản phẩm</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                    neque, auctor sit amet
                                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                                    nibh pulvinar quam id dui posuere blandit.
                                </p>
                                <p class="description color-text-a no-margin">
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                                    malesuada. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Những sản phẩm liên quan</h2>
                        </div>
                        <div class="title-link">
                            <a href="blog-grid.html">Tất cả sản phẩm
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pro-detail-carousel" class="owl-carousel owl-theme">
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('/img/post-2.jpg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">House</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">House is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                {{--<div class="card-date">--}}
                                    {{--<span class="date-b">3.450.000 đ</span>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('/img/post-5.jpg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Travel</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Travel is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                {{--<div class="card-date">--}}
                                    {{--<span class="date-b">3.450.000 đ</span>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('/img/post-7.jpg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Park</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Park is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                {{--<div class="card-date">--}}
                                    {{--<span class="date-b">3.450.000 đ</span>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('/img/post-3.jpg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Travel</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="#">Travel is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                {{--<div class="card-date">--}}
                                    {{--<span class="date-b">3.450.000 đ</span>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Latest News Section -->

@endsection
