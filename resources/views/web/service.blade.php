@extends('web.app')

@section('free-style')
    <link type="text/css" rel="stylesheet" href="css/pro-style.css"/>
@endsection

@section('content')
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <div id="nav-top">
                <h1>DỊCH VỤ</h1>
                <hr style="width: 100px; text-align: center; border: 1px solid"/>
                {{--<p>"Chọn lọc những gì tốt nhất từ thiên nhiên để chăm sóc gia đình bạn"</p>--}}
            </div>
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        <?php $j=1; ?>
                        @foreach($categories as $category)
                            <li class="@if($j==1) active @endif"><a data-toggle="tab" href="#dich_vu_{{$category->id}}" href="">{{$category->name}}</a></li>
                            <?php $j++; ?>
                        @endforeach
                    </ul>
                    <!-- /nav -->
                </div>
            </div>
        </div>
        <!-- /NAV -->
    </header>
    <!--SECTION -->
    <!-- ======= Latest News Section ======= -->
    <section class="section section-news section-t8 tab-content">
        <?php $i=1; ?>
        @foreach($categories as $category)
            <div class="container tab-pane fade @if($i==1) in active @endif" id="dich_vu_{{$category->id}}">
                {{--                    <div class="card-box-b card-shadow news-box">--}}
                <div class="post post-row">
                    @foreach($services[$category->id] as $service)
                        <div class="col-6">
                            <a class="post-img" href="{{url('dich-vu', $service->url)}}"><img alt="{{$service->name}}" src="{{!empty($service->image) ? URL::to($service->image) : URL::to('/images/noimage.jpg')}}"/></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="{{url('/dich-vu', $service->url)}}">{{$service->name}}</a></h3>
                                {{--                            <ul class="post-meta">--}}
                                {{--                                <li><a href="author.html">John Doe</a></li>--}}
                                {{--                                <li>20 April 2018</li>--}}
                                {{--                            </ul>--}}
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <?php $i++; ?>
        @endforeach
    </section>
    <!-- End Latest News Section -->
    <!-- /SECTION -->

@endsection
