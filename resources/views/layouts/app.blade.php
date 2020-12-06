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
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <a href="{{url('/')}}"><img alt="image" height="40" src="{{asset('./img/logo-viet-farm.png')}}" /></a>
                        </span>
                        <span class="block m-t-xs"> <strong class="font-bold" style="color: #fff;">VietFarmSolution</strong>
                        </span>
                    </div>
                </li>
                <li class="{{ (\Request::getRequestUri() === '/admin' || \Request::getRequestUri() === '/admin/') ? 'active' : '' }}">
                    <a href="{{url('/admin')}}"><i class="fa fa-tachometer"></i> <span class="nav-label">Tổng quam</span>  </a>
                </li>
                <li class="{{ request()->is('admin/*slides*') ? 'active' : '' }}">
                    <a href="{{url('/admin/news')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Slides</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/slides') ? 'active' : '' }}"><a href="{{url('/admin/slides')}}">Danh sách slides</a></li>
                        <li class="{{ request()->is('admin/slides/create') ? 'active' : '' }}"><a href="{{url('/admin/slides/create')}}">Thêm slides mới</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/*news*') ? 'active' : '' }}">
                    <a href="{{url('/admin/news')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Bài viết</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/news') ? 'active' : '' }}"><a href="{{url('/admin/news')}}">Danh sách Bài viết</a></li>
                        <li class="{{ request()->is('admin/news/create') ? 'active' : '' }}"><a href="{{url('/admin/news/create')}}">Thêm bài viết mới</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/*products*') ? 'active' : '' }}" >
                    <a href="{{url('/admin/category-products')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Danh mục Sản Phẩm</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/category-products') ? 'active' : '' }}"><a href="{{url('/admin/category-products')}}">Danh mục sản phẩm</a></li>
                        <li class="{{ request()->is('admin/products') ? 'active' : '' }}"><a href="{{url('/admin/products')}}">Danh sách sản phẩm</a></li>
                        <li class="{{ request()->is('admin/products/create') ? 'active' : '' }}"><a href="{{url('/admin/products/create')}}">Thêm Sản phảm mới</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/*services*') ? 'active' : '' }}">
                    <a href="{{url('/admin/category-services')}}"><i class="fa fa-server"></i> <span class="nav-label">Danh mục dịch vụ</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/category-services') ? 'active' : '' }}"><a href="{{url('/admin/category-services')}}">Danh mục dịch vụ</a></li>
                        <li class="{{ request()->is('admin/services') ? 'active' : '' }}"><a href="{{url('/admin/services')}}">Danh sách dịch vụ</a></li>
                        <li class="{{ request()->is('admin/services/create') ? 'active' : '' }}"><a href="{{url('/admin/services/create')}}">Thêm dịch vụ mới</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/*technologies*') ? 'active' : '' }}">
                    <a href="{{url('/admin/category-technologies')}}"><i class="fa fa-twitch"></i> <span class="nav-label">Danh mục công nghệ</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/category-technologies*') ? 'active' : '' }}"><a href="{{url('/admin/category-technologies')}}">Danh mục công nghệ</a></li>
                        <li class="{{ request()->is('admin/technologies') ? 'active' : '' }}"><a href="{{url('/admin/technologies')}}">Danh sách công nghệ</a></li>
                        <li class="{{ request()->is('admin/technologies/create') ? 'active' : '' }}"><a href="{{url('/admin/technologies/create')}}">Thêm công nghệ mới</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/*fertilizers*') ? 'active' : '' }}">
                    <a href="{{url('/admin/category-fertilizers')}}"><i class="fa fa-twitch"></i> <span class="nav-label">Danh mục phân bón</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/category-fertilizers') ? 'active' : '' }}"><a href="{{url('/admin/category-fertilizers')}}">Danh mục phân bón</a></li>
                        <li class="{{ request()->is('admin/fertilizers') ? 'active' : '' }}"><a href="{{url('/admin/fertilizers')}}">Danh sách phân bón</a></li>
                        <li class="{{ request()->is('admin/fertilizers/create') ? 'active' : '' }}"><a href="{{url('/admin/fertilizers/create')}}">Thêm phân bón mới</a></li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/*certifications*') ? 'active' : '' }}">
                    <a href="{{url('/admin/category-certifications')}}"><i class="fa fa-twitch"></i> <span class="nav-label">Danh mục chứng nhận</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ request()->is('admin/category-certifications') ? 'active' : '' }}"><a href="{{url('/admin/category-certifications')}}">Danh mục chứng nhận</a></li>
                        <li class="{{ request()->is('admin/certifications') ? 'active' : '' }}"><a href="{{url('/admin/certifications')}}">Danh sách chứng nhận</a></li>
                        <li class="{{ request()->is('admin/certifications/create') ? 'active' : '' }}"><a href="{{url('/admin/certifications/create')}}">Thêm phân thêm chứng nhận</a></li>
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
                <li class="{{ request()->is('admin/*users*') ? 'active' : '' }}">
                    <a href="{{url('admin/users')}}"><i class="fa fa-user"></i> <span class="nav-label">Quản lý Users</span></a>
{{--                    <ul class="nav nav-second-level collapse">--}}
{{--                        <li><a href="{{'admin/users'}}">Thông tin</a></li>--}}
{{--                        <li><a href="account.html">Tài khoản</a></li>--}}
{{--                        <li><a href="setting.html">Cài đặt hiển thị</a></li>--}}
{{--                    </ul>--}}
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
    <div id="page-wrapper" class="gray-bg">
        @if(Session::has('message'))
            <article class="flash message">
                <p class="alert {{ Session::get('alert-class') }} message-info">{{ Session::get('message') }}</p>
            </article>
        @endif
        @include('../admin/header')
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
<!-- Custom and plugin javascript -->
<script src="{{asset('/cms/js/inspinia.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('/cms/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

@yield('javascript-custom')
</body>
</html>
