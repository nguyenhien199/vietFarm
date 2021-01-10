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
                            <h2 class="title">Danh Mục Phân Bón</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                @foreach($categories as $cat)
                                <li><a href="#">{{$cat->name}} <span>{{$cat->total}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <h1 style="text-align: left">{{$fertilizers->name}}</h1>
                                <div class="image-gallery">
                                    <main class="primary" style="background-image: url({{$fertilizers->image}});"></main>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12" style="margin-top: 30px">
                                    <div class="title-box-d">
                                        <h2 class="title-d">Chi tiết phân bón</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                {!!$fertilizers->content!!}
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
                            <h4 class="title-a">Những phân bón liên quan</h4>
                        </div>
                        <div class="title-link">
                            <a href="#">Tất cả phân bón
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
                            <img src="{{asset($lq->image)}}" alt="{{$lq->name}}" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b"></a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="{{url('/san-pham', $lq->url)}}">{{$lq->name}}</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Latest News Section -->

@endsection
