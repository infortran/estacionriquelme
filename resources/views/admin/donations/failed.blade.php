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
                        <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4 payment failed">
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
                                            <h3>Lo sentimos</h3>
                                            <p>Hubo un error en la transacción</p>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <a href="{{ url('/cuenta') }}">
                                                <button class="btn-back">Regresar a cuenta</button>
                                            </a>
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