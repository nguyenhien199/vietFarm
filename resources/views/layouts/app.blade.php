<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Webify Content Management System V1.10</title>

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
                            <img alt="image" src="{{asset('cms/img/logo.png')}}" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                        <span class="block m-t-xs"> <strong class="font-bold">CMS Webify V1.10</strong>
                        </span>
                          <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Về Webify</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Hướng dẫn sử dụng</a></li>

                          </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="index.html"><i class="fa fa-tachometer"></i> <span class="nav-label">Trung tâm</span>  </a>
                </li>
                <li>
                    <a href="media.html"><i class="fa fa-picture-o"></i> <span class="nav-label">Thư viện</span></a>
                </li>
                <li class="admin-nav">
                    <a href="{{url('/admin/news')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Bài viết</span><span class="fa arrow"></span></a>
                </li>
                <li class="admin-nav">
                    <a href="{{url('/admin/products')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Sản Phẩm</span><span class="fa arrow"></span></a>
                </li>
                <li>
                    <a href="page.html"><i class="fa fa-twitch"></i> <span class="nav-label">Trang</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="page.html">Tất cả trang</a></li>
                        <li><a href="add_page.html">Thêm trang mới</a></li>

                    </ul>
                </li>


                <li>
                    <a href="#"><i class="fa fa-sliders"></i> <span class="nav-label">Giao diện</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="custom_theme.html">Tùy biến giao diện</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/users')}}"><i class="fa fa-user"></i> <span class="nav-label">Quản lý Users</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{'admin/users'}}">Thông tin</a></li>
                        <li><a href="account.html">Tài khoản</a></li>
                        <li><a href="setting.html">Cài đặt hiển thị</a></li>
                    </ul>
                </li>
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
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="button is-primary is-medium has-text-weight-semibold btn-logout" type="submit">
                        Logout<i class="fa fa-sign-out ml-5"></i>
                    </button>
                </form>
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
<script src="{{asset('/cms/js/admin.js')}}"></script>
</body>
</html>
