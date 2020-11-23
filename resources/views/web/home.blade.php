@extends('web.app')

@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
            <!-- row -->

            <div class="row">
{{--                <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--                    <!-- Indicators -->--}}
{{--                    <ol class="carousel-indicators">--}}
{{--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
{{--                    </ol>--}}

{{--                    <!-- Wrapper for slides -->--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <div class="item active">--}}
{{--                            --}}{{--                            <div class="desc">This Is Description</div>--}}
{{--                            <img src="{{asset('img/banner.jpg')}}" alt="Los Angeles" style="width:100%;">--}}
{{--                            <div class="carousel-caption">--}}
{{--                                <div class="pull-left">--}}
{{--                                    <span class="text-white pull-left">"Tại sao VietFarm chúng tôi chăm chỉ làm việc<br>--}}
{{--                                        để đưa ra những sản phẩm hưu cơ,<br>--}}
{{--                                        an toàn đến tận tay người tiêu dùng"</span>--}}
{{--                                    <p>MARK ZUCKREBERG - Chuyên gia</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="item">--}}
{{--                            --}}{{--                            <div class="desc">This Is Description</div>--}}
{{--                            <img src="{{asset('img/banner.jpg')}}" alt="Chicago" style="width:100%;">--}}
{{--                        </div>--}}

{{--                        <div class="item">--}}
{{--                            --}}{{--                            <div class="desc">This Is Description</div>--}}
{{--                            <img src="{{asset('img/banner.jpg')}}" alt="New york" style="width:100%;">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Left and right controls -->--}}
{{--                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">--}}
{{--                        <span class="glyphicon glyphicon-chevron-left"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                    <a class="right carousel-control" href="#myCarousel" data-slide="next">--}}
{{--                        <span class="glyphicon glyphicon-chevron-right"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <!-- ======= Intro Section ======= -->
                <div class="intro intro-carousel">
                    <div id="carousel" class="owl-carousel owl-theme">
                        <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
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
                        <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
                            <div class="overlay overlay-a"></div>
                            <div class="intro-content display-table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="intro-body">
                                                    <p class="intro-title-top">Doral, Florida
                                                        <br> 78345</p>
                                                    <span class="text-white">"Tại sao VietFarm chúng tôi chăm chỉ làm việc<br>
                                        để đưa ra những sản phẩm hưu cơ,<br>
                                        an toàn đến tận tay người tiêu dùng"</span>
                                                    <p class="color-b">MARK ZUCKREBERG - Chuyên gia</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
                            <div class="overlay overlay-a"></div>
                            <div class="intro-content display-table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="intro-body">
                                                    <p class="intro-title-top">Doral, Florida
                                                        <br> 78345</p>
                                                    <span class="text-white">"Tại sao VietFarm chúng tôi chăm chỉ làm việc<br>
                                        để đưa ra những sản phẩm hưu cơ,<br>
                                        an toàn đến tận tay người tiêu dùng"</span>
                                                    <p class="color-b">MARK ZUCKREBERG - Chuyên gia</p>
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
    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="title-wrap d-flex justify-content-between">--}}
{{--                        <div class="title-box">--}}
{{--                            <h2 class="title-a">Testimonials</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                @foreach($newPost as $new)
                <div class="carousel-item-a">
                    <div class="post row">
                        <div class="col-md-5">
                            <a class="post-img" href="{{url('new/new-detail',[$new->id])}}" style="margin-top: 50px"><img src="{{$new->image}}" alt=""></a>
                        </div>
                        <div class="col-md-7" style="margin-top: 10px;">
                            <h3 class="post-title">
                                <a href="{{url('new/new-detail',[$new->id])}}">{{$new->title}}</a></h3>
                            <p>
                               {{$new->description}}
                            </p>
                            <a class="btn btn-info btn-x-ch-tit" href="{{url('bai-viet',[$new->url])}}">XEM CHI TIẾT</a>
                </div>
            </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Testimonials Section -->
{{--    <div class="section">--}}
{{--        <!-- container -->--}}
{{--        <div class="container">--}}
{{--            <!-- post -->--}}
{{--            <div class="post row">--}}
{{--                        <div class="col-md-5">--}}
{{--                            <a class="post-img" href="blog-post.html" style="margin-top: 50px"><img src="./img/post-13.jpg" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-7" style="margin-top: 10px;">--}}
{{--                            <h3 class="post-title">--}}
{{--                                <a href="blog-post.html">VÌ NỀN CÔNG NGHIỆP VIỆT. <br>--}}
{{--                                    <div style="width: 80px ; border-top: 2px solid; margin-bottom: 3px; margin-right: 10px; margin-left: 10px; display: inline-block"> </div>--}}
{{--                                    CHUẨN ORGANIC</a></h3>--}}
{{--                            <p>--}}
{{--                                VietFarm không ngừng phát triển vì sức khỏe cộng đồng và vì một nền công nghiệp sạch. Với--}}
{{--                                những sản phẩm theo mô hình khép kín, chăn nuôi đến sử dụng phân bón và--}}
{{--                                trồng trọt và sản xuất, chúng tôi hướng đến sản phẩm nông nghiệp CHUẨN ORGANIC--}}
{{--                                để phục vụ người tiêu dùng với giá cả tốt nhất, cạnh trang với thị trường trong nước và quốc tế.--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                Qua hơn 10 năm hoạt động cùng với những nỗ lựu và nghiên cưu đổi mới không ngừng--}}
{{--                                dựa trên nền tảng sẵn có, VietFarm hiện có địa bàn hoạt động trên các tỉnh--}}
{{--                                miền Nam đông thời đang mục tiêu mở rộng ra Hà Nội và các tỉnh miền Bắc, tập--}}
{{--                                trung hơn vào những vùng đất cằn cỗi và khó khai thác nông nghiệp thuần túy--}}
{{--                            </p>--}}
{{--                            <a class="btn btn-info btn-x-ch-tit" href="">XEM CHI TIẾT</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--            <!-- /post -->--}}
{{--        </div>--}}
{{--        <!-- /container -->--}}
{{--    </div>--}}
    <div class="section">
        <!-- container -->
        <div class="container block-info-2" style="background-image: url(./img/bg-home22.jpg); background-size:100%;   background-position: center;
  background-repeat: no-repeat; min-height: 500px">
            <div class="row">
                <h2 class="text-center">VIET FARM TỰ HÀO CUNG CẤP</h2>
                <hr style="width: 200px; text-align: center; border: 1px solid"/>
            </div>
            <div class="row">
               <div class="col-md-6">
                   <div class="info-1">
                       <img style="height: 50px;" src="{{asset('img/icon-info-1.jpg')}}">
                       <div style="clear: both">
                           <h4>Thực phẩm Organic</h4>
                           <p>
                               Luông mang trong mình tự hào với những thực
                               phẩm organic có chất lượng vượt trội khác biệt
                               hẳn so với những dòng sản phẩm cùng loại trên thị
                               trường
                           </p>
                       </div>
                   </div>
               </div>
                <div class="col-md-6">
                    <div class="info-2 pull-right">
                        <img class="pull-right" style="height: 50px;" src="{{asset('img/icon-info-2.jpg')}}">
                       <div class="text-right" style="clear: both">
                           <h4>Thực phẩm Organic</h4>
                           <p>
                               Luông mang trong mình tự hào với những thực
                               phẩm organic có chất lượng vượt trội khác biệt
                               hẳn so với những dòng sản phẩm cùng loại trên thị
                               trường
                           </p>
                       </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                   <div class="info-3">
                       <img style="height: 50px;" src="{{asset('img/icon-info-3.jpg')}}">
                       <div  style="clear: both">
                           <h4>Thực phẩm Organic</h4>
                           <p>
                               Luông mang trong mình tự hào với những thực
                               phẩm organic có chất lượng vượt trội khác biệt
                               hẳn so với những dòng sản phẩm cùng loại trên thị
                               trường
                           </p>
                       </div>
                   </div>
               </div>
                <div class="col-md-6">
                    <div class="info-4 pull-right">
                        <img class="pull-right" style="height: 50px;" src="{{asset('img/icon-info-4.jpg')}}">
                        <div class="text-right" style="clear: both">
                            <h4>Thực phẩm Organic</h4>
                            <p>
                                Luông mang trong mình tự hào với những thực
                                phẩm organic có chất lượng vượt trội khác biệt
                                hẳn so với những dòng sản phẩm cùng loại trên thị
                                trường
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class=" block-info-3" style="background-image: url(./img/bg-home3.jpg); background-size:100%;   background-position: center;
  background-repeat: no-repeat; min-height: 200px">
            <div class="row" style="height: 50%">
                <div class="col-md-offset-5 col-md-7">
                    <p>
                        VietFarm đi tiên phong về ứng dụng công nghệ cao
                    </p>
                    <h3>
                        VÌ MỘT NỀN NÔNG NGHIỆP CHUẨN ORGANIC
                    </h3>
                    <p>
                        MANG LẠI NHỮNG GIÁ TRỊ BỀN VỮNG CHO CUỘC SÔNG <br>
                        VÀ ĐEM LẠI NHỮNG BỮA ĂN CHẤT LƯỢNG CHO GIA ĐÌNH BẠN
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /SECTION -->

    <!--SECTION -->
    <!-- ======= Latest News Section ======= -->
    <section class="section-news">
        <div class="container">
            <div class="row">
                <h2 class="text-center">SẢN PHẨM</h2>
                <hr style="width: 100px; text-align: center; border: 1px solid"/>
            </div>
            <div id="new-carousel" class="owl-carousel owl-theme">
                <div class="carousel-item-c">
{{--                    <div class="card-box-b card-shadow news-box">--}}
                                <div class="post post-row">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
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
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-13.jpg" alt=""></a>
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
    <!--SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-8">
                    <!-- post share -->
                    <!-- /post share -->

                    <!-- post content -->
                    <div class="section-row">
                        <h3>VietFarm Luôn Trân trọng sự cổ vũ và ủng hộ của cộng đồng</h3>
                        <p>Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p>
                        <figure class="pull-right">
                            <iframe width="400" height="225" src="https://www.youtube.com/embed/UnuP4vrLvc4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <figcaption>Lorem ipsum dolor sit amet, mea ad idque detraxit,</figcaption>
                        </figure>
                        <p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>

                </div>
                </div>
                <div class="col-md-4">
                    <!-- category widget -->
                    {{--<div class="aside-widget">--}}
                        {{--<div class="section-title">--}}
                            {{--<h2 class="title">Danh Mục</h2>--}}
                        {{--</div>--}}
                        {{--<div class="category-widget">--}}
                            {{--<ul>--}}
                                {{--<li><a href="#">VietFarm <span>451</span></a></li>--}}
                                {{--<li><a href="#">Sản Phẩm <span>230</span></a></li>--}}
                                {{--<li><a href="#">Nhà màng <span>40</span></a></li>--}}
                                {{--<li><a href="#">Chuyển giao CN <span>38</span></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- /category widget -->
                    <!-- galery widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Instagram</h2>
                        </div>
                        <div class="galery-widget">
                            <ul>
                                <li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /galery widget -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    <!--SECTION -->
    <section id="clients" class="clients">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <h2 class="text-center">ĐỐI TÁC CỦA VIETFARM</h2>
            <hr style="width: 100px; text-align: center; border: 1px solid">

            <div class="row no-gutters clients-wrap clearfix aos-init aos-animate" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /SECTION -->
@endsection
