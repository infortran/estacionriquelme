<div class="container-fluid">
    <div-- class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">

            <div class="card card-stats">

                <div class="card-header card-header-warning card-header-icon">
                    <a href="{{url('/admin/productos')}}">
                    <div class="card-icon">
                        <i style="color:#ffffff" class="material-icons">store</i>
                    </div>
                    <p class="card-category">Productos</p>
                    <h3 class="card-title">{{$productos->count()}}</h3>
                    </a>
                </div>

                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-success">add</i>
                        <a href="{{url('/admin/productos/create')}}">Nuevo producto</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <a href="{{url('/admin/categorias')}}">
                    <div class="card-icon">
                        <i style="color:white" class="material-icons">list</i>
                    </div>
                    <p class="card-category">Categorias</p>
                    <h3 class="card-title">{{$categorias->count()}}</h3>
                    </a>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-success">add</i>
                        <a href="{{url('/admin/categorias/create')}}">Nueva categoria</a>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">copyright</i>
                    </div>
                    <p class="card-category">Marcas</p>
                    <h3 class="card-title">{{--$marcas->count()--}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-success">add</i>
                        <a href="{{url('/admin/marcas/create')}}">Nueva marca</a>
                    </div>
                </div>
            </div>
        </div-->
    </div>
</div>