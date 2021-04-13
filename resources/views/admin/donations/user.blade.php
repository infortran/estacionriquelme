@extends('admin.templates.main')

@section('content')
    <div class="wrapper ">
        <!--Sidebar Goes Here-->
        @include('admin.templates.sidebar')
        <form action="{{url('/admin/productos')}}" method="POST" enctype="multipart/form-data"  class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <h4>Dona Una Piscola</h4>
                    </div>
                    <button style="border:none" type="submit" class="pull-right">
                        <img src='https://www.flow.cl/img/botones/btn-donar-celeste.png'>
                    </button>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" >
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-header card-header-primary" style="display: flex;">
                                    <h4 class="card-title">Cupón de donación</h4>
                                    <div style="margin-left: auto;display:none">
                                        <label class="switch" >
                                            <input name="enabled" type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        <div>Donar sin cobrar</div>
                                    </div>


                                </div>
                                <div class="card-body" style="margin-top: 20px">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nombre</label>
                                                        <input name="name" type="text" class="form-control" value="{{old('name')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">R.U.N</label>
                                                        <input name="stock" type="text" class="form-control" value="{{old('stock')}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Descripcion</label>
                                                        <input name="description" type="text" class="form-control" value="{{old('description')}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Precio</label>
                                                        <input name="price" type="number" class="form-control" value="{{old('price')}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Precio Anterior</label>
                                                        <input name="oldprice" type="number" class="form-control" value="{{old('oldprice')}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">URL amigable (Obligatorio)</label>
                                                        <input name="slug" type="text" class="form-control" value="{{old('slug')}}">
                                                    </div>
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
        </form>
    </div>


@endsection