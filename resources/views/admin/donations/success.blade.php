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
                        <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4 payment success">
                            <div class="card" >
                                <div class="card-body" style="margin-top: 20px">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="{{ asset('images/corazon.png') }}" alt="">
                                        </div>
                                        <div class="col-md-12 text-center title">
                                            <h3>Eres lo mas lindo!</h3>
                                            <p>de este mundo</p>
                                            <p>Gracias de parte de todos los trabajadores de<br>Estacion Riquelme</p>
                                        </div>
                                        <div class="token-container col-md-12 d-flex">
                                            <div class="qr">
                                                {!! QrCode::size(60)->generate($commerceOrder ?? '123') !!}
                                            </div>
                                            <div class="token">
                                                {{$commerceOrder ?? ''}}
                                            </div>
                                        </div>
                                        <div class="col-md-12 message">
                                            <div class="alert text-center">
                                                <p><strong>Te hemos enviado una copia de este código a:</strong></p>
                                                <p style="font-weight:bolder"><strong>{{$payer ?? ''}}</strong></p>
                                                <p>como comprobante de tu donación</p>
                                                <small>Con este comprobante podrás cobrar tu 2x1 en piscolas</small>
                                            </div>
                                            <div class="alert">
                                                <strong>Nombre: </strong>Freddy Perez
                                            </div>
                                            <div class="d-flex">
                                                <div class="alert" style="flex:1;margin-right:5px;margin-top:0 !important; margin-bottom: auto">
                                                    <strong>Rut: </strong><br>{{$optional['rut'] ?? ''}}
                                                </div>
                                                <div class="alert" style="flex:1;margin-left:5px;margin-top:0 !important; margin-bottom: auto">
                                                    @isset($requestDate)
                                                    <strong>Fecha: </strong><br>{{date('d/m/Y', strtotime($requestDate))}}
                                                        @endif
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12 mt-5 text-center">
                                            <a href="{{url('/cuenta')}}" class="btn btn-primary">
                                                <i class="fa fa-user-circle"></i>
                                                Volver a tu cuenta</a>
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