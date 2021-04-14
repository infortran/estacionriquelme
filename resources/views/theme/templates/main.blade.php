@extends('theme.templates.index')

@section('content')


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

@endsection