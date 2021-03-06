<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>VietFarmSolution</title>
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
    <div class="header-main">
        <h1>VietFarmSolution</h1>
        <div class="header-bottom">
            <div class="header-right w3agile">

                <div class="header-left-bottom agileinfo">

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <input type="text" name="email" placeholder="email" />
                        <input type="password" name="password" placeholder="password"/>
                        <div class="remember">
                            <div class="forgot">
                                <h6><a href="{{ route('password.update') }}">Forgot Password?</a></h6>
                            </div>
                            <div class="clear"> </div>
                        </div>

                        <input type="submit" value="Login">
                        @if($errors->any())
                            <span class="invalid-feedback mt-5" role="alert">
                                <strong>{{$errors->first()}}</strong>
                            </span>
                        @endif
                    </form>
                    {{--<div class="header-left-top">--}}
                    {{--<div class="sign-up"> <h2>or</h2> </div>--}}

                    {{--</div>--}}
                    {{--<div class="header-social wthree">--}}
                    {{--<a href="#" class="face"><h5>Facebook</h5></a>--}}
                    {{--<a href="#" class="twitt"><h5>Twitter</h5></a>--}}
                    {{--</div>--}}

                </div>
            </div>

        </div>
    </div>
</div>
<!--header end here-->
<div class="copyright">
    <p>© 2020 VietFarmSolution Design by </p>
</div>
<!--footer end here-->
</body>
</html>
