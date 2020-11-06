<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Callie HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />




    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
{{--    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset("assets/vendor/ionicons/css/ionicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
{{--    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="{{asset("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <!-- Custom stlylesheet -->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset("css/style.css")}}" />
    <section class="free-style">
        @yield('free-style')
    </section>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- HEADER -->

<!-- /HEADER -->
{{--@include('web.includes.header')--}}
<!--End Footer -->

<section class="content">
    @yield('content')
</section>
<!-- FOOTER -->
@include('web.includes.footer')
<!-- /FOOTER -->

<!-- jQuery Plugins -->

<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
{{--<script src="{{asset("js/jquery.stellar.min.js")}}"></script>--}}
<script src="{{asset("js/main.js")}}"></script>

{{--<script src="assets/vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>--}}
{{--<script src="assets/vendor/php-email-form/validate.js"></script>--}}
<script src="{{asset("assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/vendor/scrollreveal/scrollreveal.min.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("assets/js/main.js")}}"></script>
<script>
    $('.thumbnail').on('click', function() {
        var clicked = $(this);
        var newSelection = clicked.data('big');
        var $img = $('.primary').css("background-image","url(" + newSelection + ")");
        clicked.parent().find('.thumbnail').removeClass('selected');
        clicked.addClass('selected');
        $('.primary').empty().append($img.hide().fadeIn('slow'));
    });
</script>

</body>

</html>
