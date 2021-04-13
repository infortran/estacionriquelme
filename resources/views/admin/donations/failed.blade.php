@extends('admin.templates.main')

@section('content')
    <div class="wrapper">
        <div class="main-pane">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center mt-2">
                            <img style="width:150px;border-radius:50%;" src="{{asset('/images/logo_optimized_bg_black.png')}}" alt="Estacion Riquelme">
                        </div>
                        <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4  payment-success">
                            <div class="card" >
                                <div class="card-body" style="margin-top: 20px">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="icon-container">
                                                <div class="icon"></div>
                                                <i class="fa fa-exclamation"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center title">
                                            <h3>Has ayudado</h3>
                                            <p>Donando una piscola</p>
                                        </div>
                                        <div class="col-md-12 message">
                                            <div class="alert text-center">
                                                <p><strong>Te hemos enviado una copia de este código a:</strong></p>
                                                <p style="font-weight:bolder"><strong>freddy.perez.trabajos@gmail.com</strong></p>
                                                <p>como comprobante de tu donación</p>
                                                <small>Guarda este comprobante para cobrar tu 2x1 en piscolas</small>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Footer Goes Here-->
            @include('admin.templates.footer')
        </div>
    </div>


@endsection