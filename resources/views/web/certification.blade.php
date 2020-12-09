@extends('web.app')

@section('free-style')
    <link type="text/css" rel="stylesheet" href="css/pro-style.css"/>
@endsection

@section('content')
    <header id="header">
        <!-- NAV -->
        <div id="nav">
            <div id="nav-top">
                <h1>CHỨNG NHẬN</h1>
                <hr style="width: 100px; text-align: center; border: 1px solid"/>
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
            <div class="row no-gutters clients-wrap clearfix aos-init aos-animate" data-aos="fade-up">

               <div class="row">
                   <div class="col-lg-4 col-md-4">
                       <div class="cn-logo">
                           <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                       </div>
                   </div>

                   <div class="col-lg-4 col-md-4">
                       <div class="cn-logo">
                           <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                       </div>
                   </div>

                   <div class="col-lg-4 col-md-4">
                       <div class="cn-logo">
                           <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                       </div>
                   </div>
               </div>
                <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-4 col-md-4">
                        <div class="cn-logo">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="cn-logo">
                            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="cn-logo">
                            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /SECTION -->
    <!-- End Latest News Section -->
    <!-- /SECTION -->

@endsection
