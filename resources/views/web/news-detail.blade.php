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
                        <p>{{$new->content}}</p>
                        <figure class="pull-right">
                            <img src="{{$new->image}}" alt="">
                        </figure>
                        <p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>
                        <p>Sit nulla quidam et, eam ea legimus deserunt neglegentur. Et veri nostrud vix, meis minimum atomorum ex sea, stet case habemus mea no. Ut dignissim dissentiet his, mei ea delectus delicatissimi, debet dissentiunt te duo. Sonet partiendo et qui, pro et veri solet singulis. Vidit viderer eleifend ad nam. Minimum eligendi suscipit ius et, vis ex laoreet detracto scripserit, at sumo sale solum pro.</p>
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
                    {{--</div>--}}
                    {{--<!-- /post tags -->--}}
                    {{--<!-- /related post -->--}}
                    {{--<div>--}}
                        {{--<div class="section-title">--}}
                            {{--<h3 class="title">Related Posts</h3>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<!-- post -->--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="post post-sm">--}}
                                    {{--<a class="post-img" href="blog-post.html"><img src="{{asset('./img/post-4.jpg')}}" alt=""></a>--}}
                                    {{--<div class="post-body">--}}
                                        {{--<div class="post-category">--}}
                                            {{--<a href="category.html">Health</a>--}}
                                        {{--</div>--}}
                                        {{--<h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>--}}
                                        {{--<ul class="post-meta">--}}
                                            {{--<li><a href="author.html">John Doe</a></li>--}}
                                            {{--<li>20 April 2018</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /post -->--}}

                            {{--<!-- post -->--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="post post-sm">--}}
                                    {{--<a class="post-img" href="blog-post.html"><img src="{{asset('./img/post-6.jpg')}}" alt=""></a>--}}
                                    {{--<div class="post-body">--}}
                                        {{--<div class="post-category">--}}
                                            {{--<a href="category.html">Fashion</a>--}}
                                            {{--<a href="category.html">Lifestyle</a>--}}
                                        {{--</div>--}}
                                        {{--<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>--}}
                                        {{--<ul class="post-meta">--}}
                                            {{--<li><a href="author.html">John Doe</a></li>--}}
                                            {{--<li>20 April 2018</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /post -->--}}

                            {{--<!-- post -->--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="post post-sm">--}}
                                    {{--<a class="post-img" href="blog-post.html"><img src="{{asset('./img/post-7.jpg')}}" alt=""></a>--}}
                                    {{--<div class="post-body">--}}
                                        {{--<div class="post-category">--}}
                                            {{--<a href="category.html">Health</a>--}}
                                            {{--<a href="category.html">Lifestyle</a>--}}
                                        {{--</div>--}}
                                        {{--<h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>--}}
                                        {{--<ul class="post-meta">--}}
                                            {{--<li><a href="author.html">John Doe</a></li>--}}
                                            {{--<li>20 April 2018</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /post -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /related post -->--}}

                    {{--<!-- post comments -->--}}
                    {{--<div class="section-row">--}}
                        {{--<div class="section-title">--}}
                            {{--<h3 class="title">3 Comments</h3>--}}
                        {{--</div>--}}
                        {{--<div class="post-comments">--}}
                            {{--<!-- comment -->--}}
                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                                    {{--<img class="media-object" src="{{asset('./img/avatar-2.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<div class="media-heading">--}}
                                        {{--<h4>John Doe</h4>--}}
                                        {{--<span class="time">5 min ago</span>--}}
                                    {{--</div>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                    {{--<a href="#" class="reply">Reply</a>--}}
                                    {{--<!-- comment -->--}}
                                    {{--<div class="media media-author">--}}
                                        {{--<div class="media-left">--}}
                                            {{--<img class="media-object" src="{{asset('./img/avatar-1.jpg')}}" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<div class="media-heading">--}}
                                                {{--<h4>John Doe</h4>--}}
                                                {{--<span class="time">5 min ago</span>--}}
                                            {{--</div>--}}
                                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                            {{--<a href="#" class="reply">Reply</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- /comment -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /comment -->--}}

                            {{--<!-- comment -->--}}
                            {{--<div class="media">--}}
                                {{--<div class="media-left">--}}
                                    {{--<img class="media-object" src="{{asset('./img/avatar-3.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<div class="media-heading">--}}
                                        {{--<h4>John Doe</h4>--}}
                                        {{--<span class="time">5 min ago</span>--}}
                                    {{--</div>--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
                                    {{--<a href="#" class="reply">Reply</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- /comment -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /post comments -->--}}

                    {{--<!-- post reply -->--}}
                    {{--<div class="section-row">--}}
                        {{--<div class="section-title">--}}
                            {{--<h3 class="title">Leave a reply</h3>--}}
                        {{--</div>--}}
                        {{--<form class="post-reply">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<textarea class="input" name="message" placeholder="Message"></textarea>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input class="input" type="text" name="name" placeholder="Name">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input class="input" type="email" name="email" placeholder="Email">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input class="input" type="text" name="website" placeholder="Website">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<button class="primary-button">Submit</button>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    <!-- /post reply -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
