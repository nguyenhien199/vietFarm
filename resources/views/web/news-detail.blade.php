@extends('web.app')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    {{--<!-- post share -->--}}
                    {{--<div class="section-row">--}}
                        {{--<div class="post-share">--}}
                            {{--<a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>--}}
                            {{--<a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>--}}
                            {{--<a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>--}}
                            {{--<a href="#"><i class="fa fa-envelope"></i><span>Email</span></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /post share -->--}}

                    <!-- post content -->
                    <div class="section-row">
                        <h3>{{$new->title}}</h3>
                        <span>{{$new->created_at}}  {{$new->user()}}</span>
                        <p >{!! $new->content !!}</p>
                        {{--<figure class="pull-right">--}}
                            {{--<img src="{{$new->image}}" alt="">--}}
                        {{--</figure>--}}
                        {{--<blockquote class="blockquote">--}}
                            {{--<p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>--}}
                            {{--<footer class="blockquote-footer">John Doe</footer>--}}
                        {{--</blockquote>--}}
                    </div>
                    <!-- /post content -->

                    <!-- post tags -->
                    <div class="section-row">
                        <div class="post-tags">
                            <ul>
                                <li>TAGS:</li>
                                <li><a href="#">Social</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Health</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
