<!DOCTYPE html>
<html lang="es">
<head>
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



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


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{env('API_KEY_MAP')}}&callback=initMap&libraries=&v=weekly"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>