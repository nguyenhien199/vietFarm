@extends('web.app')

@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
            <!-- row -->

            <div class="row">
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
                @foreach($product as $pro)
                <div class="carousel-item-c">
{{--                    <div class="card-box-b card-shadow news-box">--}}
                    <div class="post post-row">
                    @foreach($pro as $sp)

                                    <div class="col-6">
                                        <a class="post-img" href="{{url('/san-pham', $sp['url'])}}"><img src="{{!empty($pro->image) ? URL::to($sp->image) : URL::to('/images/noimage.jpg')}}" alt=""></a>
                                        <div class="post-body">
                                            <h3 class="post-title"><a href="{{url('/san-pham', $sp['url'])}}">{{$sp['name']}}</a></h3>
                                            {{--                            <ul class="post-meta">--}}
                                            {{--                                <li><a href="author.html">John Doe</a></li>--}}
                                            {{--                                <li>20 April 2018</li>--}}
                                            {{--                            </ul>--}}
                                            <p>{{$sp['description']}}</p>
                                        </div>
                                    </div>

                    @endforeach
                    </div>
{{--                    </div>--}}
                </div>
                @endforeach
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
            <div class="">
                <div class="row col-md-12">
                    <!-- post share -->
                    <!-- /post share -->

                    <!-- post content -->
                    <div class="section-row">
                        <h3 class="text-center">TRUYỀN THÔNG NÓI GÌ VỀ VIETFARM</h3>
                        <hr style="width: 200px; text-align: center; border: 1px solid"/>
                        <p style="text-align: center;">VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng</p>
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <iframe width="500" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                            </div>
                            <div class="col-md-6">
                                <h4>TRUYỀN THÔNG NÓI GÌ VỀ VIETFARM</h4>
                                <p>
                                    VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng,VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng, VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng, VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng, VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng, VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng
                                </p>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-4">
                                <img src="./img/post-13.jpg" alt="" style="width: 100%">
                                <p>Truyền thông nói gì về VietFarm</p>
                            </div>
                            <div class="col-md-4">
                                <img src="./img/post-13.jpg" alt="" style="width: 100%">
                                <p>Truyền thông nói gì về VietFarm</p>
                            </div>
                            <div class="col-md-4">
                                <img src="./img/post-13.jpg" alt="" style="width: 100%">
                                <p>Truyền thông nói gì về VietFarm</p>
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
