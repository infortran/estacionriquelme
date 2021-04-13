<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5CP939X');</script>
    <!-- End Google Tag Manager -->
    <title>Estación Riquelme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image" content="{{asset('/images/bar_10.jpg')}}" />
    <meta property="og:image:width" content="640" />
    <meta property="og:image:height" content="442" />
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Bar de barrio para conversar, reír, arreglar el mundo... disfrutando de exquisitos y originales tragos, junto a maravillosas chorrillanas, pizzas, sandwich, y mucho más!" />
    <meta property="og:title" content="Estacion Riquelme">
    <meta property="og:url" content="https://estacionriquelme.cl">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CP939X"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- nav -->
@include('theme.components.nav')


<!--main-->
@include('theme.components.main-slide')

<!--intro-->
@include('theme.components.intro')
<!--about-->
@include('theme.components.about')
<!--services-->
@include('theme.components.services')
<!--menu-->
@include('theme.components.menu.main')
<!--gallery-->
@include('theme.components.gallery')
<!--counter-->
@include('theme.components.counter')
<!--carta-->
@include('theme.components.carta')
<!--contact-->
@include('theme.components.contact')
<!--footer-->
@include('theme.components.footer')


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
<!--script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script-->
<script src="{{asset('js/scrollax.min.js')}}"></script>
<script src="{{asset('js/lazyload.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>