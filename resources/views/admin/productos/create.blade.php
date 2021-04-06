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
                        <h4>Productos</h4>
                    </div>
                    <button type="submit" class="btn btn-contrast pull-right">
                        <i class="material-icons">save</i>
                        Guardar</button>
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
                                    <h4 class="card-title">Agregar nuevo producto</h4>
                                    <div style="margin-left: auto">
                                        <label class="switch" >
                                            <input name="enabled" type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        <div>En stock</div>
                                    </div>


                                </div>
                                <div class="card-body" style="margin-top: 20px">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Titulo</label>
                                                            <input name="title" type="text" class="form-control" value="{{old('title')}}" required>
                                                        </div>
                                                    </div>
                                                    <!--div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Cantidad</label>
                                                            <input name="stock" type="text" class="form-control" value="{{old('stock')}}">
                                                        </div>
                                                    </div-->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Capacidad</label>
                                                            <input name="m_capacity" type="text" class="form-control" value="{{old('title')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Capacidad Secundaria</label>
                                                            <input name="s_capacity" type="text" class="form-control" value="{{old('title')}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Descripcion</label>
                                                            <input name="description" type="text" class="form-control" value="{{old('description')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio</label>
                                                            <input name="m_price" type="number" class="form-control" value="{{old('m_price')}}" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio Secundario</label>
                                                            <input name="s_price" type="number" class="form-control" value="{{old('s_price')}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio</label>
                                                            <input name="m_price" type="number" class="form-control" value="{{old('m_price')}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Precio Secundario</label>
                                                            <input name="s_price" type="number" class="form-control" value="{{old('s_price')}}">
                                                        </div>
                                                    </div>
                                                </div-->

                                                <!--div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">URL amigable (Obligatorio)</label>
                                                            <input name="slug" type="text" class="form-control" value="{{--old('slug')--}}">
                                                        </div>
                                                    </div>
                                                </div-->

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Categoría</label>
                                                            <select name="categoria_id" class="form-control selectpicker" data-style="btn btn-link" id="">
                                                                <option value="0" selected disabled>Selecciona una categoría</option>

                                                                @foreach($categorias as $categoria)
                                                                <option value="{{$categoria->id}}" >{{$categoria->title}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{--<!--div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Marca</label>
                                                            <select name="marca_id" class="form-control selectpicker" data-style="btn btn-link" id="">
                                                                <option value="0" selected disabled>Selecciona una marca</option>
                                                                @foreach($marcas as $marca)
                                                                <option value="{{$marca->id}}">{{$marca->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div-->--}}
                                                </div>

                                            </div>
                                            <!--div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img id="img-input-producto" src="{{--asset('images/img-placeholder.png')--}}" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="input-img-btn" for="img-file">
                                                        <i class="material-icons">image</i>
                                                        <span>Subir Imagen</span>
                                                    </label>
                                                    <input name="img" type="file" id="img-file" class="d-none">
                                                </div>
                                            </div-->
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