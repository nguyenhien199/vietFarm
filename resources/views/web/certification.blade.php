@extends('web.app')

@section('free-style')
    <link type="text/css" rel="stylesheet" href="css/pro-style.css"/>

@endsection<style>
    .content{
        padding-top: 0 !important;
    }
    .content #header #nav-top{
        background: url("{{asset('assets/img/bg_cn.png')}}");
        margin-top: 0;
        padding-bottom: 1px;
        background-size: cover;
    }
    .content #nav-top h1 {
        padding: 35px 0 0px 0;
        color: #fff;
    }
</style>

@section('content')
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <div id="nav-top">
                <h1>CHỨNG NHẬN</h1>
                <hr style="width: 100px; text-align: center; border: 1px solid #fff"/>
                {{--<p>"Chọn lọc những gì tốt nhất từ thiên nhiên để chăm sóc gia đình bạn"</p>--}}
            </div>
            {{--<div id="nav-bottom">--}}
                {{--<div class="container">--}}
                    {{--<!-- nav -->--}}
                  {{----}}
                    {{--<!-- /nav -->--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <!-- /NAV -->
    </header>
    <!--SECTION -->
    <!-- ======= Latest News Section ======= -->
    <!--SECTION -->
    <section id="clients" class="clients">
        <div class="container aos-init aos-animate" data-aos="fade-up">
           <div class="row">
               @foreach($certifications as $certi)
               <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 colums-quality">
                   <div class="img-quality">
                       <a href="#">
                          <img src="{{asset($certi->image)}}" class="img-fluid" alt="{{$certi->name}}">
                       </a>
                       <div class="info-quality">
                           <a class="name-quality" href="{{url('chung-nhan', $certi->url)}}">{{$certi->name}}</a>
                           <p class="excerpt-quality">&nbsp; {{$certi->description }}</p>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
        </div>
    </section>
    <!-- /SECTION -->
    <!-- End Latest News Section -->
    <!-- /SECTION -->

@endsection
