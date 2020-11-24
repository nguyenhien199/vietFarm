@extends('web.app')
@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <!-- row -->
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
                                @foreach($categories as $cat)
                                <li><a href="#">{{$cat->name}} <span>451</span></a></li>
                                @endforeach
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
                                        <a href="javascript:void(0)" class="selected thumbnail" data-big="{{$service->image}}">
                                            <div class="thumbnail-image" style="background-image: url({{$service->image}})"></div>
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail" data-big="{{$service->image}}">
                                            <div class="thumbnail-image" style="background-image: url({{$service->image}})"></div>
                                        </a>
                                        <a href="javascript:void(0)" class="thumbnail" data-big="{{$service->image}}">
                                            <div class="thumbnail-image" style="background-image: url({{$service->image}})"></div>
                                        </a>
                                    </aside>

                                    <main class="primary" style="background-image: url({{$service->image}});"></main>
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
                                {!!$service->content!!}
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
                @foreach($dv_lienquan as $lq)
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset($lq->image)}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">House</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="{{url('/san-pham', $lq->url)}}">{{$lq->name}}</a>
                                    </h2>
                                </div>
                                {{--<div class="card-date">--}}
                                    {{--<span class="date-b">3.450.000 đ</span>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Latest News Section -->

@endsection
