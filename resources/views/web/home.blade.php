@extends('web.app')

@section('content')
    <!-- SECTION -->
    <div class="section" style="padding-top:0 ">
        <!-- container -->
        <!-- row -->

        <div>
            <!-- ======= Intro Section ======= -->
            <div class="intro intro-carousel">
                <script>
                    $(document).ready(function() {
                        $(".owl-stage").owlCarousel({
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 5000,
                            smartSpeed: 1500,
                            animateIn: 'linear',
                            animateOut: 'linear'
                        });
                    });
                </script>
                <div id="carousel" class="owl-carousel owl-theme">
                    @foreach($slide as $sl)
                        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset($sl->image)}})">
                            <div class="overlay overlay-a"></div>
                            <div class="intro-content display-table">
                                <div class="table-cell">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="intro-body">
                                                    <span class="text-white" alt="Ảnh trang trại VietFram">{{$sl->content}}</span>
                                                    <p class="color-b">{{$sl->author}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                            <div class="col-md-7">
                                <a class="post-img post-new new-item" href="{{url('bai-viet',[$new->url])}}" style="margin-top: 15px">
                                    <img src="{{$new->image}}" alt="{{$new->title}}">
                                </a>
                            </div>
                            <div class="col-md-5" style="margin-top: 10px;">
                                <h3 class="post-title">
                                    <a href="{{url('bai-viet',[$new->url])}}">{{$new->title}}</a></h3>
                                <p style="font-size: 21px;">
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
                            <h3>Thực phẩm Organic</h3>
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
                            <h3>Thi công nhà màng</h3>
                            <p>
                                VietFarm cung cấp hàng trăm phương thức kinh doanh
                                nhà hàng đang phát triển và thành công rực rỡ.
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
                            <h3>Chuyển giao công nghệ</h3>
                            <p>
                                VietFarm cung cấp tự hàng cung cấp những công
                                nghệ phát triển nhất áp dụng vào cây trồng.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-4 pull-right">
                        <img class="pull-right" style="height: 50px;" src="{{asset('img/icon-info-4.jpg')}}">
                        <div class="text-right" style="clear: both">
                            <h3>Phân bón hữu cơ sinh học</h3>
                            <p>
                                Phân bón hữu cơ VietFarm nhãn hiệu Lộc Việt
                                dùng để cải tạo đất bạc màu, đất nghèo dinh
                                dưỡng, làm cho đất dễ hoán đổi cây trồng, giảm
                                việc sử dụng phân bón hóa học.
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
    <div class="section" style="padding-top: 20px; padding-bottom: 20px">
        <!-- container -->
        <div class=" block-info-3" style="background-image: url(./img/bg-home3.jpg); background-size:100%;   background-position: center;
  background-repeat: no-repeat; min-height: 400px; background-size: cover;">
            <div style="height: 50%">
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
    <section class="section-news" id="section-products">
        <div class="container">
            <div class="row">
                <h2 class="text-center" style="padding-top: 40px">SẢN PHẨM</h2>
                <hr style="width: 100px; text-align: center; border: 1px solid"/>
            </div>
            <div class="row">
                @foreach($product as $pro)
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 colums-products">
                        <div class="img-products">
                            <a href="{{url('/san-pham', $pro->url)}}">
                                <img width="260" height="260" src="{{asset($pro->image)}}" class="attachment-product-thumbnails size-product-thumbnails wp-post-image" alt="{{$pro->name}}" title="{{$pro->name}}">
                            </a>
                        </div>
                        <div class="info-products">
                            <a class="name-products" href="{{url('/san-pham', $pro->url)}}" title="">{{$pro->name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->
    <!-- /SECTION -->
    <!--SECTION -->
    <div class="section section_certification">
        <!-- container -->
        <div class="container">
            <h2 class="text-center">TIÊU CHUẨN CHẤT LƯỢNG</h2>
            <hr style="width: 200px; text-align: center; border: 1px solid"/>
            <div class="row">
                @foreach($certifications as $certification)
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 colums-quality">
                        <div class="img-quality">
                            <a href="{{$certification->url}}">
                                <img width="307" height="179" src="{{$certification->image}}" class="attachment-large size-large wp-post-image"
                                     alt="{{$certification->name}}"
                                     title="ĐÀ LẠT – KẾT TINH KÌ DIỆU TỪ ĐẤT LÀNH"
                                     sizes="(max-width: 307px) 100vw, 307px">
                            </a>
                            <div class="info-quality">
                                <a class="name-quality" href="{{url('/chung-nhan', $certification->url)}}">{{$certification->name}}</a>
                                <p class="excerpt-quality">&nbsp; {{$certification->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- /container -->
    </div>
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
                        <h2 class="text-center">TRUYỀN THÔNG NÓI GÌ VỀ VIETFARM</h2>
                        <hr style="width: 200px; text-align: center; border: 1px solid"/>
                        <p style="text-align: center;">VietFarm luôn trân trọng sự cổ vũ và ủng hộ của cộng đồng</p>
                        <div class="row col-md-12">
                            <?php $k = 1 ?>
                            @foreach($services as $service)
                                @if($k == 1)
                                    <div class="col-md-6">
                                        <iframe width="500" id="iframe-video" height="315" src="{{$service->url_video}}"></iframe>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>{{$service->name}}</h3>
                                        <p>
                                            {{$service->description}}
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                @else
                                    <div class="col-md-4">
                                        <img src="{{$service->image}}" alt="{{$service->name}}" style="width: 100%">
                                        <p>{{$service->name}}</p>
                                    </div>
                                @endif
                                <?php $k++; ?>
                            @endforeach
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

            <div id="owl-demo" class=" owl-theme">
                <div class="item">
                    <a href="http://ameii.vn/">
                        <img src="http://ameii.vn/data/banner/usl1553652990.png" alt="Owl Image">
                    </a>
                </div>

                <div class="item">
                    <a href="https://www.mard.gov.vn/Pages/default.aspx">
                        <img src="https://www.mard.gov.vn/PublishingImages/Footer/bnn-logo.png" alt="Owl Image">
                    </a>
                </div>

                <div class="item">
                    <a href="http://gib.com.vn/">
                        <img src="http://gib.com.vn/uploads/worigin/2017/05/25/Logo_gib-up_web592646c7b6156_850c2ef14d9158404479e263aab36f23.png" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="https://nmri.org.vn/">
                        <img src="https://nmri.org.vn/uploads/logo_2.png" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="https://www.bigc.vn/">
                        <img style="height: 151px;background-size: auto;" src="https://www.bigc.vn/img/logo.png?v=1" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('img/dt1.jpg')}}" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('img/dt2.png')}}" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('img/dt3.jpg')}}" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('img/dt4.png')}}" alt="Owl Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/asset/img/dt5.png')}}" alt="Owl Image">
                    </a>
                </div>
            </div>

            <style>
                #owl-demo .item{
                    margin: 3px auto;
                }
                #owl-demo .item img{
                    display: block;
                    width: 60%;
                    height: auto;
                    margin: auto;
                    background-size: cover;
                }
                #owl-demo .owl-stage-outer{
                    overflow: hidden;
                }
                #owl-demo .owl-item{
                    float: left;
                }
                #owl-demo .owl-nav,#owl-demo .owl-dots{
                    display: none;
                }
            </style>
        </div>
    </section>
    <!-- /SECTION -->
@endsection
