@extends('web.app')

@section('free-style')
    <link type="text/css" rel="stylesheet" href="css/pro-style.css"/>
@endsection

@section('content')
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <div id="nav-top">
                <h1>PHÂN BÓN</h1>
                <hr style="width: 100px; text-align: center; border: 1px solid"/>
                {{--<p>"Chọn lọc những gì tốt nhất từ thiên nhiên để chăm sóc gia đình bạn"</p>--}}
            </div>
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        @foreach($categories as $category)
                            <li><a data-toggle="tab" href="#{{$category->name}}_{{$category->id}}" href="">{{$category->name}}</a></li>
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
            <div class="container tab-pane fade @if($i==1) in active @endif" id="{{$category->name}}_{{$category->id}}">
                {{--                    <div class="card-box-b card-shadow news-box">--}}
                <div class="post post-row">
                    @foreach($fertilizers[$category->id] as $fe)
                        <div class="col-6">
                            <a class="post-img" href="{{url('phan-bon', $fe->url)}}"><img src="{{!empty($fe->image) ? URL::to($fe->image) : URL::to('/images/noimage.jpg')}}"/></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="{{url('/phan-bon', $fe->url)}}">{{$fe->name}}</a></h3>
                                <p>{{$fe->description}}</p>
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
