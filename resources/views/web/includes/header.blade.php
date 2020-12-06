<header id="header">
    <!-- NAV -->
    <div id="nav">
        <div id="nav-top">
            <div class="container">
                <!-- social -->
                <ul class="nav-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li> <a href="{{url('/login')}}">Đăng nhập</a></li>
                </ul>
                <!-- /social -->

                <!-- logo -->
            {{--                <div class="nav-logo">--}}
            {{--                    <a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>--}}
            {{--                </div>--}}
            <!-- logo -->
                <div class="nav-logo">
                    <a href="/" class="logo"><img src="{{url('./img/logo-viet-farm.png')}}" alt=""></a>
                </div>
                <!-- /logo -->
                <!-- /logo -->

                <!-- search & aside toggle -->
                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    {{--                    <button class="search-btn"><i class="fa fa-search"></i></button>--}}
                    {{--                    <div id="nav-search">--}}
                    {{--                        <form>--}}
                    {{--                            <input class="input" name="search" placeholder="Enter your search...">--}}
                    {{--                        </form>--}}
                    {{--                        <button class="nav-close search-close">--}}
                    {{--                            <span></span>--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                </div>
                <!-- /search & aside toggle -->
                <!-- Aside Nav -->
                <div id="nav-aside">
                    <ul class="nav-aside-menu">
                        <li><a href="{{asset('/')}}">VIET FARM</a></li>
                        <li><a href="{{url('/phan-bon')}}">PHÂN BÓN</a></li>
                        <li><a href="{{url('/cong-nghe')}}">CÔNG NGHỆ</a></li>
                        <li><a href="{{url('/dich-vu')}}">DỰ ÁN KHOA HỌC</a></li>
                        <li><a href="{{url('/dich-vu')}}">CHỨNG NHẬN</a></li>
                        <li><a href="{{url('/dich-vu')}}">GIỐNG & BVTV</a></li>
                        <li><a href="{{url('/san-pham')}}">THỰC PHẨM SẠCH</a></li>
                        <li><a href="{{asset('/contact')}}">LIÊN HỆ</a></li>
                    </ul>
                    <button class="nav-close nav-aside-close"><span></span></button>
                </div>
                <!-- /Aside Nav -->
            </div>
        </div>
        <!-- /Top Nav -->
        <!-- Top Nav -->
    {{--        <div id="nav-top">--}}
    {{--            <div class="container">--}}
    {{--                <!-- social -->--}}
    {{--                <div class="pull-left">--}}
    {{--                    <ul class="nav-menu">--}}
    {{--                        <li><a href="#">VIET FARM</a></li>--}}
    {{--                        <li><a href="#">THỰC PHẨM SẠCH</a></li>--}}
    {{--                        <li><a href="#">DỊCH VỤ</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--                <!-- /social -->--}}



    {{--                <!-- search & aside toggle -->--}}
    {{--                <div class="pull-right">--}}
    {{--                    <ul class="nav-menu">--}}
    {{--                        <li><a href="#">CHUYỂN GIAO CÔNG NGHỆ</a></li>--}}
    {{--                        <li><a href="#">PHÂN BÓN</a></li>--}}
    {{--                        <li><a href="#">LIÊN HỆ</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--                <!-- /search & aside toggle -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <!-- /Top Nav -->
        <div id="nav-bottom">
            <div class="container">
                <!-- nav -->

                <ul class="nav-menu">
                    <li><a href="{{asset('/')}}">VIET FARM</a></li>
                    <li><a href="{{url('/phan-bon')}}">PHÂN BÓN</a></li>
                    <li><a href="{{url('/cong-nghe')}}">CÔNG NGHỆ</a></li>
                    <li><a href="{{url('/dich-vu')}}">DỰ ÁN KHOA HỌC</a></li>
                    <li><a href="{{url('/dich-vu')}}">CHỨNG NHẬN</a></li>
                    <li><a href="{{url('/dich-vu')}}">GIỐNG & BVTV</a></li>
                    <li><a href="{{url('/san-pham')}}">THỰC PHẨM SẠCH</a></li>
                    <li><a href="{{asset('/contact')}}">LIÊN HỆ</a></li>
                </ul>
                <!-- /nav -->
            </div>
        </div>
    </div>
    <!-- /NAV -->
</header>
