@extends('web.app')

@section('content')
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <div id="nav-top">
                <h1>SẢN PHẨM</h1>
                <hr style="width: 100px; text-align: center; border: 1px solid"/>
                <p>"Chọn lọc những gì tốt nhất từ thiên nhiên để chăm sóc gia đình bạn"</p>
            </div>
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        <li><a href="#">SẢN PHẨM MỚI</a></li>
                        <li><a href="#">TRÁI CÂY</a></li>
                        <li><a href="#">RAU CỦ</a></li>
                        <li><a href="#">RƯỢU</a></li>
                        <li><a href="#">GIỎ QUÀ</a></li>
                        <li><a href="#">PHÂN BÓN</a></li>
                    </ul>
                    <!-- /nav -->
                </div>
            </div>
        </div>
        <!-- /NAV -->
    </header>
    <!--SECTION -->
    <!-- ======= Latest News Section ======= -->
    <section class="section section-news section-t8">
        <div class="container">
            <div id="new-carousel" class="owl-carousel owl-theme">
                <div class="carousel-item-c">
                    {{--                    <div class="card-box-b card-shadow news-box">--}}
                    <div class="post post-row">
                        <a class="post-img" href="{{url('product/detail')}}"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Dưa Lưới</a></h3>
                            {{--                            <ul class="post-meta">--}}
                            {{--                                <li><a href="author.html">John Doe</a></li>--}}
                            {{--                                <li>20 April 2018</li>--}}
                            {{--                            </ul>--}}
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                    <div class="post post-row">
                        <a class="post-img" href="{{url('product/detail')}}"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Dưa Lưới</a></h3>
                            {{--                            <ul class="post-meta">--}}
                            {{--                                <li><a href="author.html">John Doe</a></li>--}}
                            {{--                                <li>20 April 2018</li>--}}
                            {{--                            </ul>--}}
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                    {{--                    </div>--}}
                </div>
                <div class="carousel-item-c">
                    {{--                    <div class="card-box-b card-shadow news-box">--}}
                    <div class="post post-row">
                        <a class="post-img" href="{{url('product/detail')}}"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Rượu Dưa Lưới</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                    <div class="post post-row">
                        <a class="post-img" href="{{url('product/detail')}}"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Rượu Dưa Lưới</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                    {{--                    </div>--}}
                </div>
                <div class="carousel-item-c">
                    <div class="post post-row">
                        <a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Rượu Dưa Lưới</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                    <div class="post post-row">
                        <a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Rượu Dưa Lưới</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="post post-row">
                        <a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Rượu Dưa Lưới</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                    <div class="post post-row">
                        <a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Rượu Dưa Lưới</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->
    <!-- /SECTION -->

@endsection
