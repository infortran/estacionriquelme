@extends('admin.templates.main')

@section('content')
    <div class="wrapper">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <h4>Dashboard</h4>

                    </div>
                    <a href="{{url('/')}}" class="btn btn-primary btn-nav-desktop" style="margin-left: auto;margin-right: 10px">
                        <i class="material-icons">store</i>
                        Ir a la tienda</a>
                    <form action="{{route('logout')}}" method="post" style="display:none" id="form-logout">
                        @csrf
                    </form>
                    <button onclick="getElementById('form-logout').submit()" class="btn btn-contrast btn-nav-desktop">
                        <i class="material-icons">logout</i>
                        Salir</button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                @include('admin.home.dashboard')
            </div>
            <!--Footer Goes Here-->
        </div>
    </div>
    <!--Fixed plugin Goes Here-->
@endsection
