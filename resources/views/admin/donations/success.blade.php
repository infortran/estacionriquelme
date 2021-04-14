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
                                                <i class="fa fa-hearth"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center title">
                                            <h3>Eres lo mas lindo!</h3>
                                            <p>de este mundo <3</p>
                                            <p>Gracias de parte de todos los trabajadores de Estacion Riquelme</p>
                                        </div>
                                        <div class="token-container col-md-12 d-flex">
                                            <div class="qr">
                                                {!! QrCode::size(60)->generate('abcdeFgSkShhJJKSj') !!}
                                            </div>
                                            <div class="token">
                                                abcdeFgSkShhJJKSj
                                            </div>
                                        </div>
                                        <div class="col-md-12 message">
                                            <div class="alert text-center">
                                                <p><strong>Te hemos enviado una copia de este código a:</strong></p>
                                                <p style="font-weight:bolder"><strong>freddy.perez.trabajos@gmail.com</strong></p>
                                                <p>como comprobante de tu donación</p>
                                                <small>Guarda este comprobante para cobrar tu 2x1 en piscolas</small>
                                            </div>
                                            <div class="alert">
                                                <strong>Nombre: </strong>Freddy Perez
                                            </div>
                                            <div class="d-flex">
                                                <div class="alert" style="flex:1;margin-right:5px;margin-top:0 !important; margin-bottom: auto">
                                                    <strong>Rut: </strong><br>16785738-8
                                                </div>
                                                <div class="alert" style="flex:1;margin-left:5px;margin-top:0 !important; margin-bottom: auto">
                                                    <strong>Fecha: </strong><br>13/04/2021
                                                </div>
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