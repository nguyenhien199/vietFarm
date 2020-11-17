<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VietFarmSolution</title>

    <link href="{{asset('cms/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('cms/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('cms/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('cms/css/style.css')}}" rel="stylesheet">

</head>

<body>
<div id="wrapper">
    @if(Session::has('message'))
        <article class="flash message">
            <p class="alert {{ Session::get('alert-class') }} message-info">{{ Session::get('message') }}</p>
        </article>
    @endif
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" height="40" src="{{asset('./img/logo-viet-farm.png')}}" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                        <span class="block m-t-xs"> <strong class="font-bold">VietFarmSolution</strong>
                        </span>
                          <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            {{--<li><a href="#">Về Webify</a></li>--}}
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Hướng dẫn sử dụng</a></li>
                          </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="{{url('/admin/overview')}}"><i class="fa fa-tachometer"></i> <span class="nav-label">Tổng quam</span>  </a>
                </li>
                <li class="admin-nav">
                    <a href="{{url('/admin/news')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Bài viết</span></a>
                </li>
                <li class="admin-nav">
                    <a href="{{url('/admin/category-products')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Danh mục Sản Phẩm</span><span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="{{url('/admin/category-services')}}"><i class="fa fa-server"></i> <span class="nav-label">Danh mục dịch vụ</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="page.html">Danh sách dịch vụ</a></li>
                        <li><a href="add_page.html">Thêm dịch vụ</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/category-technologies')}}"><i class="fa fa-twitch"></i> <span class="nav-label">Danh mục công nghệ</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="page.html">Danh sách chuyển giao công nghệ</a></li>
                        <li><a href="add_page.html">Thêm thêm chuyển giao công nghệ</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/category-fertilizers')}}"><i class="fa fa-twitch"></i> <span class="nav-label">Danh mục phân bón</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="page.html">Danh sách phân bón</a></li>
                        <li><a href="add_page.html">Thêm phân bón </a></li>

                    </ul>
                </li>

                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-sliders"></i> <span class="nav-label">Giao diện</span><span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level collapse">--}}
                        {{--<li><a href="menu.html">Menu</a></li>--}}
                        {{--<li><a href="custom_theme.html">Tùy biến giao diện</a></li>--}}

                    {{--</ul>--}}
                {{--</li>--}}
                @if(\Illuminate\Support\Facades\Auth::user()->role == \App\User::ADMIN)
                <li>
                    <a href="{{url('admin/users')}}"><i class="fa fa-user"></i> <span class="nav-label">Quản lý Users</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{'admin/users'}}">Thông tin</a></li>
                        <li><a href="account.html">Tài khoản</a></li>
                        <li><a href="setting.html">Cài đặt hiển thị</a></li>
                    </ul>
                </li>
                @endif
                <!-- <li>
                    <a href="#"><i class="fa fa-paper-plane"></i> <span class="nav-label">Marketing</span><span class="fa arrow"></span><span class="new label-warning pull-right">New</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Tạo landingpage</a></li>


                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Báo cáo</span></a>

                </li> -->
                <!-- <li>
                    <a href="#"><i class="fa fa-puzzle-piece"></i> <span class="nav-label">Ứng dụng</span><span class="fa arrow"></span><span class="new label-warning pull-right">New</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Ứng dụng đã mua</a></li>
                        <li><a href="#">Kho ứng dụng</a></li>

                    </ul>
                </li> -->

            </ul>

        </div>
    </nav>
    <div class="navbar-menu" id="navbar-mobile">
        <div class="navbar-end float-right">
            <div class="navbar-item">
                <li style="list-style: none;cursor: pointer;display: inline-block;" class="user-hearder">
                    Hello <span class="img">{{strtoupper(Auth::user()->name[0])}}</span>
                    <div class="manage_user">
                        <div class="header-user" title="Account">Account</div>
                        <div class="body-user">
                            <div class="image">
                                <span class="img">{{strtoupper(Auth::user()->name[0])}}</span>
                            </div>
                            <div class="info-user">
                                <div class="_1njv2a9PIrnydF">{{Auth::user()->name}}</div>
                                <span class="_2TvKKP0vwCN5Zd">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div class="setting">
                            <nav>
                                <li><i class="fa fa-cog mr-5"></i>Setting</li>
                                <li> <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button class="button is-primary is-medium has-text-weight-semibold btn-logout" type="submit">
                                            <i class="fa fa-sign-out mr-5"></i>Logout
                                        </button>
                                    </form></li>
                            </nav>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
    <div id="page-wrapper" class="gray-bg">
        @yield('content')
    </div>
    <div id="right-sidebar">
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('/cms/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('/cms/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/cms/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('/cms/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/cms/js/admin.js')}}"></script>
</body>
</html>