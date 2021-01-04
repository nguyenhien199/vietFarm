@extends('web.app')

@section('free-style')
    <link type="text/css" rel="stylesheet" href="css/pro-style.css"/>
    <style>
        .content {
            padding-top: 0px;
        }
        .phanbon #nav-top h1 {
            padding: 35px 0 0px 0;
            color: #fff;
        }
        .phanbon #nav-top{
            margin-top: 0;
              background: url("{{asset('assets/img/phanbon/phanbon.jpg')}}");
        }
        hr {
            border: 1px solid #fff;
        }
    </style>
@endsection

@section('content')
  <div class="phanbon">
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
                          <?php $j=1; ?>
                          @foreach($categories as $category)
                              <li class="@if($j==1) active @endif"><a data-toggle="tab" href="#phan_bon_{{$category->id}}" href="">{{$category->name}}</a></li>
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
              <div class="container tab-pane fade @if($i==1) in active @endif" id="phan_bon_{{$category->id}}">
                  {{--                    <div class="card-box-b card-shadow news-box">--}}
                  <div class="post post-row">
                      @foreach($fertilizers[$category->id] as $fe)
                          <div class="col-6">
                              <a class="post-img" href="{{url('phan-bon', $fe->url)}}">
                                  <img alt="{{$fe->name}}" src="{{!empty($fe->image) ? URL::to($fe->image) : URL::to('/images/noimage.jpg')}}"/>
                              </a>
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
  </div>

@endsection
